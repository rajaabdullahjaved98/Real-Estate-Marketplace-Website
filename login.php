<?php
session_start();
  if(isset($_SESSION['Site1'])){
    header("Location: login-index.php");
  }

?>


<!DOCTYPE html>
<html>
<head>
    <title>User Login | Bahria Town</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
  <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
  </head>
  <body>
    <div>
      <?php
      if(isset($_POST['create'])){
          echo 'User Submitted';
      }
      ?>

          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
      <div class="limiter">
        <div class="container-login100" style="background-image: url('images/Bg-login.jpg'); background-repeat: no-repeat; background-position: center; position: relative; background-size: cover;">
          <div class="wrap-login100">
              <form class="login100-form validate-form" action="registration.php" method="post" >
                 <span class="login100-form-title p-b-48">
                     <img src="images/bahria-logo.png" width="350" height="200" style="padding-right: 50px;">
                  </span>
                  <div class="wrap-input100 validate-input">  
                    <h1>Login <br> <br> </h1>
                    <h4>For Admins Only <br> <br> </h4>
                      <div>
                        <label for="username-admin"><b>UserName</b></label>  
                        <input class="form-control" id= "username-admin"  type="text" name="username-admin">
                      </div> 
                      <div>
                        <label for="password-admin"><b>Password</b></label>  
                        <input class="form-control" id= "password-admin"  type="password" name="password-admin">
                      </div>
                      <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn" ></div>
                    <button class="login100-form-btn"type="button" id="login-admin" name="button">
                       Login
                    </button>
                </div>
            </div>
              </div>
              </form>


          </div>

          <div class="wrap-login100">
              <form class="login100-form validate-form" action="registration.php" method="post" >
                 <span class="login100-form-title p-b-48">
                     <img src="images/bahria-logo.png" width="350" height="200" style="padding-right: 50px;">
                  </span>
                  <div class="wrap-input100 validate-input">  
                    <h1>Login <br> <br> </h1>
                      <h4>For Customers Only <br> <br> </h4>
                      <div>
                        <label for="username-customer"><b>UserName</b></label>  
                        <input class="form-control" id= "username-customer"  type="text" name="username-customer">
                      </div> 
                      <div>
                        <label for="password-customer"><b>Password</b></label>  
                        <input class="form-control" id= "password-customer"  type="password" name="password-customer">
                      </div>
                      <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn" ></div>
                    <button class="login100-form-btn"type="button" id="login-customer" name="button">
                       Login
                    </button>
                </div>
            </div>
            <div class="text-center p-t-115">
                <span class="txt1">
                  Don’t have an account?
                </span>
    
                <a class="txt2" href="/Real Estate/registration.php">
                  Sign Up
                </a>
                    </div>  
              </div>
              </form>
      </div>
      
    
      <div id="dropDownSelect1"></div>
      
    <!--===============================================================================================-->
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
      <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
      <script src="vendor/bootstrap/js/popper.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
      <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
      <script src="vendor/daterangepicker/moment.min.js"></script>
      <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
      <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
      <script src="js/main.js"></script>
      <script>
        $(function(){
          $('#login-admin').click(function(e){
            
            var valid = this.form.checkValidity();

            if(valid){
                var username_admin = $('#username-admin').val();
                var password_admin = $('#password-admin').val();

            }

              e.preventDefault();

              $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {username_admin: username_admin, password_admin: password_admin},
                success: function(data){
                  alert(data);
                  if($.trim(data) === "Login Successful"){
                    setTimeout(' window.location.href = "login-index.php"', 2000);
                  }
                },
                error: function(data){
                  alert('error');
                }
              });
          });
        });
</script> 

<script>
        $(function(){
          $('#login-customer').click(function(e){
            
            var valid = this.form.checkValidity();

            if(valid){
                var username_customer = $('#username-customer').val();
                var password_customer = $('#password-customer').val();

            }

              e.preventDefault();

              $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {username_customer: username_customer, password_customer: password_customer},
                success: function(data){
                  alert(data);
                  if($.trim(data) === "Login Successful"){
                    setTimeout(' window.location.href = "login-index.php"', 2000);
                  }
                },
                error: function(data){
                  alert('error');
                }
              });
          });
        });
</script> 

<script>
      //document.addEventListener("contextmenu", function(event){
      //event.preventDefault();
      //alert('Right Click is Disabled');    
      //}, false);
    </script>         
</body></html>