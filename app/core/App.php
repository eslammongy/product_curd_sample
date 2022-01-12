<?php
// front end controller .
class  App{
    protected  $controller = "HomeController";
    protected $action = "index";
    protected  $parms = [];

    public  function __construct()
    {
        $url = $_SERVER["QUERY_STRING"];

        if (!empty($url)){
            $url = explode("/" , $url);
            echo "<b></b> <h1>$url[1]</h1>";
        }else{
            echo "<b></b> <h1 style='text-align: center ; color: orangered'>Welcome</h1>";
        }

    }
}