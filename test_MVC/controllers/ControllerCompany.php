<?php

require_once('views/View.php');

class ControllerCompany
{
    private $CompanyManager;
    private $View;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1) //à modifier pour s'adapter à la pagination
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->companies();
    }
    private function companies()
    {
        $this->CompanyManager = new CompanyManager();
        $companies = $this->CompanyManager->getCompanies();

        $this->View = new View('Company');
        $this->View->generate(array('companies'=>$companies));
    }

}

?>