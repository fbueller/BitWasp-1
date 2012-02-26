<?php
class page_product extends Page {
    function init(){
        parent::init();
        $this->api->auth->check();

        $product = $this->add('MVCGrid');
        $product->setModel('Product',array('name','description','price','quantity'));
        $product->addQuickSearch(array('name','description'));
        
    }
    function defaultTemplate(){
        return array('page/product');
    }   
}
