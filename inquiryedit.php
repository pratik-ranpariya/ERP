<?php
session_start();
error_reporting(0);
include('config.php');
 if(empty($_SESSION['username']))
{
     header('Location:'.URL);
} 
$id=$_REQUEST['no'];
$pa=mysqli_query($conn,"select * from `inquiry` where no='$id'");
$df=mysqli_fetch_array($pa);
// print_r($df);

if(isset($_REQUEST['submit'])){
  print_r($df);
  die;
  extract($_REQUEST);
  
  mysqli_query($conn,"update `inquiry` set name='$name',address='$address',city='$city',email='$email',mobile='$mobile',gender='$gender',qualification='$qualification',course='$course' where no=$id");

  header('location:'.SITE_URL.'inquiry.php');
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

  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
 
  </head>

  <body id="mimin" class="dashboard">
    <!-- start: Header -->
    <?php include('header.php'); ?>
    <!-- end: Header -->

    <div class="container-fluid mimin-wrapper">

      <?php include('leftmenu.php') ?>


      <!-- start: Content -->
      <div id="content">
        <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
              <h3 class="animated fadeInLeft">Inquiry Edit-Form</h3>
              <p class="animated fadeInDown">
                Form <span class="fa-angle-right fa"></span> Edit Form
              </p>
            </div>
          </div>
        </div>
        <div class="form-element">
          <div class="col-md-12 padding-0">
            <div class="col-md-8">
              <div class="panel form-element-padding">
                <div class="panel-heading">
                 <h4>Basic Element</h4>
               </div>
               <form action="" method="POST">
                 <div class="panel-body" style="padding-bottom:30px;">
                  <div class="col-md-12">
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Name</label>
                      <div class="col-sm-10"><input type="text" name="name" class="form-control" value="<?php echo $df['name'];?>"></div><br>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Address</label>
                      <div class="col-sm-10"><input type="text" name="address" class="form-control border-left" value="<?php echo $df['address'];?>"></div>
                    </div><br>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">City</label>
                      <div class="col-sm-10"><input type="text" name="city" class="form-control android" value="<?php echo $df['city'];?>"></div>
                    </div><br>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Email</label>
                      <div class="col-sm-10"><input type="text" name="email" class="form-control" value="<?php echo $df['email'];?>"></div>
                    </div><br>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Mobile</label>
                      <div class="col-sm-10"><input type="text" name="mobile" class="form-control" placeholder="Textbox" value="<?php echo $df['mobile'];?>"></div>
                    </div><br>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Mobile 2</label>
                      <div class="col-sm-10"><input type="text" name="mobile2" class="form-control" placeholder="Textbox" value="<?php echo $df['mobile2'];?>"></div>
                    </div><br>

                    <div class="form-group"><label class="col-sm-2 control-label text-right">Comment</label>
                      <div class="col-sm-10"><input type="text" name="comment" class="form-control" value="<?php echo $df['comment'];?>"></div>
                    </div><br>
                    <div class="form-group"><label class="col-sm-2 control-label text-right">Counseler</label>
                      <div class="col-sm-10"><input type="text" name="counseler" class="form-control" placeholder="Textbox" value="<?php echo $df['counseler'];?>"></div>
                    </div><br>
                    <div class="form-group"><label class="col-sm-2 control-label text-right"> Follow UP</label>
                      <div class="col-sm-10"><input type="text" name="followup" class="form-control mask-placeholder" placeholder="Textbox" value="<?php echo $df['followup'];?>"></div>
                    </div><br>

                    <div class="form-group">
                      <label class="col-sm-2 control-label text-right" for="email">Gender:</label>
                      <div class="col-sm-10">
                        <select name="gender" class="form-control" >
                          <option value="<?php echo $df['gender'];?>"></option>
                          <option > Female</option> 
                          <option >Male</option>
                          <option >Other</option>
                        </select></div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label text-right" > Qualification </label>
                        <div class="col-sm-10">
                          <select name='qualification' value="<?php echo $df['course'];?>" class="form-control">
                            <option  disabled selected>Qualification</option>
                            <option>Inquiry</option>
                            <option>Other Information</option>
                            <option>Interview</option>
                            <option>Visit</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group"><label  class="col-sm-2 control-label text-right">Select Option</label>
                        <div class="col-sm-10"> 
                        <select name="course" value="<?php echo $df['course'];?>" class="form-control">
                          <option disabled selected>Course</option>
                          <option>Inquiry</option>
                          <option>Other Information</option>
                          <option>Interview</option>
                          <option>Visit</option>
                        </select><br>

                        <button type="submit" name="submit" class="btn btn-primary">update</button>
                      </div>
                    </div>
                  </div>
                </div>
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

      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <!-- plugins -->
      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/jquery.knob.js"></script>
      <script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
      <script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
      <script src="asset/js/plugins/jquery.nicescroll.js"></script>
      <script src="asset/js/plugins/jquery.mask.min.js"></script>
      <script src="asset/js/plugins/select2.full.min.js"></script>
      <script src="asset/js/plugins/nouislider.min.js"></script>
      <script src="asset/js/plugins/jquery.validate.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>

      </script>
  <!-- end: Javascript -->
  <script type="text/javascript">
  $(document).ready(function(){

    $('.mask-placeholder').mask("00/00/0000");

  });
</script>

    </body>
    </html>
