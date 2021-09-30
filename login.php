<?php include('config.php');  ?><!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techradix</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="asset/css/sweetalert.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">

    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form action="backend.php?service=login" class="form-signin" method="POST" id="Login">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Mi</h1>
                  <p class="atomic-mass"></p>
                  <p class="element-name">Techradix</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <input type="submit" name="submit1" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                 <a href="javascript:;" onclick="phone_btn_onclick();">Forgot Password</a>
                    <!-- <a href="#id01" class="forgot-password"> </a> -->
                    <a onclick="document.getElementById('id01').style.display='block'"  class="forgot-password"></a>

                </div>
          </div>
        </form>

      </div>
  <!-- jdbfkdsfjdbsfksjd -->
  <div id="id01" class="w3-modal">
          <form id="login-form" class="form-signin" action="backend.php?service=forgetPassword" method="post">
          <div class="panel ">
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">Mi</h1>
                  <p class="element-name">Techradix</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>New Username</label>
                  </div>
                  
                  <input type="text" name="mobile" value="" id="forget-mobile-no" class="form-text">
                
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>New Password</label>
                  </div>
                  <input form="login-form" type="submit" name="submit" class="btn col-md-12"/>
              </div>
          </div>
        </form>
      </div>
      <!-- start: Javascript -->
      <!-- <script src="asset/js/jquery.min.js"></script> -->
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>
      <script src="asset/js/sweetalert.min.js"></script>
      <!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> -->
      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script src="asset/js/sweetalert.min.js"></script>
      <script type="text/javascript">


  </script>

      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->

<script src="jquery-3.0.0.min.js"></script>
<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<script type="text/javascript">

    AccountKit_OnInteractive = function(){
    AccountKit.init(
      {
        appId:"376047550011699", 
        state:"abcd", 
        version:"v1.1",
        fbAppEventsEnabled:true
      }
    );
  };

    function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
      var code = response.code;
      var csrf = response.state;
        console.log(" code ::::::::::: ", code);
        
        $.post("http://localhost/erp/verify.php", { code : code, csrf : csrf }, function(result){
            console.log("result :::::::::::::: ", result);
            result = JSON.parse(result);
            console.log("result :::::::::::::: ", result, result.national_number);

            if(typeof result.phone.national_number != 'undefined'){

              $('#forget-mobile-no').val(result.phone.national_number);
              $('.forgot-password').trigger('click');

            }else{
              swal("Oops!", "System Error");
            }
        });
        
    }
    else if (response.status === "NOT_AUTHENTICATED") {
      // handle authentication failure
      swal("Oops!", "Contact Details Not Authenticate!");
    }
    else if (response.status === "BAD_PARAMS") {
      // handle bad parameters
      swal("Oops!", "Contact Details Not Authenticate!");   
    }
  }
    
    
  function phone_btn_onclick() {
    // you can add countryCode and phoneNumber to set values
    AccountKit.login('PHONE', {}, // will use default values if this is not specified
      loginCallback);
  }
</script> 
   </body>
   </html>