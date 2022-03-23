<?php

require_once('views/View.php');

class ControllerLogin
{
    private $_login;
    private $_username;
    private $_view;
    private $_password;

    public function __construct($url){
        
        

        $this->_login = new LoginManager($_POST['username']);
        $this->_password = $_POST['password'];
        $password = $this->_login->student();
        echo $password[0];
        if ($this->_password==$password[0]){
            header('Location: student');
            echo 'oui';
    }
    else{
        header('ControllerAccueil.php');
        echo 'non';
    }
    }
}

?>