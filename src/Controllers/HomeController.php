<?php

namespace Php\Projeto\Controllers;

class HomeController{

    public function index($params){
        require '..\src\Views\Home\index.php';
}
}