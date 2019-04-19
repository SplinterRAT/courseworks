<?php
require "predis/autoload.php";
Predis\Autoloader::register();

try {
	$redis = new Predis\Client();
        $value = $redis->get ('login:test');
	print ($value);

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

//$login = "login:" . $_GET['login'];
$login = $_GET['login'];
$password = $_GET['password'];
//print ($login);
$redis->set($login, $password);
//print($login);
//print($password);
//$testlogin = $redis->get($login);
//print($testlogin);
//print ($testlogin);
echo '<form name="form" action="" method="get">
  <input type="text" name="login" id="subject" value=" ">
<input type="text" name="password" id="subject" value=" ">
 <p><input type="submit" value="Вхід"></p>
</form>';
?>