
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

  
  /* echo '<div class="panel-body">
   <h4><b> Реєстрація</b> </h4>
   <hr>

   <form id="signupForm1" class="form-horizontal" action="" method="POST" >
       <div class="form-group">
               <label class="col-sm-4 control-label" for="username1">Нікнейм</label>
               <div class="col-sm-5">
                   <input type="text" class="form-control" id="username1" name="username1" placeholder="Username" value = " ">
               </div>
           </div>
       <div class="form-group">
           <label class="col-sm-4 control-label" for="firstname1">Імя</label>
           <div class="col-sm-5">
               <input type="text" class="form-control" id="firstname1" name="firstname1" placeholder="First name" >
           </div>
       </div>
       <div class="form-group">
           <label class="col-sm-4 control-label" for="lastname1">Прізвище</label>
           <div class="col-sm-5">
               <input type="text" class="form-control" id="lastname1" name="lastname1" placeholder="Last name" >
           </div>
       </div>
       <div class="form-group">
               <label class="col-sm-4 control-label" for="faculty">Факультет/Спеціальність </label>
              <div class="col-sm-5 col-sm-offset-4">
                  


                   <input onclick="document.getElementById("custom").disabled = false; document.getElementById("charstype").disabled = true;" type="radio" name="radiobutton" value="FI" checked="checked">ФІ
                   <select name="speciality" id="custom" disabled="disabled">
                           <option value = "PI">ПІ</option>
                           <option value = "CompScience">КомпНауки</option>
                    </select>
                       <br><br>
                       <input onclick="document.getElementById("custom").disabled = true; document.getElementById("charstype").disabled = false;" type="radio" name = "radiobutton" value="FEN">ФЕН
                       <select name="speciality" id="charstype" disabled="disabled">
                           <option value = "EconomTheory">Економічна теорія</option>
                           <option value = "Finance">Фінанси і кредит</option>
                       </select>

                </div>
           </div>
       
       <div class="form-group">
           <label class="col-sm-4 control-label" for="email1">Email</label>
           <div class="col-sm-5">
               <input type="text" class="form-control" id="email1" name="email1" placeholder="Email" >
           </div>
           
           
       </div>
       <div class="form-group">
               <label class="col-sm-4 control-label" for="phone">Номер телефону</label>
               <div class="col-sm-5">
                   <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" >
               </div>
               
               
           </div>
       <div class="form-group">
           <label class="col-sm-4 control-label" for="password1">Пароль</label>
           <div class="col-sm-5">
               <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" value = " ">
           </div>
       </div>
       <div class="form-group">
           <label class="col-sm-4 control-label" for="confirm_password1">Підтвердити пароль</label>
           <div class="col-sm-5">
               <input type="password" class="form-control" id="confirm_password1" name="confirm_password1" placeholder="Confirm password" >
           </div>
       </div>







       <div class="form-group">
           <div class="col-sm-5 col-sm-offset-4">
               <div class="checkbox">
                   <label>
                       <input type="checkbox" id="agree1" name="agree1" value="agree"/>Згода з правилами сайту
                   </label>
               </div>
           </div>
       </div>
       <div class="form-group">
           <div class="col-sm-9 col-sm-offset-4">
               <button type="submit" class="btn btn-primary" >Зареєструватися</button>
               <button type="reset" class="btn btn-danger" name="reset" value="reset">Очистити</button>
           </div>
       </div>
   </form>

</div>'; */
    
        $username = $_GET['username1'];
        $firstname =$_GET['firstname1'];
        $lastname = $_GET['lastname1'];
        $phone = $_GET['phone'];
        $email = $_GET['email1'];
        $password = $_GET['password1'];
        $faculty = $_GET['radiobutton'];
        $speciality = $_GET['speciality'];
        print_r($_GET);
        if (isset($username) && isset($firstname) && isset($lastname) && isset($password) && isset($phone) && isset($email) && isset($faculty) && isset($speciality)) {
        $valueuserprofile = $username . "/" . $firstname . "/" . $lastname . "/" . $phone . "/" . $email . "/" . $password . "/" . $faculty . "/" . $speciality;
        $keyuserprofile = "profile:" . $username;
        $keyuserlogin = "login:" + $username;
        $valueuserlogin = $password;
        $redis->set($keyuserprofile, $valueuserprofile);
        $redis->set($keyuserlogin, $valueuserlogin);
        print($valueuserprofile);
        };
     ?>