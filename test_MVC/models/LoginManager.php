<?php


class LoginManager extends Model
{
    private $Username;
    private $Password;

    public function __construct($username,$password)
    {
        $this->Username =$username;
        $this->Password =$password;
    }

    public function Student()
    {
        $req = $this->GetBdd()->prepare("SELECT count(LoginStudent)  FROM Student where LoginStudent= '$this->Username' and passwordStudent= '$this->Password' ;");
        $req->execute();
        return $req->fetch();
    }

    public function Pilot()
    {
        $req = $this->GetBdd()->prepare("SELECT count(LoginPilot)  FROM Pilot where LoginPilot= '$this->Username' and passwordPilot= '$this->Password' ;");
        $req->execute();
        return $req->fetch();
    }

    public function Admin()
    {
        $req = $this->GetBdd()->prepare("SELECT count(LoginAdmin)  FROM Administrator where LoginAdmin= '$this->Username' and passwordAdmin= '$this->Password' ;");
        $req->execute();
        return $req->fetch();
    }
}