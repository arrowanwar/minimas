<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of app
 *
 * @author USER
 */
class app {
    private $controller = "home";
    private $method = "index";
    private $param = [];
    public function __construct() {
        $url = $this->splitURL();
        if(file_exists("../app/contollers/".strtolower($url[0]).".php")){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        require "../app/contollers/". $this->controller.".php";
        $this->controller = new $this->controller;
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        show($url);
    }
    private function splitURL() {
        return explode("/", trim($_GET['url'],"/"));
    }

}
