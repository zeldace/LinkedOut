<?php

class ControllerAccueil
{
    private $_studentManager;
    private $_view;

    public function __construct($url)
    {
        /*if(isset($url) && count($url) > 1) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            */$this->students();
    }
    private function students()
    {
        $this->_studentManager = new StudentManager();
        $students = $this->_studentManager->getStudents();

        require_once('views/viewAccueil.php');
    }

}

?>