<?php

require_once('views/View.php');

class ControllerMenuStudent
{
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->MenuStudent();
    }
    private function MenuStudent()
    {

        $this->_view = new View('menu_student');
        $this->_view->generate();
    }

    
}
?>