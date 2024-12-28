<?php 


class ParentClass {
    public function greet() {
        return "Hello from Parent!";
    }
}

class ChildClass extends ParentClass {
    public function greet() {
        return "Hello from Child!";
    }
}

// $child = new ChildClass();
// echo $child->greet(); // Output: Hello from Child!






?>