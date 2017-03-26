<?php

class Home extends Controller
{
    public function index($name='') {
       $user = $this->model('User');    // creating new instance of model class name.
       $user->name = $name;             // assign the value.

       $this->view('home/index', ['name' => $user->name, 'pageTitle' => 'Maestro MVC | index page.', 'select' => '0']);
    }

    public function create($username = '', $password = '', $age = '') {
        $user = $this->model('User');   // Using User model: create new object of User class
        $user->setValues($username, $password, $age);   // set values to the local variables.

//      issue page create view.
        $this->view('home/create', ['pageTitle' => 'Maestro MVC | Create page.', 'select' => '1']);
    }

    public function read() {
        $user = $this->model('User');   // Using User model: create new object of User class
        $values = $user->getValues();   // get data from model
        $this->view('home/read',
            [
            'pageTitle' => 'Maestro MVC | Read page.', 
            'username' => $values['username'], 
            'password' => $values['password'], 
            'age' => $values['age'], 
            'select' => '2'
            ]
        );
    }

    public function update() {
        $this->view('home/update', ['pageTitle' => 'Maestro MVC | Update page.', 'select' => '3']);
    }

    public function delete() {
        $this->view('home/delete', ['pageTitle' => 'Maestro MVC | Delete page.', 'select' => '4']);
    }
}