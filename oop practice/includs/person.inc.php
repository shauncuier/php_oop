<?php

class Person{
    private $first = "Jashedul";
    private $last = "Islam";
    private $age = "25";

    public function owner() { 
        $a = $this->first;
        $b = $this->last;
        $c = $this->age;
        return $a .' '. $b.' Is '.$c.' Years old';
    }
}

class Pet {
    public function owner() { 
        $a = "Hi this is my Pet";
        return $a;
    }
}