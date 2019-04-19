
<?php

use Predis\Autoloader;
use Predis\Client;

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

$username = $_GET['username1'];
$usernamenew = $username;
$password = $_GET['password1'];
$data = $redis->hgetall('users');
$user = json_decode($redis->hget('users', $username), true);
$pass = $user['password'];

?>
