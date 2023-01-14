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
        show($url);
//        require '../controllers/home.php';
        if(file_exists("../app/controllers/home.php")){
            echo 'ok';
//            $this->controller = strtolower($url[0]);
//            unset($url[0]);
//            show($url);
        } else {
            echo 'not';
        }
//        require '../controllers/home.php';
//        $this->controller = new $this->controller;
//        if(isset($url[1])){
//            if(method_exists($this->controller, $url[1])){
//                $this->method = $url[1];
//                unset($url[1]);
//            }
//        }
//        show($url);
    }
    private function splitURL() {
        return explode("/", trim($_GET['url'],"/"));
    }

}
