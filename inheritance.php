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
    public $ta = 1000;
    public $phone = 500;
    public $totalSalary;

    public function info()
    {
        $this->totalSalary = $this->salary + $this->ta + $this->phone;

        echo "Manager  Profile\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Salary: " . $this->totalSalary . "\n";
    }
}
$m1 = new manager("M1", 65, 30000);
$e1 = new employee("E1", 35, 30000);

$m1->info();
$e1->info();
