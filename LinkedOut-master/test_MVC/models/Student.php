<?php
class Student 
{
    private $_id;
    private $_firstName;
    private $_lastName;


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
    public function setId($id)
    {
        $id= (int) $id;
        if ($id>0)
            $this->_id = $id;
    }


    public function setfirst_name($firstName)
    {
        if (is_string($firstName))
            $this->_firstName = $firstName;
    }


    public function setlast_name($lastName)
    {
        if(is_string($lastName))
            $this->_lastName = $lastName;
    }



    //Getters
    public function id()
    {
        return $this->_id;
    }

    public function firstName()
    {
        return (string)$this->_firstName;
    }

    public function lastName()
    {
        return $this->_lastName;
    }


}
