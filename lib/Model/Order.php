<?php
class Model_Order extends Model_Table {
    public $entity_code='orders';
    function init(){
        parent::init();

        $this->addField('user_id')->refModel('Model_User');
        $this->addField('product_id')->refModel('Model_Product');
        $this->addField('date_bought')->type('date')->system(true);
        $this->addField('paid')->type('boolean')->defaultValue(false);
    }
}
