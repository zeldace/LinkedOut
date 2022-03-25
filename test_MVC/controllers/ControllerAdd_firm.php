<?php

require_once('views/View.php');

class ControllerAdd_firm
{
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->Add_firm();
    }
    private function Add_firm()
    {

        $this->_view = new View('Add_firm');
        $this->_view->generate();
    }

    
}
?>