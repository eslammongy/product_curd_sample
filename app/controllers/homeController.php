<?php

class HomeController{

    public function index($id){
      $date["title"] = "Home Screen";
      $date["content"] = "Home Screen Content";
      View::load('home' , $date);
    }
}