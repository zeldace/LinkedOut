<?php

Class StudentManager extends Model
{
    public function getStudents()
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT *  FROM student NATURAL JOIN address NATURAL JOIN promotion;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new student($data);
        }
        
        return $var;
        $req->closeCursor();
    }

    public function getStudent($id)
    {
        $var = [];
        $req = $this->getBdd()->prepare("SELECT *  FROM student NATURAL JOIN address NATURAL JOIN promotion where IdStudent=$id;");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new student($data);
        }
        
        return $var;
        $req->closeCursor();
    }

}