<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of home
 *
 * @author USER
 */
class home {
    function index()
    {
        $this->view("home");
    }
    function view($view){
         if(file_exists("../app/views/".$view.".php")){
             include "../app/views/".$view.".php";
        } else {
            include "../app/views/404.php";
        }
    }
}
