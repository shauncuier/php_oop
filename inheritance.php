<?php

class employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    public function info()
    {
        echo "Employee  Profile\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Salary: " . $this->salary . "\n";
    }
}

class manager extends employee
{
    public function info()
    {
        echo "Manager  Profile\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Salary: " . $this->salary . "\n";
    }
}
$m1 = new manager("M1", 65, 60000);
$e1 = new employee("E1", 35, 15000);

$m1->info();
$e1->info();
