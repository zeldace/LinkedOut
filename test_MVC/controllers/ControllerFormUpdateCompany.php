<?php

require_once('views/View.php');

class ControllerFormUpdateCompany
{
    private $CompanyManager;
    private $View;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 2) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->companies($url);
    }
    private function companies($url)
    {
        $this->CompanyManager = new CompanyManager();
        $companies = $this->CompanyManager->getCompany($url[1]);

        $this->View = new View('UpdateCompany');
        $this->View->generate(array('company'=>$companies));
    }

}

?>