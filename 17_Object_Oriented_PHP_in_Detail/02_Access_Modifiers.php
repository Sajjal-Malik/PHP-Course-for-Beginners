<?php

class AccessExample {
    public $publicVar = "Public"; // Public property
    private $privateVar = "Private"; // Private property
    protected $protectedVar = "Protected"; // Protected property

    public function showPrivateVar() {
        return $this->privateVar; // Accessible here
    }
}

$example = new AccessExample();
echo $example->publicVar . "\n"; // Output: Public
// echo $example->privateVar; // Error: Cannot access private property
echo $example->showPrivateVar() . "\n"; // Output: Private




?>