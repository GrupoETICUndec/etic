<?php
session_start();

ini_set('display_errors', 'error');
error_reporting(E_ALL | E_STRICT);

$controller="UserController";
$accion = "login";

if(isset($_SESSION['user'])){ 
    if(isset($_REQUEST['c'])){
        $controller = ucwords($_REQUEST['c']) . "Controller";
    }
}

if(isset($_SESSION['user']) || (isset($_REQUEST['a']) && $_REQUEST['a'] == "validateSession")){ 
    if(isset($_REQUEST['a'])){
        $accion = $_REQUEST['a'];
    }
}

require_once "controller/$controller.php";

$controller = new $controller();
$controller->$accion();
?>
