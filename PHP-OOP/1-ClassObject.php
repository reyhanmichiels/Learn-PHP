<?php 

class Major 
{
    public $name;
    public $description;

    public function setName($var)
    {
        $this->name = $var;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($var)
    {
        $this->description = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

$cs = new Major();
$cs->setName("Computer Science");
$cs->setDescription("Learn Computer Science");

echo $cs->getName() . "<br>" . $cs->getDescription();
