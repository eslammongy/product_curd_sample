<?php

class View{

    public static function load($view_name , $view_date=[]){

        $filePath = VIEWS.$view_name.'.php';
        if (file_exists($filePath)){
            extract($view_date);
            ob_start();
            require_once ($filePath);
            ob_end_flush();
        }else{
            echo "this file called -> ".$view_name." doesn't exit..";
        }


}
}
