<?php

require_once('views/View.php');

class ControllerManageFirm
{
    private $_companyManager;
    private $_view;

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
        $this->_companyManager = new CompanyManager();
        $companies = $this->_companyManager->getCompanies();

        $this->_view = new View('Manage_firm');
        $this->_view->generate(array('companies'=>$companies));
    }

}

?>