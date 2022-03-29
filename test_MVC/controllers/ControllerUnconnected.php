<?php

require_once('views/View.php');

class ControllerUnconnected
{
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) 
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->unconnected();
    }
    private function unconnected()
    {

        $this->_view = new View('Unconnected');
        $this->_view->generate();
    }

    
}
?>