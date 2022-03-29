<?php

require_once('views/View.php');

class ControllerFormAddCompany
{
    private $View;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url) ? $url : [])) > 1) 
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->FormAddCompany();
    }
    private function FormAddCompany()
    {

        $this->View = new View('FormAddCompany');
        $this->View->generate();
    }

    
}
?>