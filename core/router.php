<?php
class Router
{
    protected $routes = [];

    //create a new instance of router, static because it will persist
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    //assign the routes to the routes class
    public function define($routes)
    {
        $this->routes = $routes;
    }

    //if the specified route exists, go to that URI. If not, throw an exception
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new Exception('No route defined for this URI.');
    }

}
