# PHP OOP

#### PHP What is OOP?

OOP stands for Object-Oriented Programming.

Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

Object-oriented programming has several advantages over procedural programming:

        OOP is faster and easier to execute
        
        OOP provides a clear structure for the programs
        
        OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
        
        OOP makes it possible to create full reusable applications with less code and shorter development time



 #### OOP [Meaning](https://www.w3schools.com/php/php_oop_what_is.asp)
        
     O --> Object
     O --> Orianted
     P --> Programing
     
     
#### Main tow part of [OOP](https://www.php.net/manual/en/language.oop5.php) is **Class** & **Objects**

    In side Of Class we Found two type of data

    1. Properties
    Example --> $a, $b, $c
    2. Methods 
    Example --> 
                sum(){
                    $c = $a + $b;
                    return $c;
                }
                sub(){
                    $c = $a - $b;
                    return $c;
                }
    
    
#### Define a Class
        
      class calculation
      {
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
   
#### Define Objects
 
        class calculation
        {
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
        
        
        
## PHP OOP - Constructor

#### PHP - The __construct Function

A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!

We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code:
        
      class person{
          public $name;
          public $age;
          function __construct($name = "No Name", $age= 0)
          {
              $this->name = $name;
              $this->age = $age;
          }
      
          function show(){
              echo $this ->name. " - " .$this->age."\n";
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


## PHP OOP - Inheritance

#### PHP - What is Inheritance?

* Inheritance in OOP = When a class derives from another class.

* The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

* An inherited class is defined by using the extends keyword.

Let's look at an example:

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
        

    