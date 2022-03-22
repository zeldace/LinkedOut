<?php

Class CompanyManager extends Model
{
    public function getCompanies()
    {
        return $this->getAll(/*'student', 'Student'*/);
    }

    public function getAll()
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT *  FROM Company NATURAL JOIN reside NATURAL JOIN address NATURAL JOIN city;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new company($data);
        }
        return $var;
        $req->closeCursor();
    }
}