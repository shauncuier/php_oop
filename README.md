# PHP OOP

#### PHP What is OOP?

OOP stands for Object-Oriented Programming.

Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

Object-oriented programming has several advantages over procedural programming:

- OOP is faster and easier to execute
- OOP provides a clear structure for the programs
- OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
- OOP makes it possible to create full reusable applications with less code and shorter development time

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

#### PHP - The \_\_construct Function

A constructor allows you to initialize an object's properties upon creation of the object.

If you create a \_\_construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (\_\_)!

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

- Inheritance in OOP = When a class derives from another class.

- The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

- An inherited class is defined by using the extends keyword.

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
            public $ta = 1000;
            public $phone = 500;
            public $totalSalary;

            public function info()
            {
                $this -> totalSalary = $this -> salary + $this -> ta + $this -> phone;

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

### PHP OOP - Access Modifiers

####PHP - Access Modifiers
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

- public - the property or method can be accessed from everywhere. This is default
- protected - the property or method can be accessed within the class and by classes derived from that class
- private - the property or method can ONLY be accessed within the class

In the following example we have added three different access modifiers to the three properties. Here, if you try to set the name property it will work fine (because the name property is public). However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private):

        // Public
        class base {
            public $name;
            public function __construct($n)
            {
                $this -> name = $n;
            }
            public function show(){
                echo "Your Name: " . $this->name ."\n";
            }
        }
        $test = new base("3s-soft");

        // $test->name = "soft 3s";
        $test->show();

        // Protected

        class basePro {
            protected $namePro;
            public function __construct($n)
            {
                $this -> namePro = $n;
            }
            protected function showPro(){
                echo "Your Name: " . $this->namePro ."\n";
            }
        }

        class derived extends basePro{
            public function get(){
                echo "Your Name: " . $this->namePro ."\n";
            }
        }
        $test = new derived("3s-soft");


        $test->get();

        // Private

        class basePri {
            private $namePri;
            public function __construct($n)
            {
                $this -> namePri = $n;
            }
            //public function showPri(){ //work
            private function showPri(){ //error
                echo "Your Name: " . $this->namePri ."\n";
            }
        }

        class derivedPri extends basePri{
            public function get(){
                echo "Your Name: " . $this->namePri ."\n";
            }
        }
        //$test = new derivedPri("3s-soft");
        //$test->namePri = "soft 3s";
        $test = new basePri("3s soft");
        $test->showPri(); //error

### PHP OOP - Abstract Classes

Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword:

    abstract class parentClass{
        public $name;
        abstract protected function calc($a, $b);
    }

    class childClass extends parentClass{
       public function calc($c, $d){
           echo $c + $d;
       }
    }
    $test = new  childClass();
    $test->calc(12,14);

### PHP OOP - Interfaces

#### PHP - What are Interfaces?

Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the interface keyword:

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
