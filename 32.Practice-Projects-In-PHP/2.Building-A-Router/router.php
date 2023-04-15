<?php
    class Router{
        public static function handle($method, $path="/", $filename="")
        {
            $currentMethod = $_SERVER['REQUEST_METHOD'];
            $currentURI = $_SERVER['REQUEST_URI'];
            if($currentMethod != $method){
                return false;
            }

            // if comes here means $method matches with $currentMethod
            $baseDirectory = __DIR__;
            $pattern = "#^".$baseDirectory.$path."$#siD";
            if(preg_match($pattern, $currentURI)){
                // feature for named or anonymous function
                if(is_callable($filename)){
                    $filename(); // if its a function then call it
                }
                else{
                    require_once $filename;
                }
                
                exit;
            }

            return false;
        }

        public static function get($path="/", $filename="")
        {
            return self::handle("GET", $path, $filename);
        }
        public static function post($path="/", $filename="")
        {
            return self::handle("POST", $path, $filename);
        }
        public static function patch($path="/", $filename="")
        {
            return self::handle("PATCH", $path, $filename);
        }
        public static function put($path="/", $filename="")
        {
            return self::handle("PUT", $path, $filename);
        }
        public static function delete($path="/", $filename="")
        {
            return self::handle("DELETE", $path, $filename);
        }

    }