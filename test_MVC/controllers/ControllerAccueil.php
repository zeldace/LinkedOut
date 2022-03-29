<?php

require_once('views/View.php');

class ControllerAccueil
{
    private $View;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url) ? $url : [])) > 1) 
        {
            throw new Exception('Page introuvable');
        }
        else
            $this->Accueil();
    }
    private function Accueil()
    {

        $this->View = new View('Accueil');
        $this->View->generate();
    }

    
}
?>