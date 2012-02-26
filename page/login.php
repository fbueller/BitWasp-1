<?php

class Page_login extends Page {
    function init(){
        parent::init();

        //Check if logged in, if so redirect to homepage, otherwise prompt for password
        $this->api->auth->check();
        if($this->api->auth->isLoggedIn())$this->api->redirect('index');

/*
        $form=$this->add('Frame')->setTitle('User Log-in')->add('Form');
        $form->addField('line','name')->js(true)->focus();
        $form->addField('password','password');
        $form->addSubmit('Login');
        $form->setFormClass('vertical');
        $auth=$this->api->auth;

        if($form->isSubmitted()){
            $l=$form->get('name');
            $p=$form->get('password');

            $enc_p = $auth->encryptPassword($p,$l);
            if($auth->verifyCredintials($l,$enc_p)){
                $auth->login($l);
                $form->js()->univ()->redirect('index')->execute();
            }
            $form->getElement('password')->displayFieldError('Incorrect login');
        }
*/
    }
}
