<?php
class Offer
{
    public $IdOffer;
    private $Duration;
    private $Compensation;
    private $DateOffer;
    private $NumberPlace;
    private $OfferName;
    private $StreetName;
    private $StreetNumber;
    private $City;
    private $PostalCode;
    private $Name;
    private $InternNumber;
    private $Sector;
    private $PilotTrust;
    private $Promotion;
    private $Skill;

    //CONSTRUCTEUR 
    public function __construct(array $data)
    {
        $this->Hydrate($data);
    }


    //HYDRATATION
    public function Hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'Set'.$key;

            if (method_exists($this, $method))
            { 
                $this->$method($value);
            }
        }
    }

    public function SetIdOffer($IdOffer)
    {
        $this->IdOffer=$IdOffer;
    }

    public function IdOffer ()
    {
        return $this->IdOffer;
    }

    public function SetDuration($Duration)
    {
        $this->Duration=$Duration;
    }

    public function Duration ()
    {
        return $this->Duration;
    }

    public function SetCompensation($Compensation)
    {
        $this->Compensation=$Compensation;
    }

    public function Compensation ()
    {
        return $this->Compensation;
    }

    public function SetDateOffer($DateOffer)
    {
        $this->DateOffer=$DateOffer;
    }

    public function DateOffer ()
    {
        return $this->DateOffer;
    }

    public function SetNumberPlace($NumberPlace)
    {
        $this->NumberPlace=$NumberPlace;
    }

    public function NumberPlace ()
    {
        return $this->NumberPlace;
    }

    public function SetOfferName($OfferName)
    {
        $this->OfferName=$OfferName;
    }

    public function OfferName ()
    {
        return $this->OfferName;
    }

    public function SetStreetName($StreetName)
    {
        $this->StreetName=$StreetName;
    }

    public function StreetName ()
    {
        return $this->StreetName;
    }

    public function SetStreetNumber($StreetNumber)
    {
        $this->StreetNumber=$StreetNumber;
    }

    public function StreetNumber ()
    {
        return $this->StreetNumber;
    }

    public function SetCity($City)
    {
        $this->City=$City;
    }

    public function City ()
    {
        return $this->City;
    }

    public function SetPostalCode($PostalCode)
    {
        $this->PostalCode=$PostalCode;
    }

    public function PostalCode ()
    {
        return $this->PostalCode;
    }

    public function SetName($Name)
    {
        $this->Name=$Name;
    }

    public function Name ()
    {
        return $this->Name;
    }

    public function SetInternNumber($InternNumber)
    {
        $this->InternNumber=$InternNumber;
    }

    public function InternNumber ()
    {
        return $this->InternNumber;
    }

    public function SetSector($Sector)
    {
        $this->Sector=$Sector;
    }

    public function Sector ()
    {
        return $this->Sector;
    }

    public function SetPilotTrust($PilotTrust)
    {
        $this->PilotTrust=$PilotTrust;
    }

    public function PilotTrust ()
    {
        return $this->PilotTrust;
    }

    public function SetPromotion($Promotion)
    {
        $this->Promotion=$Promotion;
    }

    public function Promotion ()
    {
        return $this->Promotion;
    }

    public function SetSubject($Subject)
    {
        $this->Subject=$Subject;
    }

    public function Subject ()
    {
        return $this->Subject;
    }

    public function SetSkill($Skill)
    {
        $this->Skill=$Skill;
    }

    public function Skill ()
    {
        return $this->Skill;
    }
}