<?php
Class OfferManager extends Model
{
    public function GetOffers()
    {
        $var = [];
        $req = $this->GetBdd()->prepare('SELECT IdOffer, 
                                                Duration, 
                                                Compensation, 
                                                DateOffer, 
                                                NumberPlace, 
                                                OfferName, 
                                                Name, 
                                                InternNumber, 
                                                Sector, 
                                                PilotTrust, 
                                                StreetName, 
                                                StreetNumber, 
                                                City, 
                                                PostalCode, 
                                                GROUP_CONCAT(distinct Skill) as Skill, 
                                                group_concat(distinct concat(Promotion), concat(subject)) as Promotion 
                                                FROM Offer 
                                                LEFT JOIN Company ON Offer.IdCompany = Company.IdCompany 
                                                LEFT JOIN Address ON Offer.IdAddress = Address.IdAddress 
                                                join needs using(IdOffer) 
                                                join skills using(IdSkills) 
                                                join is_for using(IdOffer) 
                                                join promotion using(IdPromotion) 
                                                Group by IdOffer;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);
        }
        return $var;
        $req->closeCursor();
    }

    public function GetOffer($id)
    {
        $var = [];
        $req = $this->GetBdd()->prepare("SELECT IdOffer, 
                                                Duration, 
                                                Compensation, 
                                                DateOffer, 
                                                NumberPlace, 
                                                OfferName, 
                                                Name, 
                                                InternNumber, 
                                                Sector, 
                                                PilotTrust, 
                                                StreetName, 
                                                StreetNumber, 
                                                City, 
                                                PostalCode, 
                                                Email,
                                                GROUP_CONCAT(distinct Skill) as Skill, 
                                                group_concat(distinct concat(Promotion), concat(subject)) as Promotion 
                                                FROM Offer 
                                                LEFT JOIN Company ON Offer.IdCompany = Company.IdCompany 
                                                LEFT JOIN Address ON Offer.IdAddress = Address.IdAddress 
                                                join needs using(IdOffer) 
                                                join skills using(IdSkills) 
                                                join is_for using(IdOffer) 
                                                join promotion using(IdPromotion) 
                                                Where IdOffer=$id
                                                Group by IdOffer;");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new Offer($data);
        }
        return $var;
        $req->closeCursor();
    }
}