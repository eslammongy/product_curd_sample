<?php
// front end controller .
class  App{
    protected  $controller = "HomeController";
    protected $action = "index";
    protected  $parms = [];

    public  function __construct()
    {
        $this->preparingUrl();
        $this->render();
    }

    // extract controller and method and parameters and return void
    private function preparingUrl(){
        $url = $_SERVER["QUERY_STRING"];

        if (!empty($url)){
            $url = trim($url , '/');
            $url = explode("/" , $url);
            $this->controller = isset($url[0]) ? ucwords($url[0])."Controller": "HomeController";
            $this->action = $url[1] ?? "index";
            unset($url[0] , $url[1]);
            $this->parms = !empty($url) ? array_values($url) : [];
            //var_dump($this->parms);
            echo "<h1 style='text-align: center ; color: orangered'>$this->controller</h1>";
        }else{
            echo "<b></b> <h1 style='text-align: center ; color: orangered'>Welcome</h1>";
        }
    }

    private function render(){
        if (class_exists($this->controller)){
            $controller = new $this->controller;
            if(method_exists($controller , $this->action)){
                call_user_func_array([$controller , $this->action] , $this->parms);
                $message = "Hello From Home Controller";
                echo "<h1 style='text-align: center ; color: orangered'>$message</h1>";
            }else{
                echo "No Method Checked Here...";
            }

        }else{
            $message = "This Controller :".$this->controller. " Not Exit";
            echo "<h1 style='text-align: center ; color: orangered'>$message</h1>";
        }
    }
}