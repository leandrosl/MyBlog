<?php

namespace MyBlog\Core;

class Router
{
    public $route;

    public function __construct() 
    {
        $this->route = 'routeclass';
    }

    public function __toString() 
    {
        return $this->route;
    }
}