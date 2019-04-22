<?php
// session_start();
// require "predis/autoload.php";
// Predis\Autoloader::register();


// try {
//     $redis = new Predis\Client();

//     // This connection is for a remote server
//     /*
//         $redis = new PredisClient(array(
//             "scheme" => "tcp",
//             "host" => "153.202.124.2",
//             "port" => 6379
//         ));
//     */
// }
// catch (Exception $e) {
//     die($e->getMessage());
// };
include('controller.php');
signin(@$_GET['username1'], @$_GET['password1']);
// $username = $_GET['username1'];
// $password = $_GET['password1'];
// if ($redis -> hexists('users', $username) != 0) {

//     $data = $redis->hgetall('users');
//     $user = json_decode($redis->hget('users', $username), true);
//     $pass = $user['password'];
//     if($pass == $password){
//         echo "Успішно!!";
//          $_SESSION['logged_user'] = $user;
//          header('location:avaliablecourseworks.php');
//     }else {
//         echo "Невірний пароль";
//     }
// }else {
//     echo "Логін не вірний бо не існує";
// }
// //$user = $redis->hget('users', '$username');
// //$d = (json_decode($user, true));
// //echo ($d['password']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Вхід</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v2.9";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
   <nav class="navbar navbar-default navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img src="img/logo.png" height="40px"> </div>
                <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="signin.php">Головна</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Курсові</a>
                        <ul class="dropdown-menu">
                            <li><a href="avaliablecourseworks.php">Доступні</a></li>
                            <li><a href="mycourseworksstudent.php">Мої курсові</a></li>
                            <li><a href="addcoursework.php">Запропонувати тему</a></li>
                        </ul>
                    </li>
                    <li><a href="teachers.php">Викладачі</a></li>
                    <li><a href="profile.php">Мій профіль</a></li>
                    <li><a href="#">Контакти</a></li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                            <a href = "signin.php">Вхід </a>
                        </li>
                        <li><a href="registration.php">Реєстрація</a></li>
                    </ul>
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Введіь інформацію для пошуку" type="text" value="" name="search" id="search">
                            <input class="sb-search-submit" type="submit" value=""> <span class="sb-icon-search"></span> </form>
                    </div>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- Simple post content example. -->
            <div class="panel panel-default">


<div class="panel-body">
   <h4><b> Вхід</b> </h4>
   <hr>

   <form id="signupForm1" class="form-horizontal" action="" method="GET" >
       <div class="form-group">
               <label class="col-sm-4 control-label" for="username1">Username</label>
               <div class="col-sm-5">
                   <input type="text" class="form-control"  name="username1" placeholder="Username" value = "">
               </div>
           </div>
       
       <div class="form-group">
           <label class="col-sm-4 control-label" for="password1">Пароль</label>
           <div class="col-sm-5">
               <input type="password" class="form-control"  name="password1" placeholder="Password" value = "">
           </div>
       </div>
      
       <div class="form-group">
           <div class="col-sm-9 col-sm-offset-4">
               <button type="submit" class="btn btn-primary" >Вхід</button>
               <button type="reset" class="btn btn-danger" name="reset" value="reset">Очистити</button>
           </div>
       </div>
   </form>

</div>
                <div class="post-content">

                </div>
            </div>
        </div>
        <!-- Reshare Example -->
    </div>

    <div class="container">

        <div class="footer">
            <div class="row">
                <div class="col-lg-9 col-md-9 hidden-sm hidden-xs">
                    
                </div>
                <div class="col-lg-3 col-md-3 col-xm-3 col-xs-3 ">
                    <div align=left>
                        <p><a href="about.html"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><b>Про нас</b></a>
                            <p><a href="call.html"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><b>Зворотній зв'язок</b></a> </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xm-12 col-xs-12 ">
                    <hr>
                    <p>Copyright &copy; Illia Litvin Vlad Motchaniy
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script src="js/form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script>
        new UISearch(document.getElementById('sb-search'));
    </script>

    <!-- <script type="text/javascript">
        $.validator.setDefaults({
            submitHandler: function() {
                alert("submitted!");
            }
        });



        $(document).ready(function() {


            $("#signupForm1").validate({

                rules: {
                    firstname1: "required",
                    lastname1: "required",
                    username1: {
                        required: true,
                        minlength: 2
                    },
                    password1: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password1: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password1"
                    },
                    file: {
                        required: true,
                        extension: "png|jpeg|jpg",

                    },

                    email1: {
                        required: true,
                        email: true
                    },
                    agree1: "required",
                    gender: {
                        required: false
                    },
                    visible: {
                        required: false
                    }
                },
                messages: {
                    firstname1: "Please enter your firstname",
                    lastname1: "Please enter your lastname",
                    username1: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    password1: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    confirm_password1: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    email1: "Please enter a valid email address",
                    agree1: "Please accept our policy",
                    file: {
                        required: "Не выбран файл",
                        extension: "Не то разширение файла"
                    }
                    
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    // Add `has-feedback` class to the parent div.form-group
                    // in order to add icons to inputs
                    element.parents(".col-sm-5").addClass("has-feedback");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }

                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!element.next("span")[0]) {
                        $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
                    }
                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!$(element).next("span")[0]) {
                        $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
                    $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
                    $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
                }
            });
        });
    </script>
    -->
</body>

</html>