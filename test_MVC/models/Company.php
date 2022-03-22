<?php

class company
{
    private $_name;
    private $_intern_number;
    private $_sector;
    /*private array $_street_name;
    private array $_street_number;
    private array $_city;
    private array $_postal_code;*/
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

    public function setname($name)
    {
        if (is_string($name))
            $this->_name = $name;
    }

    public function name()
    {
        return $this->_name;
    }


    public function setintern_number($intern_number)
    {
        $intern_number= (int) $intern_number;
        if ($intern_number>0)
            $this->_intern_number = $intern_number;
    }

    public function intern_number()
    {
        return $this->_intern_number;
    }

    public function setstreet_name($street_name)
    {
        $this->_street_name = $street_name;
    }

    public function street_name()
    {
        return $this->_street_name;
    }
}