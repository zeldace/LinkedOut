<?php

require_once('views/View.php');

class ControllerManageStudent
{
    private $_studentManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) 
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->students();
    }
    private function students()
    {
        $this->_studentManager = new StudentManager();
        $students = $this->_studentManager->getStudents();

        $this->_view = new View('Student');
        $this->_view->generate(array('students'=>$students));
    }
    

}

?>