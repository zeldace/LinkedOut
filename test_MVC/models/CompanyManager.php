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


    public function AddCompany($Company)
    {
        $req = $this->GetBdd()->prepare("INSERT INTO Company (Name, InternNumber, Sector, PilotTrust)
        VALUES ('".$Company->Name()."',
                ".$Company->InternNumber().",
                '".$Company->Sector()."',
                ".$Company->PilotTrust().");");
        $req->execute();

        $req = $this->GetBdd()->prepare("INSERT INTO Address ( StreetName, StreetNumber, PostalCode, City, IdCompany)
        VALUES ('".$Company->StreetName()."',
                '".$Company->StreetNumber()."',
                '".$Company->PostalCode()."',
                '".$Company->City()."',
                ".$this->GetBdd()->lastInsertId().")");
        $req->execute();
    }

    public function GetCompany($id)
    {
        $var = [];
        $req = $this->GetBdd()->prepare("SELECT *  FROM Company NATURAL JOIN address where IdCompany=$id;");
        $req->execute();
        $var = new company($req->fetch(PDO::FETCH_ASSOC));
        return $var;
        $req->closeCursor();
    }
}