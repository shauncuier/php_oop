<?php

class base {
    public static $name = "3s Soft";

    public function show(){
        echo self::$name;
    }
}
echo base::$name;
//$test = new base();
//
//$test->show();