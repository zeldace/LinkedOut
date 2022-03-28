<?php

class ControllerUpdateCompany
{
    private $CompanyManager;
    private $Company;

    public function __construct()
    {
        $this->CompanyManager = new CompanyManager();
        $this->Company = new Company($_POST);
        $this->CompanyManager->UpdateCompany($this->Company);
        header("Location: ManageFirm");
    }
}

?>