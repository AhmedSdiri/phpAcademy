<?php


class App{
    

    protected static $router;

    public function __construct(){}


public static function getRouter(){
    return self::$router;
}

public static function run($uri){
    self::$router = new Router($uri);
    
    $controller_class = ucfirst(self::$router->getController()).'Controller';
    
    $controller_method = strtolower(self::$router->getMethodPrefix().$router->getAction());
    
    
    //claaing controller's method
    $controller_action = new $controller_class();
    
    if (method_exists($controller_object, controller_object)){
        $result = $controller_object->$controller_method();
        
    }
    
    
}
    
    }