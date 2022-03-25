<?php

require_once('views/View.php');

class ControllerManage_firm
{
    private $_companyManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 2) //à modifier pour s'adapter à la pagination
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
        $this->_view->generate(array('Manage_firm'=>$companies));
    }

}

?>