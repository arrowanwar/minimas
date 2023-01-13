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

    public function __construct() {
        $url = $this->splitURL();
        show($url);
    }
    private function splitURL() {
        return explode("/", trim($_GET['url'],"/"));
    }

}
