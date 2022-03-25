<?php

require_once('views/View.php');

class ControllerLogin
{
    private $_login;
    private $_view;

    public function __construct($url)
    {
        $this->_login = new LoginManager(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
        $access=$this->_login->Student();
        if ($access[0]>=1)
        {
            session_start();
            $_SESSION['username']=htmlspecialchars($_POST['username']);
            $_SESSION['status']='student';
            header('Location: student');
        }
        else
        {
           $access = $this->_login->Pilot();
           if ($access[0]>=1){
            session_start();
            $_SESSION['username']=htmlspecialchars($_POST['username']);
            $_SESSION['status']='pilot';
           }
           else
           {
                $access = $this->_login->Admin();
                if ($access[0]>=1){
                    session_start();
                    $_SESSION['username']=$_POST['username'];
                    $_SESSION['status']='admin';
                    header('Location:menuAdmin');
                    
                }
                else
                {
                    header('Location: accueil');
                }
            }
        }
    }
}

?>