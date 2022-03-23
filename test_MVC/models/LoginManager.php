<?php


class LoginManager extends Model
{
    private $_username;
    private $_password;

    public function __construct($username,$password)
    {
        $this->_username = '"'.$username.'"';
        $this->_password = '"'.$password.'"';
    }

    public function student()
    {
        $req = $this->getBdd()->prepare('SELECT count(login_student)  FROM student where login_student='.$this->_username.'and password_student='.$this->_password.';');
        $req->execute();
        return $req->fetch();
    }
}