<?php
class Car {
    // Properties
    public $brand;
    private $engineNumber;
    protected $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Public methods
    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    // Private method
    private function setEngineNumber($engineNumber) {
        $this->engineNumber = $engineNumber;
    }

    public function getEngineNumber() {
        return $this->engineNumber;
    }

    // Destructor
    public function __destruct() {
        echo "The car {$this->brand} is being destroyed.";
    }
}

// Creating an object
$myCar = new Car("Toyota", "Red");

// Setting and getting public properties
$myCar->setBrand("Honda");
echo $myCar->getBrand(); // Output: Honda

// Setting and getting private properties via public methods
$myCar->setEngineNumber("12345"); // Error: Cannot access private method

// Destructor will be called at the end of script execution
?>
