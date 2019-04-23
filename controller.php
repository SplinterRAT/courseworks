<?php

include('data.php');
//signin
function signin($username, $password) {
    global $redis;
    if ($redis -> exists($username) != 0 && $username != "") {
        $data = $redis->hgetall($username);
        $pass = $data['password'];
        if($pass == $password){
            echo "Успішно!!";
             $_SESSION['logged_user'] = $data;
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
        
        $work_id = uniqid();

        $data =  array(
              //  'teacher'=>'',
            // 'student'=>'',
                'coursework_title'=>$coursework_title,
                'teacher'=>'teacherName',
                'faculty' => $faculty,
                'year' => $year_study,
                'description' => $description,
                'deadline' => $deadline
        );
        global $redis;
        $redis -> hset($faculty, $work_id, '');
        $redis -> hmset($work_id, $data);

        echo ("<script>location.href='avaliablecourseworks.php'</script>");


    };
};
//registration
function registration($username, $firstname, $lastname, $password, $phone, $email, $faculty, $speciality) {
    if (isset($username) && isset($firstname) && isset($lastname) && isset($password) && isset($phone) && isset($email) && isset($faculty) && isset($speciality)) {
        $data =  array(
            'access_type'=>0,
            'username' => $username,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            'phone' => $phone,
            'email' => $email,
            'faculty' => $faculty,

        );
        global $redis;
        $redis -> hset('users',$username,$password);
       $redis -> hmset( $username, $data);
        echo ("<script>location.href='signin.php'</script>");
    }else{
        echo "error!";
    };
};
//avaliablecourseworks
function avaliablecourseworks () {
    $user = @$_SESSION['logged_user']['username'];
    $key_faculty = @$_SESSION['logged_user']['faculty'];
    global $redis;
    $a = 0;
    $table_data = $redis->hkeys($key_faculty);
    foreach ($table_data as $i){
        $p = $redis -> hgetall($i);
        $a++;
        echo '<br>';
        echo "<tr><td id= \" ?$i\">" . $a . "</td>";
        foreach ($p as $key=>$value){
            echo '<td>' . $value . "</td>";
        }
        echo '<td><form method="get">';
       // $check = $redis->hget($user, $i);
        $check = $redis->hget($user, "work_id");
        //$mark = hset($)user, *titlweid , A/91
        $student = $redis->hget($key_faculty, $i);

           if ($check !== $i && $student =="") {
               echo ' <button type = "submit" formaction = "addcourseworkuser.php"class="btn btn-primary" name = "titleadd" value ="' . $i .'">Записатися</buttom>';
           } else if ($student == $user){
               echo '<button type = "submit"  class="btn btn-danger" formaction = "deletecourseworkuser.php" name = "titledel" value ="' . $i .'">Виписатися</button>';
           } else {
               echo "Зайнято";
           };

        echo '</form></td>';
        echo "</tr>";

    };
};
//subscribecoursework
function addcourseworkuser ($titleadd){
    global $redis;
    $user = $_SESSION['logged_user']['username'];
    $faculty = $_SESSION['logged_user']['faculty'];
    $work_id = $redis ->hget($user, "work_id");
    if (isset($titleadd) && $work_id == "") {
        $redis->hset($user, "work_id", $titleadd);
        $redis->hset($faculty, $titleadd, $user);
        $titleadd = "";
        header("location:avaliablecourseworks.php");
    }else{
        echo "Ви всже підписані";
    };

};
//unsubscribecoursework
function deletecourseworkuser ($titledel){
    global $redis;
    $user = $_SESSION['logged_user']['username'];
    $faculty = $_SESSION['logged_user']['faculty'];
    if (isset($titledel)) {
        $redis->hset($user, "work_id", "");
        $redis->hset($faculty, $titledel, "");
        $titledel = ""; 
       header("location:avaliablecourseworks.php");
   } ;
};
//mycourseworks
function mycourseworksstudent() {
    global $redis;
    $user = @$_SESSION['logged_user']['username'];
    $work_id = $redis->hget($user, "work_id");
    $myworks = $redis->hgetall($work_id);
    if ($work_id !=="") {
        $a=0;
        foreach ($myworks as $i) {
            $a++;
            $status = $redis->hget($user,$i);
            echo '<tr><td>' . $a . '</td><td>' . $i . '</td><td>' . $status . '</td></tr>';
        };
    
    };
};
?>