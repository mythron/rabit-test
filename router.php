<?php

namespace App;

class Router
{
    protected $uri;
    protected $method;
    protected $done = false;

    public function __construct($method, $requestURI)
    {
        $this->uri = strtolower($requestURI);
        $this->method = strtolower($method);
    }

    public function route($method, $target, $handler)
    {
        if (
            ($this->uri == strtolower($target) || $target == '') &&
            ($this->method == strtolower($method) || $method == '') &&
            !$this->done
        ) {
            $arr = explode('.', $handler);
            //Add namespace to class name
            $arr[0] = __NAMESPACE__ . '\\' . $arr[0];
            //Create class instance;
            $arr[0] = new $arr[0]();
            $this->done = true;
            echo call_user_func($arr);
        }
    }

    // DONE flag is used so the router can be used to serve only one request
    public function isFound()
    {
        return $this->done;
    }
}