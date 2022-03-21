<?php

Class StudentManager extends Model
{
    public function getStudents()
    {
        return $this->getAll('student', 'Student');
    }
}