<?php
class page_gettingStarted extends Page {
    function init(){
        parent::init();

        $this->add('HtmlElement')
            ->setElement('h1')
            ->set('Getting Started!');

        $this->add('HtmlElement')
            ->setElement('P')
            ->set('Please view the video below to learn how you can start making secure anonymous purchases on this site');

        $this->add('HtmlElement')
             ->setElement('iframe')
             ->setAttr('width', '560')
             ->setAttr('height', '315')
             ->setAttr('src', 'http://www.youtube.com/embed/Um63OQz3bjo')
             ->setAttr('frameborder', '0')
             ->set('Link Element');
    }
}
