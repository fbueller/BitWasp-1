<?php
/**
 * Consult documentation on http://agiletoolkit.org/learn 
 */
class Frontend extends ApiFrontend {
    function init(){
        parent::init();
        // Keep this if you are going to use database on all pages
        //$this->dbConnect();

        // This will add some resources from atk4-addons, which would be located
        // in atk4-addons subdirectory.
        $this->addLocation('atk4-addons',array(
                    'php'=>array(
                        'mvc',
                        'misc/lib',
                        )
                    ))
            ->setParent($this->pathfinder->base_location);

        // A lot of the functionality in Agile Toolkit requires jUI
        $this->add('jUI');

        // Initialize any system-wide javascript libraries here
        // If you are willing to write custom JavaScritp code,
        // place it into templates/js/atk4_univ_ext.js and
        // include it here
        $this->js()
            ->_load('atk4_univ')
            ->_load('ui.atk4_notify')
            ;

        // If you wish to restrict actess to your pages, use BasicAuth class
        $this->add('BasicAuth')
            ->allow('demo','demo')
            // use check() and allowPage for white-list based auth checking
            //->check()
            ;

        // This method is executed for ALL the peages you are going to add,
        // before the page class is loaded. You can put additional checks
        // or initialize additional elements in here which are common to all
        // the pages.

        //Connect to the database on all pages
         $this->api->dbConnect();

        // Menu: Show Registration and Login buttons if the user is not signed in.
        if(!$this->api->auth->isLoggedIn()){
                    $this->add('Menu',null,'Menu')
                    ->addMenuItem('Login','login')
                    ->addMenuItem('Register','register');
        } else {
                    $this->add('Menu',null,'Menu')
                    ->addMenuItem('Logout','logout');
        }
        $this->add('Menu',null,'Menu')
            ->addMenuItem('Welcome','index')
            ->addMenuItem('Products','product')
            ->addMenuItem('How does this work?','how')
            ->addMenuItem('Getting Started','getting-started');
    } 
}
