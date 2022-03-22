<?php
class Student 
{
    private $_id;
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
    public function setid_student($id)
    {
        $id= (int) $id;
        if ($id>0)
            $this->_id = $id;
    }


    public function setfirst_name_student($firstName)
    {
        if (is_string($firstName))
            $this->_firstName = $firstName;
    }


    public function setlast_name_student($lastName)
    {
        if(is_string($lastName))
            $this->_lastName = $lastName;
    }

    public function setpostal_code($postal_code)
    {
        if (is_string($postal_code))
            $this->_postal_code = $postal_code;
    }
    
    public function setcity($city)
    {
        if (is_string($city))
            $this->_city = $city;
    }

    public function setstreet_number($street_number)
    {
        if (is_string($street_number))
            $this->_street_number = $street_number;
    }

    public function setstreet_name($street_name)
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
    public function id()
    {
        return $this->_id;
    }

    public function first_name()
    {
        return (string)$this->_firstName;
    }

    public function last_name()
    {
        return (string)$this->_lastName;
    }

    public function promotion()
    {
        return (string)$this->_promotion;
    }

    public function subject()
    {
        return (string)$this->_subject;
    }

    public function street_name()
    {
        return (string)$this->_street_name;
    }

    public function street_number()
    {
        return (string)$this->_street_number;
    }

    public function city()
    {
        return (string)$this->_city;
    }

    public function postal_code()
    {
        return (string)$this->_postal_code;
    }




    
    
}
