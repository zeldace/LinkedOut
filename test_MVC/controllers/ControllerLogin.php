<?php

require_once('views/View.php');

class ControllerLogin
{
    private $_login;
    private $_view;

    public function __construct($url){
        
        $this->_login = new LoginManager($_POST['username'], $_POST['password']);
        $access=$this->_login->student();
        if ($access[0]>=1){
            session_start();
            $_SESSION['username']=$_POST['username'];
            $_SESSION['status']='student';
            header('Location: student');
        }
        else{
           $access = $this->_login->pilot();
           if ($access[0]>=1){
            session_start();
            $_SESSION['username']=$_POST['username'];
            $_SESSION['status']='pilot';
           }
           else{
                $access = $this->_login->admin();
                if ($access[0]>=1){
                    session_start();
                    $_SESSION['username']=$_POST['username'];
                    $_SESSION['status']='admin';
                    header('Location:menu_admin');
                    
                }
                else{
                    header('Location: accueil');
                }
            }
        }
    }
}

?>