<?php

Class ControllerApplicationTest
{
    public function __construct()
    {
        $a=new ApplicationManager();
        $a->GetApplications();
    }
}