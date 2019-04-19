<?php
session_start();

$d = $_SESSION['logged_user'];
echo($d['faculty']);

//$key = 'htests';
//$redis->hset($key, 'name', 'coursework');
//$redis->hset($key, 'description', 'text about your coursework!!! ');
//$redis->hset($key, 'teacher_name', 'Ivanov Ivan');
//$redis->hset($key, 'year_of_study', '2');


include('temp.php');
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
}
echo '<table id="myTable7"><tr class="header"><th>#</th><th>Тема</th><th align="center">Факультет/спеціальність</th><th align="center">Викладач</th><th align="center">Р/Н</th><th align="center">Deadline</th><th align="center">Записатися</th>'
// тут переменніе присваивешь, которіе с базі получаешь
                                                $arr = $redis->hgetall('FI');
                                             for ($i = 0, $i < count($arr), $i++) {
                                                 $coursework = explode("/", $arr[i]);
                                                 echo '<tr>';
                                                 for ($a = 0; $a < count($coursework); $a++) {
                                                     echo '<td>' . $coursework[$a] . '</td>';
                                                 };
                                                 echo '<tr>';
                                             };
