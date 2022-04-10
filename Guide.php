<?php

require 'vendor/autoload.php';
use Source\Router;


    if(isset($_GET["action"]))
    {
       $p = new Router();
       return Router::request();
    }
  