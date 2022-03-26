<?php

class company
{
    private $name;
    private $internNumber;
    private $sector;
    private $pilotTrust;
    private $streetName;
    private $streetNumber;
    private $city;
    private $postalCode;

    
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
        $this->name = $name;
    }

    public function Name()
    {
        return $this->name;
    }


    public function SetInternNumber($internNumber)
    {
        $this->internNumber = (int)$internNumber;
    }

    public function InternNumber()
    {
        return $this->internNumber;
    }

    public function SetStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    public function StreetName()
    {
        return $this->streetName;
    }

    public function Sector()
    {
        return $this->sector;
    }

    public function SetSector($sector)
    {
        $this->sector = $sector;
    }

    public function PilotTrust()
    {
        return $this->pilotTrust;
    }

    public function SetPilotTrust($pilotTrust)
    {
        $this->pilotTrust = (int)$pilotTrust;
    }

    public function StreetNumber()
    {
        return $this->streetNumber;
    }

    public function SetStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    public function City()
    {
        return $this->city;
    }

    public function SetCity($city)
    {
        $this->city = $city;
    }

    public function PostalCode()
    {
        return $this->postalCode;
    }

    public function SetPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }
}