<?php
session_start();
//$d = $_SESSION['logged_user'];
//print_r($d);

//$key = 'htests';
//$redis->hset($key, 'name', 'coursework');
//$redis->hset($key, 'description', 'text about your coursework!!! ');
//$redis->hset($key, 'teacher_name', 'Ivanov Ivan');
//$redis->hset($key, 'year_of_study', '2');

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
} catch (Exception $e) {
    die($e->getMessage());
};
$username = "Pupa";
$arr = array(1,2,3,4,5);
$redis->hmset($username.".teachers_works",  $arr );
$f = $redis->hgetall($username.".teachers_works");
foreach ($f as $i){
    echo $i;
    echo "<br>";
};

