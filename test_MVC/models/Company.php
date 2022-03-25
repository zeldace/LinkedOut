<?php

class company
{
    private $Name;
    private $InternNumber;
    private $Sector;
    private $PilotTrust;
    private $StreetName;
    private $StreetNumber;
    private $City;
    private $PostalCode;

    
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

    public function SetName($name)
    {
        $this->Name = $name;
    }

    public function Name()
    {
        return $this->Name;
    }


    public function SetInternNumber($InternNumber)
    {
        $this->InternNumber = $InternNumber;
    }

    public function InternNumber()
    {
        return $this->InternNumber;
    }

    public function SetStreetName($streetName)
    {
        $this->StreetName = $streetName;
    }

    public function StreetName()
    {
        return $this->StreetName;
    }

    public function Sector()
    {
        return $this->Sector;
    }

    public function SetSector($sector)
    {
        $this->Sector = $sector;
    }

    public function PilotTrust()
    {
        return $this->PilotTrust;
    }

    public function SetPilotTrust($pilotTrust)
    {
        $this->PilotTrust = $pilotTrust;
    }

    public function StreetNumber()
    {
        return $this->StreetNumber;
    }

    public function SetStreetNumber($streetNumber)
    {
        $this->StreetNumber = $streetNumber;
    }

    public function City()
    {
        return $this->City;
    }

    public function SetCity($city)
    {
        $this->City = $city;
    }

    public function PostalCode()
    {
        return $this->PostalCode;
    }

    public function SetPostalCode($postalCode)
    {
        $this->PostalCode = $postalCode;
    }
}