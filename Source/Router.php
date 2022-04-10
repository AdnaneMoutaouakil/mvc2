<?php

namespace Source;
class Router{
    
  
    static function request(){
        $path =__DIR__.'\Config\route.json';
        $Content = file_get_contents($path);
        $routes = json_decode($Content);
        if(isset($_GET['action']))
        {
           
          foreach($routes as $route)
          {
              if($route->action == $_GET['action']){
                echo 'the action found IS : '.$route->action.'<br>';
                  $controller = $route->Controller;
                  $controller = explode('::', $controller);
                  $className = "Controller\\".$controller[0];
                  $methodeName = $controller[1];
                  $controllerObj = new $className();            
                  $ar = self::URL_Slice("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");    
                  return $controllerObj->$methodeName($ar);
                  
              }
          }
        }
        else{
          foreach($routes as $route)
          {
              if($route->action =="//"){
                echo 'the action found IS : '.$route->action.'<br>';
                  $controller = $route->Controller;
                  $controller = explode('::', $controller);
                  $className = "Controller\\".$controller[0];
                  $methodeName = $controller[1];
                  $controllerObj = new $className();            
                  $ar = self::URL_Slice("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");    
                  return $controllerObj->$methodeName($ar);
                  
              }
          }
        }
    }
    static function URL_Slice($URL)
    {
         $chaine = explode("?",$URL);
         $chaine = array_pop($chaine);
         echo $chaine;
         $dilimiters = array("&", "=");
         $chaine = str_replace($dilimiters, " ", $chaine);
         $res = explode(" ",$chaine);
         echo 'la taile du table est :'.count($res).'<br>';
         $resfinal = array();
         for($i = 0; $i<count($res)-1; $i+=2)
         {
             if($i+1 <count($res))
              {
                $resfinal[$res[$i]] = $res[$i+1];
             }
         }
         return $resfinal;
     
    }
    
}