<?php
class Student 
{
    private $IdStudent;
    private $FirstName;
    private $LastName;
    private $Promotion;
    private $Subject;
    private $StreetName;
    private $StreetNumber;
    private $City;
    private $PostalCode;
    private $Password;
    private $Login;
    private $Campus;


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
                $this->$method($value);
        }
    }

    //SETTERS
    public function SetIdStudent($Id)
    {
        $Id= (int) $Id;
        if ($Id>=0)
            $this->IdStudent = $Id;
    }


    public function SetFirstNameStudent($firstName)
    {
        if (is_string($firstName))
            $this->FirstName = $firstName;
    }


    public function SetLastNameStudent($lastName)
    {
        if(is_string($lastName))
            $this->LastName = $lastName;
    }

    public function SetPostalCode($postal_code)
    {
        if (is_string($postal_code))
            $this->PostalCode = $postal_code;
    }
    
    public function SetCity($city)
    {
        if (is_string($city))
            $this->City = $city;
    }

    public function SetStreetNumber($street_number)
    {
        if (is_string($street_number))
            $this->StreetNumber = $street_number;
    }

    public function SetStreetName($street_name)
    {
        if (is_string($street_name))
            $this->StreetName = $street_name;
    }

    public function Setsubject($subject)
    {
        if (is_string($subject))
            $this->Subject = $subject;
    }

    public function SetPromotion($Promotion)
    {
        if (is_string($Promotion))
            $this->Promotion = $Promotion;
    }

    public function SetLoginStudent($Login)
    {
        if (is_string($Login))
            $this->Login = $Login;
    }

    public function SetPasswordStudent($Password)
    {
        if (is_string($Password))
            $this->Password = $Password;
    }

    public function SetCampusStudent($Campus)
    {
        if (is_string($Campus))
            $this->Campus = $Campus;
    }






    //Getters
    public function IdStudent()
    {
        return $this->IdStudent;
    }

    public function FirstName()
    {
        return (string)$this->FirstName;
    }

    public function LastName()
    {
        return (string)$this->LastName;
    }

    public function Promotion()
    {
        return (string)$this->Promotion;
    }

    public function Subject()
    {
        return (string)$this->Subject;
    }

    public function StreetName()
    {
        return (string)$this->StreetName;
    }

    public function StreetNumber()
    {
        return (string)$this->StreetNumber;
    }

    public function City()
    {
        return (string)$this->City;
    }

    public function PostalCode()
    {
        return (string)$this->PostalCode;
    }

    public function Login()
    {
        return (string)$this->Login;
    }

    public function Password()
    {
        return (string)$this->Password;
    }

    public function Campus()
    {
        return (string)$this->Campus;
    }




    
    
}
