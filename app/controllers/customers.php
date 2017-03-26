<?php

class Customers extends Controller
{
    public function index($x) {
        echo 'customers/index';
    }

    public function sayHello($one = '', $two = '', $three = '') {
        echo 'Hello from customers, to '.$one.' '.$two.' '.$three;
    }
}