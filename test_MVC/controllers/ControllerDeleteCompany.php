<?php

class ControllerDeleteCompany
{
    private $CompanyManager;

    public function __construct($url)
    {
        $this->CompanyManager = new CompanyManager();
        $this->CompanyManager->DeleteCompany($url[1]);
        header("Location: ../TestManageFirm");
    }
}

?>