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
        show($url);
    }
    private function splitURL() {
        return explode("/", trim($_GET['url'],"/"));
    }

}
