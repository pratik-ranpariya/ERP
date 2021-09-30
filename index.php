<?php
session_start();
//error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techradix</title>

 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/sweetalert.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
	<link href="asset/css/style.css" rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href="asset/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
<?php include('header.php'); ?>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <?php include('leftmenu.php') ?>


<!-- start: Content -->
            <div id="content">
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="animated fadeInLeft">VISITER</h1>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> TECHRADIX,SURAT</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Surat, Gujarat</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">
                                
                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">
                                
                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div>
                        </div>                   
                    </div>

                    <div class="panel-body">
                          <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal">
     Click To Insert
    </button><br><br>
                      <div class="responsive-table">
<?php

if(isset($_REQUEST['no'])){
  $id=$_REQUEST['no'];
  mysqli_query($conn,"delete  from  `visiter` where no='$id' ");
}
   extract($_POST);
?>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>mobile</th>
                          <th>purpose</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                                    <?php
            
            $sql = "SELECT * FROM visiter";
            $result = mysqli_query($conn, $sql);
              $number = 1;
              while ($row = @mysqli_fetch_array($result)) {
            ?> 
                        <tr>
                          <td><?php echo $number ?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['mobile'];?></td>
                          <td><?php echo $row['purpose'];?></td>
                          <td><?php echo date_format(date_create($row['dates']), 'd M, Y');?></td>
                          <td><a href="<?php SITE_URL ?>index.php?no=<?php echo $row['no'];?>">                                          
                            <div style="margin-top:5px;">
                                   <button type="submit" class="btn ripple-infinite btn-round btn-danger">
                                    <div>
                                      <span class="fa fa-trash"></span>
                                    </div>
                                  </button>
                              </div>
                            </a>
                            </td>
                        </tr>
                       <?php  $number++;} ?>
                      </tbody>
                       
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>

          <!-- end: content -->

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Visiter Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <form id="login-form" action="backend.php?service=visiter" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" name="name" cols="10" placeholder="Enter Category" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="email">Mobile:</label>
            <a href="javascript:;" onclick="phone_btn_onclick();" class="forgot-password">
          <input type="text" name="mobile" id="forget-mobile-no" cols="15" placeholder="Enter Category" class="form-control" required>
          </a>
          </div>


          <div class="form-group">
            <label  style="width:100%;"> Purpose </label>
            <select name='purpose' class="form-control" required>
              <option disabled selected>Purpose</option>
             <option>Inquiry</option>
             <option>Other Information</option>
             <option>Interview</option>
             <option>Visit</option>
           </select>
         </div>

          <button form="login-form" name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>

</div>
  </div>

</div>


<?php include('mobileleftmenu.php') ?>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->
<script src="jquery-3.0.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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

    
  // login callback
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
    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/fullcalendar.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>

     <script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
 



    
  </body>
</html>