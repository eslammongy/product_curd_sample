<?php


use DB\MysqliDb;
require_once (LIBS.'DB/MysqliDb.php');

class DBModel{

    protected $db;
    public function connectWithDB(){
        $dateBase = new MysqliDb(HOST , USER , PASSWORD , DBNAME);
        if ($dateBase){
           echo "Hello From DateBase";
        }
        else{
            echo "Error Found In DateBase";
        }

    }
}