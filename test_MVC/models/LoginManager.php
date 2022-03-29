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
        $req = $this->GetBdd()->prepare(
            "SELECT PasswordStudent  FROM Student where LoginStudent= '$this->Username';");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = $data;
        }
        $hash = implode($var[0]);
        return password_verify($this->Password, $hash);
    }

    public function Pilot()
    {
        $req = $this->GetBdd()->prepare(
            "SELECT PasswordPilot  FROM Pilot where LoginPilot= '$this->Username';");
        $req->execute();while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = $data;
        }
        $hash = implode($var[0]);
        return password_verify($this->Password, $hash);
    }

    public function Admin()
    {
        $req = $this->GetBdd()->prepare(
            "SELECT PasswordAdmin  FROM Administrator where LoginAdmin= '$this->Username';");
        $req->execute();while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = $data;
        }
        $hash = implode($var[0]);
        return password_verify($this->Password, $hash);
    }
}