<?php
//Service to connect to view
function view($view, $data = []){
    if (!strpos($view, '.php')) {
        $view .= '.php';
    }
    require_once __DIR__ . "/$view";
    exit();
}
//Service to connect to controller
function controller ($controller, $method, $params=[]){
    if (!strpos($controller, '.php')) {
        $controller .= '.php';
    }

}