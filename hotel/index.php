<?php

$request = $_SERVER['REQUEST_URI'];

$split_request = explode("/", $request);

$path_controllers = getcwd().'/controllers/';

switch($split_request[1]) {
    case "/":
    case "":
        include_once $path_controllers. 'index_controller.php';
        break;
    case "principal.php":
        include_once $path_controllers . 'principal_controller.php';
    default:

}

?>