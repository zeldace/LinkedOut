<?php

Class ApplicationManager extends Model
{
    private $OfferManager;
    private $StudentManager;
    public function GetApplications()
    {
        $this->OfferManager = new OfferManager();
        $this->StudentManager = new StudentManager();
        $var = [];
        $req = $this->GetBdd()->prepare('SELECT *  FROM Application;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $data['Offer'] =$this->OfferManager->GetOffer($data['IdOffer']);
            $data['Student'] =$this->StudentManager->GetStudent($data['IdStudent']);
            
            $var[] = new Application($data);
        }
        var_dump($var);
        return $var;
        $req->closeCursor();
    }
}