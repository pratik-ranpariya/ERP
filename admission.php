<?php
session_start();
//error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:'.URL);
}
$course=@mysqli_query($conn,"select DISTINCT name from `course`");
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
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard">

<?php include('header.php'); ?>

      <div class="container-fluid mimin-wrapper">
  
<?php include('leftmenu.php'); ?>


          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">ADMISSION FORM</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                    </div>
                  </div>
                </div>

              <div class="col-md-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h4>Mask</h4>
                  </div>
                  <div class="col-md-12 panel-body">
                    <form action="backend.php?service=admission" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                     <div class="col-md-6">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="name" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Full Name</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="city" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>City</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="mobile" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Mobile</label>
                      </div>

                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="mobilenumber" value="Mobile 2" class="form-text mask-text" />
                        <span class="bar"></span>
                        <label></label>
                      </div>

                       <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="birthday" class="form-text mask-placeholder" required>
                        <span class="bar"></span>
                        <label>birthday</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="enrollment" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Enrollment</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="discount" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Discount</label>
                      </div>



                    </div>
                    <div class="col-md-6">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="address" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Address</label>
                      </div>


                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="email" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Email</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="gender" class="form-text mask-text" required >
                          <option value=""> Gender</option>
                          <option > Female</option> 
                          <option >Male</option>
                          <option >Other</option>
                        </select>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="course" class="form-text mask-text" required >
                          <option value=""> Course</option>
                          <?php while ($row = mysqli_fetch_array($course)) { ?>
                          <option value="<?php echo $row['name'] ?>"> <?php echo $row['name'] ?></option> 
                          <?php }  ?>
                        </select>
                      </div>

                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <select name="qualification" class="form-text mask-text" required >
                          <option value=""> Qualification</option>
                          <option > 10th</option> 
                          <option >12th</option>
                          <option >Graducation</option>
                        </select>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="totalfee" class="form-text mask-text" required>
                        <span class="bar"></span>
                        <label>Total Fees</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="file" name="file" id="upload" class="form-text mask-text" required>
                        <span class="bar"></span>
                      </div>

                    </div>
                      <div class="col-md-12">
                        <input class="submit btn btn-danger" type="submit" name="submit" value="Submit">
                      </div>
                  </div>

                </form>
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

             <script type="text/javascript">
  $(document).ready(function(){

    $('.mask-placeholder').mask("00/00/0000");

  });
</script>
<!-- custom -->
<script src="asset/js/main.js"></script>

</body>
</html>