<?php


class Router {
    
    protected $uri;
    
    protected $action;
    
    protected $controller;
    
    protected $params;
    
    protected $route;
    
    protected $method_prefix;
    
    protected $lunguage;
    
    public function getUri(){
        return $this->uri;
    }
    public function getController(){
        return $this->Controller;
    }
    public function getAction(){
        return $this->action;
    }
    public function getParams(){
        return $this->params;
    }
     public function getMethos_prefix(){
        return $this->methos_prefix;
    }
     public function getRoute(){
        return $this->route;
    }
     public function getLunguage(){
        return $this->lunguage;
    }
    //construct
    public function __construct($uri){
        
       
        print_r('</br> OK Router was called with uri : '.$uri);
        $this->$uri = urldecode(trim($uri,'/'));
       /* $this->$controller = $controller;
        $this->action = $action;
        $this->$params = $parmas;*/
        
        //GET DEFAULTS
        $routes = Config::get('routes');
        $this->route = Config::get('default_route');
        $this->method_prefix = $routes[$this->route];
        $this->lunguage = Config::get('default_lunguage');
        $this->controller = Config::get('default_controller');
        $this->action = Config::get('default_action'); 
                                 
                                 $uri_parts = explode('?', $this->$uri);
                                 $path = $uri_parts[0];
                                 echo '</br> this is the path :'.$path;
                                 $path_parts = explode('/', $path);
                                 echo '<pre> path_parts :';
                                  print_r($path_parts);
         
        //video 5, 6min     
        echo current($path_parts);
        echo $routes;
        if (count($path_parts)){
            //get route of lunguage at first element
            if ( in_array(strtolower( current($path_parts)) , array_keys($routes)) ) {
                $this->route = strtolower(current($path_parts));
                $this->method_prefix = routes[$this->route];
                array_shift($path_parts);
                
            } elseif ( in_array(strtolower(current($path_parts)), Config::get('lunguages')) ){
                $this->lunguage = strtolower(current($path_parts));
                array_shift($path_parts);
                
            }
            //get controller = next element of array
            if (current($path_parts)) {
                $this->controller = strtolower(current($path_parts));
                 array_shift($path_parts);
                
            }
            // get action
            if (current($path_parts)) {
                $this->action = strtolower(current($path_parts));
                 array_shift($path_parts);
            
            }
            // get params
            $this->params = $path_parts;
        
    }
    
}
}

?>
