<?php

namespace app\core;


class Router
{
    protected array $routes = [
        // 'get' =>[
        //     '/' =>callback,
        //     '/contact'
        // ]
    ];
    public function get($path, $callback){
        $this->routes[$path] = $callback;
    }
}