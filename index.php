<?php
// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
// On appelle le modèle et le contrôleur principaux
require_once(ROOT.'app/Model.php');
require_once(ROOT.'app/Controller.php');
// On sépare les paramètres et on les met dans le tableau $params
if (isset($_GET['p'])){
$params = explode('/', $_GET['p']);

//print_r($params);
}
//on ajout en array le nom de controlleur autorisé
$cont=array('films', 'genres', 'realisateurs', 'main','', 'index');

// Si au moins 1 paramètre existe


if(!isset($_GET['p'])){$params[0] = "films";}
// if(!isset($_GET['p'])){$params[0] = "main";}
if(isset($_GET['p']) && $params[0] == "" ){$params[0] = "films";}
// if(isset($_GET['p']) && $params[0] == "" ){$params[0] = "main";}
if (in_array($params[0], $cont)){

if( $params[0] != ""  ){
    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
    $controller = ucfirst($params[0]);
    // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
    $action = isset($params[1]) ? $params[1] : 'index';
    // On appelle le contrôleur
    require_once(ROOT.'controllers/'.$controller.'.php');
    // On instancie le contrôleur
    $controller = new $controller();
    if(method_exists($controller, $action)){
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller,$action], $params);
        // On appelle la méthode
        // $controller->$action();    
    }else{
        // On envoie le code réponse 404
        http_response_code(404);
        echo "La page recherchée n'existe pas 001";
    }
}else{
    // Ici aucun paramètre n'est défini
    // On appelle le contrôleur par défaut
    require_once(ROOT.'controllers/Main.php');
    // On instancie le contrôleur
    echo "002";
    $controller = new Main();
    // On appelle la méthode index
    $controller->index();
}

}
//si le controleur n'est pas autorisé ou n'existe pas
else{
    require_once(ROOT.'controllers/Main.php');
    http_response_code(404);
    echo "003";
    $controller = new Main();
    $controller->notfound();
}