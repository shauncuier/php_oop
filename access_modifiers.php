<?php
// Public
class base
{
    public $name;
    public function __construct($n)
    {
        $this->name = $n;
    }
    public function show()
    {
        echo "Your Name: " . $this->name . "\n";
    }
}
$test = new base("3s-soft");

// $test->name = "soft 3s";
$test->show();

// Protected

class basePro
{
    protected $namePro;
    public function __construct($n)
    {
        $this->namePro = $n;
    }
    protected function showPro()
    {
        echo "Your Name: " . $this->namePro . "\n";
    }
}

class derived extends basePro
{
    public function get()
    {
        echo "Your Name: " . $this->namePro . "\n";
    }
}
$test = new derived("3s-soft");

$test->get();

// Private

class basePri
{
    private $namePri;
    public function __construct($n)
    {
        $this->namePri = $n;
    }
    //public function showPri(){ //work
    private function showPri()
    { //error
        echo "Your Name: " . $this->namePri . "\n";
    }
}

class derivedPri extends basePri
{
    public function get()
    {
        // echo "Your Name: " . $this->namePri ."\n";
    }
}
//$test = new derivedPri("3s-soft");
//$test->namePri = "soft 3s";
$test = new basePri("3s soft");
//$test->showPri(); //error
