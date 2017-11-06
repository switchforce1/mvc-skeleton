<?php

namespace App\Router;

/**
 * Description of Route
 *
 * @author switchorce1
 */
class Route
{
    /**
     * The path
     *
     * @var string 
     */
    private $path;
    
    /**
     * Execution callable
     * 
     * @var type 
     */
    private $callable;
    
    /**
     * The constructor.
     * 
     * @param type $path
     * @param type $callable
     */
    function __construct($path, $callable)
    {
        $this->path = trim($path, "/");
        $this->callable = $callable;
    }

    /**
     * Chech if an url match with the current route
     * 
     * @param type $url
     */
    public function match($url)
    {
        $url = trim($url, "/");
        //Replace parameters in the url
        $path = preg_replace("#:([\w]+)#","([^/]+)", $this->path);
        
        //regex from the begining(^) to the end($)
        $regex = "#^$path$#";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }
        
        var_dump($matches);
    }
    
}
