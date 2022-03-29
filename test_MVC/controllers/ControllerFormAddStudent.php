<?php

require_once('views/View.php');

class ControllerFormAddStudent
{
    private $View;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url) ? $url : [])) > 1) 
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->FormAddStudent();
    }
    private function FormAddStudent()
    {

        $this->View = new View('FormAddStudent');
        $this->View->generate();
    }

    
}
?>