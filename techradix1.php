<?php
session_start();
error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:'.URL);
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
  </head>

 <body id="mimin" class="dashboard">
     <?php include('header.php'); ?>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <?php include('leftmenu.php') ?>

          <div id="content">
          	<div class="panel">
          			<div class="col-md-6 col-sm-12">
          																			<?php
															error_reporting(0);
															if(isset($_POST['submit']))
															{
																// id to search
																$id = $_POST['enrollment'];

																// connect to mysql
																$connect = mysqli_connect("localhost", "root", "","techradix");

																// mysql search query
																$query = "SELECT `image` FROM `certificate` WHERE `enrollment` = $id LIMIT 1";

																$result = mysqli_query($connect, $query);

																// if id exist 
																// show data in inputs
																if(@mysqli_num_rows($result) > 0)
																{
																	while ($row = mysqli_fetch_array($result))
																	{
																		$image = $row['image'];

																	}  
																}

																// if the id not exist
																// show a message and clear inputs
																else {
																echo "Enrollment Number Not Found";
																$image = "";

															}

															@mysqli_free_result($result);
															mysqli_close($connect);

														}

														// in the first time inputs are empty
														else{
														$image = "";
													}

													?>&nbsp;&nbsp;&nbsp;<br><br>
                            <form method="post">
                            	<img src="certificate/<?php echo $image;?>" height="350" width="350">
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
     

														