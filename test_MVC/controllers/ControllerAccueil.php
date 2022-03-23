<?php

require_once('views/View.php');

class ControllerAccueil
{
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->accueil();
    }
    private function accueil()
    {

        $this->_view = new View('Accueil');
        $this->_view->generate();
    }

    
}
?>