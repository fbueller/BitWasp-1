<?php
class Model_User extends Model_Table {
    public $entity_code='users';
    function init(){
        parent::init();

        $this->addField('name')->caption('Username');
        $this->addField('password')->caption('Passphrase');
        $this->addField('public_key')->type('text');
        $this->addField('date_registered')->type('date')->system(true);
        $this->addField('user_type')->datatype('list')->listData(array('B'=>'Buyer','S'=>'Seller'));
    }
}
