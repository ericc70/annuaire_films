<?php
//on gene une constante qui contiendrz le chemin

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'app/Model.php');
require_once(ROOT.'app/Controller.php');



//on sépare les parametres
$param = explode('/', $_GET['p']);
// $link =$_SERVER['REQUEST_URI'] ;


var_dump($param);
//est ce qu'un parametre existe


switch ($param[0]){

    case "films":
    
    $controller=ucfirst($param[0]);
   // echo $controller;
    $action=isset($param[1]) ? $param[1] : 'index';
    require_once(ROOT. 'controllers/'.$controller.'.php');
    $controller = new $controller();

    if(method_exists($controller, $action)){

          $controller->$action();
    }else{
        http_response_code(404);
        echo"La page demandé n\'existe pas";
    }
  
        break;

    case "genres":
        $controller=ucfirst($param[0]);
        // echo $controller;
         $action=isset($param[1]) ? $param[1] : 'index';
         require_once(ROOT. 'controllers/'.$controller.'.php');
         $controller = new $controller();
     
         if(method_exists($controller, $action)){
     
               $controller->$action();
         }else{
             http_response_code(404);
             echo"La page demandé n\'existe pas";
         }
       

        
    break;
    case "realisateurs":
        $controller=ucfirst($param[0]);
        // echo $controller;
         $action=isset($param[1]) ? $param[1] : 'index';
         require_once(ROOT. 'controllers/'.$controller.'.php');
         $controller = new $controller();
     
         if(method_exists($controller, $action)){
     
               $controller->$action();
         }else{
             http_response_code(404);
             echo"La page demandé n\'existe pas";
         }
       

        
    break;

        default:
        echo "404";

}
// if($param[0] != ""){

//
    
// }else{

// }