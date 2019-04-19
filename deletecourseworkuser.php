<?php
session_start();
include('data.php');
require "predis/autoload.php";
Predis\Autoloader::register();

try {
    $redis = new Predis\Client();

    // This connection is for a remote server
    /*
        $redis = new PredisClient(array(
            "scheme" => "tcp",
            "host" => "153.202.124.2",
            "port" => 6379
        ));
    */
}
catch (Exception $e) {
    die($e->getMessage());
};





    if (isset($titledel)) {
        $redis->hdel($user, $titledel);
        $titledel = ""; 
       header("location:avaliablecourseworks.php");
      
   
   };

?>