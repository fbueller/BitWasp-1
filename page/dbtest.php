<?php
class page_dbtest extends Page {
    function init(){
        parent::init();

        $this->add('HtmlElement')
            ->setElement('P')
            ->set('Successfully connected to database.');
    }
}
