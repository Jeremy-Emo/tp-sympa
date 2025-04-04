<?php
session_start();
use src\Controller\HomeController;

require_once '../vendor/autoload.php';

spl_autoload_register(function ($class) {
    $ds = DIRECTORY_SEPARATOR;
    $dir = $_SERVER['DOCUMENT_ROOT'] . $ds."..";
    $className = str_replace("\\", $ds, $class);
    $file = "{$dir}{$ds}{$className}.php";
    if(is_readable($file)) {
        require_once $file;
    }
});

function resolve(string $class) {
    $reflectionClass = new \ReflectionClass($class);
    $constructor = $reflectionClass->getConstructor();

    if (!$constructor) {
        return new $class();
    }

    $params = [];
    foreach ($constructor->getParameters() as $param) {
        $type = $param->getType();
        if ($type instanceof ReflectionNamedType && !$type->isBuiltin()) {
            $dependencyClass = $type->getName();
            $params[] = resolve($dependencyClass);
        } else {
            throw new Exception("Cannot resolve non-class parameter \${$param->getName()}");
        }
    }

    return $reflectionClass->newInstanceArgs($params);
}

$urls = explode('/', $_GET['url']);
$controller = (isset($urls[0])) ? $urls[0] : '';
$action = (isset($urls[1])) ? $urls[1] : '';
$param = (isset($urls[2])) ? $urls[2] : '';

if ($controller != '') {
    try {
        $class = "src\Controller\\{$controller}Controller";

        if(class_exists($class)) {
            $controller = resolve($class);
            if (method_exists($controller, $action)) {
                echo $controller->$action($param);
            } else {
                throw new Exception("Action {$action} does not exist in {$class}");
            }
        }else{
            throw new Exception("Controller {$controller} does not exist");
        }
    } catch (Exception $e) {
        $controller = resolve(ErrorController::class);
        echo $controller->show($e);
    }
} else {
    //Page par défaut
    $controller = resolve(\src\Controller\HomeController::class);
    echo $controller->index();
}
