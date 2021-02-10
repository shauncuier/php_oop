<?php

class calculation{
    public $a, $b, $c;

    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 20;
$c1->b = 13;

$c2 = new calculation();
$c2->a = 7;
$c2->b = 4;

echo "Sum - " . $c1->sum() . "\n";
echo "Sub - " . $c2->sub() . "\n";
echo "Sub - " . $c1->sub();
