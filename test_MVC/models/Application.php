<?php

Class Application
{
    private $IdApplication;
    private $Step;
    private $IdStudent;
    private $IdOffer;

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
    
    public function SetIdStudent($IdStudent)
    {
        $this->IdStudent = $IdStudent;
    }

    public function IdStudent()
    {
        return $this->IdStudent;
    }

    public function SetIdOffer($IdOffer)
    {
        $this->IdOffer = $IdOffer;
    }

    public function IdOffer()
    {
        return $this->IdOffer;
    }
}