<?php 

class StudyProgram 
{
    public $name;
    public $description;

    //constructor - function for initialize object when object created
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
}