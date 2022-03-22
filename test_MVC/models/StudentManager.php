<?php

Class StudentManager extends Model
{
    public function getStudents()
    {
    return $this->getAll(/*'student', 'Student'*/);
    }

    public function getAll()
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT *  FROM student NATURAL JOIN address NATURAL JOIN city NATURAL JOIN promotion;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new student($data);
        }
        return $var;
        $req->closeCursor();
    }
}