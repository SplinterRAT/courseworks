<?php 
include('data.php');
//signin
function signin($username, $password) {
    global $redis;
    if ($redis -> hexists('users', $username) != 0) {
        $data = $redis->hgetall('users');
        $user = json_decode($redis->hget('users', $username), true);
        $pass = $user['password'];
        if($pass == $password){
            echo "Успішно!!";
             $_SESSION['logged_user'] = $user;
             header('location:avaliablecourseworks.php');
        }else {
            echo "Невірний пароль";
        }
    }else {
        echo "Логін не вірний бо не існує";
    }
};
//addcoursework
function addcoursework ($coursework_title, $faculty, $year_study, $description, $deadline) {
    if (isset($coursework_title) && isset($faculty) && isset($year_study) && isset($description) && isset($deadline)) {
        

        $data =  array(
                'coursework_title'=>$coursework_title,
                'faculty' => $faculty,
                'year' => $year_study,
                'description' => $description,
                'deadline' => $deadline
        );
        global $redis;
        $redis -> hset($faculty, $coursework_title, json_encode($data));
        echo ("<script>location.href='avaliablecourseworks.php'</script>");


    };
};
//registration
function registration($username, $firstname, $lastname, $password, $phone, $email, $faculty, $speciality) {
    if (isset($username) && isset($firstname) && isset($lastname) && isset($password) && isset($phone) && isset($email) && isset($faculty) && isset($speciality)) {
        $data =  array(
            'username' => $username,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'phone' => $phone,
            'email' => $email,
            'faculty' => $faculty,
        );
        global $redis;
       $redis -> hset('users', $username, json_encode($data));
        echo ("<script>location.href='signin.php'</script>");
    };
};
//avaliablecourseworks
function avaliablecourseworks () {
    $user = $_SESSION['logged_user']['username'];
    $key = $_SESSION['logged_user']['faculty'];
    global $redis;
    $table_data = $redis->hgetall($key);
    $titels = array_keys($table_data);
    $a=0;
    foreach ($titels as $i){
        $a++;
        $data = json_decode($table_data[$i], true);
        $temp = $i;
        echo "<tr><td id= \" ?$temp\">" . $a . "</td>";
        foreach ($data as $key=>$value){
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
//subscribecoursework
function addcourseworkuser ($titleadd){
    $user = $_SESSION['logged_user']['username'];
    global $redis;
    $status = "in progress";
    if (isset($titleadd)) {
        $redis->hset($user, $titleadd, $status); 
        $titleadd = "";
        header("location:avaliablecourseworks.php");
    };

};
//unsubscribecoursework
function deletecourseworkuser ($titledel){
    $user = $_SESSION['logged_user']['username'];
    global $redis;
    if (isset($titledel)) {
        $redis->hdel($user, $titledel);
        $titledel = ""; 
       header("location:avaliablecourseworks.php");
      
   
   };
};
//mycourseworks
function mycourseworksstudent() {
    $user = $_SESSION['logged_user']['username'];
    global $redis;
    $myworks = $redis->hkeys($user);
    if (isset($myworks)) {
        $a=0;
        foreach ($myworks as $i) {
            $a++;
            $status = $redis->hget($user,$i);
            echo '<tr><td>' . $a . '</td><td>' . $i . '</td><td>' . $status . '</td></tr>';
        };
    
    };
};
?>