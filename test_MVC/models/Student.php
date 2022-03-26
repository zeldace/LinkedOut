<?php
class Student 
{
    private $Id;
    private $_firstName;
    private $_lastName;
    private $_promotion;
    private $_subject;
    private $_street_name;
    private $_street_number;
    private $_city;
    private $_postal_code;


    //CONSTRUCTEUR 
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }


    //HYDRATATION
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.$key;
            

            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    //SETTERS
    public function setIdStudent($Id)
    {
        $Id= (int) $Id;
        if ($Id>0)
            $this->Id = $Id;
    }


    public function setFirstNameStudent($firstName)
    {
        if (is_string($firstName))
            $this->_firstName = $firstName;
    }


    public function setLastNameStudent($lastName)
    {
        if(is_string($lastName))
            $this->_lastName = $lastName;
    }

    public function setPostalCode($postal_code)
    {
        if (is_string($postal_code))
            $this->_postal_code = $postal_code;
    }
    
    public function setCity($city)
    {
        if (is_string($city))
            $this->_city = $city;
    }

    public function setStreetNumber($street_number)
    {
        if (is_string($street_number))
            $this->_street_number = $street_number;
    }

    public function setStreetName($street_name)
    {
        if (is_string($street_name))
            $this->_street_name = $street_name;
    }

    public function setsubject($subject)
    {
        if (is_string($subject))
            $this->_subject = $subject;
    }

    public function setpromotion($promotion)
    {
        if (is_string($promotion))
            $this->_promotion = $promotion;
    }





    //Getters
    public function Id()
    {
        return $this->_id;
    }

    public function FirstName()
    {
        return (string)$this->_firstName;
    }

    public function LastName()
    {
        return (string)$this->_lastName;
    }

    public function Promotion()
    {
        return (string)$this->_promotion;
    }

    public function Subject()
    {
        return (string)$this->_subject;
    }

    public function StreetName()
    {
        return (string)$this->_street_name;
    }

    public function StreetNumber()
    {
        return (string)$this->_street_number;
    }

    public function City()
    {
        return (string)$this->_city;
    }

    public function PostalCode()
    {
        return (string)$this->_postal_code;
    }




    
    
}
