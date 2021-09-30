<?php
session_start();
error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:'.URL);
}
 $timezone = 'Asia/Manila';
  date_default_timezone_set($timezone);
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }

if(isset($_REQUEST['submit'])){
  extract($_REQUEST);
  
    $target_file = "certificate/".$_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
   $p=substr($target_file,3);
    $path="".$_FILES['image']['name'];
  
  mysqli_query($conn,"INSERT INTO certificate (enrollment, image) VALUES ('$enrollment','$path')");

header('Location:'.SITE_URL.'/certificate.php');

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
     <?php include('header.php'); ?>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <?php include('leftmenu.php') ?>

          <div id="content">
          	<div class="panel">
          			<div class="col-md-6 col-sm-12">
          				<form action="" method="post" enctype="multipart/form-data">

          					<div class="modal-body"><label><h1>CERTIFICATE</h1></label>

          						<label for="usr" style="width:100%;">Enrollment Number</label>
          						<input type="text" name="enrollment" class="form-control" value="" required>

          						<label for="usr" style="width:100%;">certificate</label>
          						<input type="file" name="image" class="form-control" value="" required>

          						<div class="modal-footer">
          							<button type="submit" name="submit" class="btn btn-default">submit</button>
          						</div>
                            </div>
          				</form>

                                
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
    <script src="asset/js/plugins/fullcalendar.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.min.js"></script>
    <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>

    <!-- custom -->
     <script src="asset/js/main.js"></script>
         
  </body>
</html>
