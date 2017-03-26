<?php

class User
{
    private $username = 'John Doe';
    private $password = 'John1981';
    private $age = '36';

    public function __construct() {
        
    }

    public function setValues($username = '', $password = '', $age = '') {
        $this->username = $username;
        $this->password = $password;
        $this->age = $age;
    }
    public function getValues() {
        $values = array('username' => $this->username, 'password' => $this->password, 'age' => $this->age);

        return $values;
    }
}