<?php

define('numberUrl', 6);                 // Number of indexes parameter controller position
define('controller', numberUrl - 3);    // controller position in URL
define('method', numberUrl - 2);        // method position in URL
define('params', numberUrl - 1);        // parameters position in URL

class App
{
    protected $controller = 'home'; // Default controller.
    protected $method = 'index';    // Defualt action(method).
    protected $params = [];         // Paramaters.

    
    public function __construct() {
        $url = $this->parseURL();   // call "parseURL" method to get the URL

//      check if the required controller is set and also exists
        if (isset($url[controller]) && file_exists('../app/controllers/'. $url[controller] .'.php')) {
            $this->controller = $url[controller];
        } 
        else if(@$url[controller] == ''){

        }else {
            @$this->params = [$url[controller]];
            $this->controller = 'NotFound';
            require_once '../app/controllers/'.$this->controller.'.php';    // require the controller.
            $this->controller = new $this->controller;  // call up the current controller class name.
            call_user_func_array([$this->controller, $this->method], $this->params);
            exit();
        }

        require_once '../app/controllers/'.$this->controller.'.php';    // require the controller.
        $this->controller = new $this->controller;  // call up the current controller class name.

//      check if the method in the current controller exists.
        if (isset($url[method]) && method_exists($this->controller, $url[method])) {
           $this->method = $url[method];    // assign the method name.
        }

//      check if the parameters are set and not empty.
        if (isset($url[params]) && $url != '') {
            $this->params = $url[params];
            $this->params = explode('/', $url[params]); // get every parameter.
        }
        
//      call the Action(method) of the current controller.
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

//  Retrun the current URL exploded as an array    
    public function parseURL() {
        return explode('/', filter_var(trim(parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/'), FILTER_SANITIZE_URL), numberUrl);
    }
}