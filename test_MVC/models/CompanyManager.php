<?php

Class CompanyManager extends Model
{
    public function GetCompanies()
    {
        $var = [];
        $req = $this->GetBdd()->prepare('SELECT *  FROM Company NATURAL JOIN address;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new company($data);
        }
        return $var;
        $req->closeCursor();
    }


    public function AddCompany()
    {
        
    }
}