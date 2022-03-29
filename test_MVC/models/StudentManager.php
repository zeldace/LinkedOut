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

    public function AddStudent($student)
    {
        $req = $this->GetBdd()->prepare("INSERT INTO Promotion (Promotion, Subject)
                                        VALUES ('".$student->Promotion()."',
                                        '".$student->Subject()."');");
        $req->execute();

        $IdPromotion = $this->GetBdd()->lastInsertId();

        $req = $this->GetBdd()->prepare("INSERT INTO Address (StreetName, StreetNumber, City, PostalCode)
                                        VALUES ('".$student->StreetName()."',
                                        '".$student->StreetNumber()."',
                                        '".$student->City()."',
                                        '".$student->PostalCode()."');");
        $req->execute();

        $IdAddress = $this->GetBdd()->lastInsertId();
        
        $req = $this->GetBdd()->prepare("INSERT INTO Student (FirstNameStudent, LastNameStudent, LoginStudent, PasswordStudent, IdAddress, IdPromotion, CampusStudent)
                                        VALUES ('".$student->FirstName()."',
                                        '".$student->LastName()."',
                                        '".$student->Login()."',
                                        '".password_hash($student->Password(), PASSWORD_DEFAULT)."',
                                        '$IdAddress',
                                        '$IdPromotion',
                                        '".$student->Campus()."');");
        var_dump($req);
        $req->execute();
    }

}