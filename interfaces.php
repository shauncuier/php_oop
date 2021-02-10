<?php

interface parent1
{
    public function calc($a, $b);
}

interface parent2
{
    function calc($c, $d);
}

class childClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo $a + $b . "\n";
    }

    public function sub($c, $d)
    {
        echo $c - $d . "\n";
    }
}

$test = new childClass();

$test->calc(14, 13);
$test->sub(14, 13);
