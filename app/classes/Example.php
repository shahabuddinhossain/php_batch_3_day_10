<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;

    public function index() {
        $this->firstName = "Morshed";
        $this->lastName  = "Khan";


        echo "Full Name is ".$this->firstName." ".$this->lastName;
    }
}