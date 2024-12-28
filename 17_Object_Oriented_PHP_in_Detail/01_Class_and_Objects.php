<?php 
class Car {
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function getCarDetails() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

// Create objects (instances of the Car class)
$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2019);

echo $car1->getCarDetails() . "\n"; // Output: 2020 Toyota Corolla
echo $car2->getCarDetails() . "\n"; // Output: 2019 Honda Civic




?>