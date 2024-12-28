<?php
// Detailed demonstration of OOP in PHP

// Class Definition
class Person {
    // Properties
    public $name; // Public property
    private $age; // Private property
    protected $gender; // Protected property

    // Constructor
    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        echo "Person object created for $name.\n";
    }

    // Destructor
    public function __destruct() {
        echo "Person object for {$this->name} destroyed.\n";
    }

    // Public Method
    public function introduce() {
        return "Hi, my name is {$this->name}, and I am {$this->getAge()} years old.";
    }

    // Private Method
    private function getAge() {
        return $this->age; // Accessing private property
    }

    // Protected Method
    protected function getGender() {
        return $this->gender; // Accessing protected property
    }
}

// Inheritance
class Employee extends Person {
    public $jobTitle;

    // Overriding constructor
    public function __construct($name, $age, $gender, $jobTitle) {
        parent::__construct($name, $age, $gender);
        $this->jobTitle = $jobTitle;
    }

    // Overriding method
    public function introduce() {
        return parent::introduce() . " I work as a {$this->jobTitle}.";
    }

    public function displayGender() {
        // Accessing protected property through protected method
        return "Gender: {$this->getGender()}";
    }
}

// Abstraction
abstract class Shape {
    abstract public function calculateArea();
}

// Implementing abstraction
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Interface
interface Logger {
    public function log($message);
}

// Implementing interface
class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message\n";
    }
}

// Static Members
class Calculator {
    public static $count = 0;

    public static function add($a, $b) {
        self::$count++;
        return $a + $b;
    }

    public static function getCount() {
        return self::$count;
    }
}

// Demonstration
echo "=== OOP in PHP ===\n";

// Class and Object
$person = new Person("John Doe", 30, "Male");
echo $person->introduce() . "\n";

// Inheritance and Polymorphism
$employee = new Employee("Jane Smith", 25, "Female", "Software Engineer");
echo $employee->introduce() . "\n";
echo $employee->displayGender() . "\n";

// Abstraction
$circle = new Circle(5);
echo "Area of Circle: " . $circle->calculateArea() . "\n";

// Interface
$logger = new FileLogger();
$logger->log("This is a log message.");

// Static Members
echo "Addition: " . Calculator::add(10, 20) . "\n";
echo "Operations performed: " . Calculator::getCount() . "\n";
