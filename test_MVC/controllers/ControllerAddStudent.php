<?php

class ControllerAddStudent
{
    private $StudentManager;
    private $Student;

    public function __construct()
    {
        $this->StudentManager = new StudentManager();
        $this->Student = new Student($_POST);
        $this->StudentManager->AddStudent($this->Student);
        header("Location: ManageStudent");
    }
}

?>