<?php

Class CompanyManager extends Model
{
    public function GetCompanies()
    {
        $var = [];
        $req = $this->GetBdd()->prepare('SELECT *  FROM Company JOIN address using(IdCompany);');
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
        $req = $this->GetBdd()->prepare("INSERT INTO Company (Name, InternNumber, Sector, PilotTrust, Email)
        VALUES ('".$Company->Name()."',
                ".$Company->InternNumber().",
                '".$Company->Sector()."',
                ".$Company->PilotTrust().",
                '".$Company->Email()."');");
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

    public function UpdateCompany($Company)
    {
        $req =$this->GetBdd()->prepare("Update (Company LEFT Join Address on Company.IdCompany=Address.IdCompany) SET 
                                        Name='".$Company->Name()."',
                                        InternNumber='".$Company->InternNumber()."',
                                        Sector='".$Company->Sector()."',
                                        PilotTrust='".$Company->PilotTrust()."',
                                        StreetName='".$Company->StreetName()."',
                                        StreetNumber='".$Company->StreetNumber()."',
                                        City='".$Company->City()."',
                                        PostalCode='".$Company->PostalCode()."',
                                        Email='".$Company->Email()."'
                                        where company.IdCompany=".$Company->IdCompany().";");
        $req->execute();
    }

    public function DeleteCompany($id)
    {
        $req = $this->GetBdd()->prepare("Delete FROM Company where IdCompany=$id;");
        $req->execute();
        $req->closeCursor();
    }
}