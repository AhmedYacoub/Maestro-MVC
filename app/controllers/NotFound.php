<?php

class NotFound extends Controller
{

    public function index($cont='') {
        $controller = $cont;
        $this->view('home/error', ['error' => $controller]);
    }
}