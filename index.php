<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'controllers/BaseController.php';
require_once 'controllers/Home.php';
$controller = "";
$action = $_GET['action'] ?? "index";
if($_SERVER['REQUEST_METHOD']==="GET"){
    $controller = ucfirst($_GET['controller'] ?? "home");
    $action = $_GET['action'] ?? "index";
}
if($_SERVER['REQUEST_METHOD']==="POST"){
    $controller = ucfirst($_POST['controller'] ?? "home");
    $action = $_POST['action'] ?? "index";
}
$fileName = 'controllers/'.$controller.'.php';
if($controller!=="Home") require_once $fileName;
if(!file_exists($fileName) || !method_exists($controller,$action) || ($controller==="Home" && $action="index")) {
    die("<h1>404 NOT FOUND</h1>");
}
if($_SERVER['REQUEST_METHOD']==="GET") require_once ('./api/get.php');
if($_SERVER['REQUEST_METHOD']==="POST") require_once ('./api/post.php');



