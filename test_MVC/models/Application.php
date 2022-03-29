<?php

Class Application
{
    private $IdApplication;
    private $Step;
    private $Offer;
    private $Student;

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

    public function SetIdApplication($IdApplication)
    {
        $this->IdApplication = $IdApplication;
    }

    public function IdApplication()
    {
        return $this->IdApplication;
    }

    public function SetStep($Step)
    {
        $this->Step = $Step;
    }

    public function Step()
    {
        return $this->Step;
    }
    
    public function SetStudent($Student)
    {
        $this->Student = $Student;
    }

    public function Student()
    {
        return $this->Student;
    }

    public function SetOffer($Offer)
    {
        $this->Offer = $Offer;
    }

    public function Offer()
    {
        return $this->Offer;
    }
}