<?php

require_once('views/View.php');
require_once('models/CompanyManager.php');

class ControllerManageFirmRedirect
{
    private $FirmManager;
    private $Firm;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url) ? $url : [])) > 1) 
        {
            throw new Exception('Page introuvable');
        }
        else
        {
            $this->Redirect();
        }
    }
    private function Redirect()
    {
        $this->FirmManager = new CompanyManager();
        $function = $_POST['select'].'Company';
        $this->Firm = new company($_POST);

        $this->FirmManager->$function($this->Firm);

        header('Location: ManageFirm');
        
    }
}

?>