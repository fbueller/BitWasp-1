<?php
class Model_Product extends Model_Table {
    public $entity_code='products';
    function init(){
        parent::init();

        $this->addField('name');
        $this->addField('description')->type('text');
        $this->addField('price');
        $this->addField('images');
        $this->addField('tiered_prices');
        $this->addField('quantity');
    }
}
