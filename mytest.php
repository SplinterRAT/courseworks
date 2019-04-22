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
//$data = $redis->hgetall('user1');
//$pass = $data['password'];
$d = $redis-> hkeys('FI');
echo '<br>';
$a = 0;
foreach ($d as$i){
  $p = $redis -> hgetall($i);
 // print_r($p);
    $a++;
  echo '<br>';
    echo "<tr><td id= \" ?$i\">" . $a . "</td>";
    foreach ($p as $key=>$value){
        echo '<td>' . $value . "</td>";
    }
    echo '<td><form method="get">';
    $check = $redis->hget($user,$temp);

    if (!isset($check )) {
        echo ' <button type = "submit" formaction = "addcourseworkuser.php"class="btn btn-primary" name = "titleadd" value ="' . $temp .'">Записатися</buttom>';
    } else {
        echo '<button type = "submit"  class="btn btn-danger" formaction = "deletecourseworkuser.php" name = "titledel" value ="' . $temp .'">Виписатися</button>';
    };
    echo '</form></td>';
    echo "</tr>";

};

function avaliablecourseworks () {
    $user = @$_SESSION['logged_user']['username'];
    $key = @$_SESSION['logged_user']['faculty'];
    global $redis;
    $d = $redis-> hkeys($key);
    echo '<br>';
    $a = 0;
    foreach ($d as$i){
        $p = $redis -> hgetall($i);
        // print_r($p);
        $a++;
        echo '<br>';
        echo "<tr><td id= \" ?$i\">" . $a . "</td>";
        foreach ($p as $key=>$value){
            echo '<td>' . $value . "</td>";
        }
        echo '<td><form method="get">';
        $check = $redis->hget($user,$temp);

        if (!isset($check )) {
            echo ' <button type = "submit" formaction = "addcourseworkuser.php"class="btn btn-primary" name = "titleadd" value ="' . $temp .'">Записатися</buttom>';
        } else {
            echo '<button type = "submit"  class="btn btn-danger" formaction = "deletecourseworkuser.php" name = "titledel" value ="' . $temp .'">Виписатися</button>';
        };
        echo '</form></td>';
        echo "</tr>";

    };

};