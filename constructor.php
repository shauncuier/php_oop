<?php

class person
{
    public $name;
    public $age;
    public function __construct($name = "No Name", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function show()
    {
        echo $this->name . " - " . $this->age . "\n";
    }
}
$p1 = new person();
$p2 = new person("3s-Soft", 2);
$p3 = new person("jone", 23);

//$p1->name = "3s-Soft";
//$p1->age = 2;

$p1->show();
$p2->show();
$p3->show();
