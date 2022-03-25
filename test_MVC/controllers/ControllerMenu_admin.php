<?php

require_once('views/View.php');

class ControllerMenu_admin
{
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->MenuAdmin();
    }
    private function MenuAdmin()
    {

        $this->_view = new View('menu_admin');
        $this->_view->generate();
    }

    
}
?>