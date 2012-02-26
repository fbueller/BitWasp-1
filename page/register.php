<?php
class page_register extends Page {
    function init(){
        parent::init();

         if($this->api->auth->isLoggedIn())$this->api->redirect('index');

        //Setup Columns on Page
        $cc    = $this->add('Columns');
        $left  = $cc->addColumn(5);
        $right = $cc->addColumn(5);

        //Registration Form on Left Hand side
        $left->add('HtmlElement')->setElement('h2')->set('Register');

        $regmodel=$left->add('Model_User');
        $regmodel->addField('password')->type('password')->caption('Passphrase')->mandatory(true);

        $registerform = $left->add('MVCForm');
        $registerform->setModel($regmodel);
        $registerform->addField('password','confirm_passphrase');

        $registerform->add('Order')->move('confirm_passphrase','after','password')->onHook($this->api,'post-init');
        $registerform->addSubmit();

        $registerform->onSubmit(function($registerform){
            if($registerform->get('password') != $registerform->get('confirm_passphrase'))
                throw $registerform->exception('Passphrase\'s do not match')->setField('confirm_passphrase');

            $registerform->set('password',
                $registerform->api->auth->encryptPassword($registerform->get('password'),$registerform->get('name')));

            $registerform->update();

            $registerform->js()->hide('slow')->univ()->successMessage('Registered successfully')->execute();
        });

    }
}
