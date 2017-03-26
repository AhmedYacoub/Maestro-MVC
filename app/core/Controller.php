<?php

class Controller
{
    public function __construct() {

    }

    public function index($x) {
        echo 'controller index';
    }

    public function model($model) {
        require '../app/models/'. $model .'.php';
        return new $model;
    }

    public function view($view, $data = []) {
        require_once '../app/view/'. $view .'.php';
    }
}