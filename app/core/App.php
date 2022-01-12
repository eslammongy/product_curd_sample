<?php
// front end controller .
class  App{
    protected  $controller = "HomeController";
    protected $action = "index";
    protected  $parms = [];

    public  function __construct()
    {
        $url = $_SERVER["QUERY_STRING"];
        $url = explode("/" , $url);
        var_dump($url);
        echo "<b></b> <h1>Welcome</h1>";
    }
}