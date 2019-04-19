


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Курсові роботи</title>
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
                    <li class="active"><a href="index.php">Головна</a></li>
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
                    <li><img src="img/1.png" width="30px" class="img-circle" /></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo 'username'; ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Вихід</a></li>
                            <li><a href="#">Налаштування</a></li>
                            
                        </ul>
                    </li>
                    
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
                    <div class="post-content">

                        <h4><b>Додати курсову</b></h4>
                        <hr>
                     
                    



   <form action="" method="GET" >
                                    <div>
                                        <label> Тема<br> <input type="text" name="title" value="" class="form-control" autofocus required size="100%">
                    </label>
                                    </div>
                                    <div>
                                        <label> Факультет/Спеціальність <br>
                                    <input onclick="document.getElementById('custom').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" name="radiobutton" checked="checked" value = "FI">ФІ
                      <br> <select name="speciality" id="custom" disabled="disabled">
       <option value = "CompScience">КомпНауки</option>
       <option value = "PI">ПІ</option>
</select>
<br><br>
<input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="radiobutton" value="FEN">ФЕН
<br><select name="speciality" id="charstype" disabled="disabled">
       <option value = "EconTheory">Економічна теорія</option>
       <option value = "FinCred">Фінанси і кредит</option>
</select>
    </label>
    </div>
    <div>
        <label>Рік навчання <br><select name="year" id="year">
       <option value = "1">1</option>
       <option value = "2">2</option>
       <option value = "3">3</option>
       <option value = "4">4</option>
       <option value = "5">5</option>
       <option value = "6">6</option>
</select></label>
    </div>


                                    <div>
                                        <label> Опис<br><textarea class="form-control" name="description" required rows="20" cols="100%"> </textarea>
                    </label>
                                    </div>
                                    <!-- Для преподавателя онли-->
                                    <div>
                                        <label> Deadline:

                                    <input type="date" id="start" name="deadline" >
    </label>
                                     <!-- Для преподавателя онли-->
                                    </div>
                                   <button type="submit" class="btn btn-success" >Додати</button>
                                    <input type="reset" value="Очистити" class="btn btn-danger">
                                </form>





                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Reshare Example -->


    <div class="container">

        <div class="footer">
            <div class="row">
                <div class="col-lg-9 col-md-9 hidden-sm hidden-xs">
                   
                </div>
                <div class="col-lg-3 col-md-3 col-xm-3 col-xs-3 ">
                    <div align=left>
                        <p><a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><b>Про нас</b></a>
                            <p><a href="#"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><b>Зворотній зв'язок</b></a> </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xm-12 col-xs-12 ">
                    <hr>
                    <p>Copyright &copy; Illia Litvin 
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
<!--
    <script>
        function myFunction(idInput, idTable) {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById(idInput);
            filter = input.value.toUpperCase();
            table = document.getElementById(idTable);
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script> -->
    <?php

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
    $coursework_title = $_GET['title'];
    $faculty = $_GET['radiobutton'];
    $year_study = $_GET['year'];
    $description = $_GET['description'];
    $deadline = $_GET['deadline'];
    if (isset($coursework_title) && isset($faculty) && isset($year_study) && isset($description) && isset($deadline)) {
        print_r($_GET) ;

        $data =  array(
                'coursework_title'=>$coursework_title,
                'faculty' => $faculty,
                'year' => $year_study,
                'description' => $description,
                'deadline' => $deadline
        );
        $redis -> hset($faculty, $coursework_title, json_encode($data));


    };


    ?>

</body>


</html>
