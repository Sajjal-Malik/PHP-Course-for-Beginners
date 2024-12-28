<?php 

class ParentClass {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        return "Hello, I am {$this->name}.";
    }
}

class ChildClass extends ParentClass {
    public function greetAsChild() {
        return "Hi, I am child {$this->name}.";
    }
}

$child = new ChildClass("Jane");
echo $child->greet() . "\n"; // Output: Hello, I am Jane.
echo $child->greetAsChild() . "\n"; // Output: Hi, I am child Jane.














?>