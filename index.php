<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'controllers/BaseController.php';
require_once 'controllers/Home.php';
$controller = ucfirst($_GET['controller'] ?? "home");
$fileName = 'controllers/'.$controller.'.php';
if($controller!=="Home") require_once $fileName;
$action = $_GET['action'] ?? "index";
if(!file_exists($fileName) || !method_exists($controller,$action) || ($controller==="Home" && $action="index")) {
    (new Home())->index();
    die();
}
if($controller==="Auth" && $action=="login") (new Auth())->login();
if($controller==="Auth" && $action=="register") (new Auth())->register();


