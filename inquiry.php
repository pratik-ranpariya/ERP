<?php
session_start();
// error_reporting(0);
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
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/sweetalert.min.css">
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
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
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="animated fadeInLeft">INQUIRY</h1>
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
                          <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Click To Insert</button><br><br>
                      <div class="responsive-table">
						<?php
						if(isset($_REQUEST['no'])){
						  $id=$_REQUEST['no'];
						  mysqli_query($conn,"delete  from  `inquiry` where no='$id' ");
						}
						   extract($_POST);
						?>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Mobile 2</th>
                          <th>Gender</th>
                          <th>Qualification</th>
                          <th>Course</th>
                          <th>Comment</th>
                          <th>Counseler</th>
                          <th>Follow Up</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
				            <?php
				            $sql = "SELECT * FROM inquiry";
				            $result = mysqli_query($conn, $sql);  
				              $number = 1;
				              while ($row = @mysqli_fetch_array($result)) {
				            ?> 
                        <tr>
                          <td><?php echo $number ?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['address'];?></td>
                          <td><?php echo $row['city'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['mobile'];?></td>
                          <td><?php echo $row['mobile2'];?></td>
                          <td><?php echo $row['gender'];?></td>
                          <td><?php echo $row['qualification'];?></td>
                          <td><?php echo $row['course'];?></td>
                          <td><?php echo $row['comment'];?></td>
                          <td><?php echo $row['counseler'];?></td>
                          <td><?php echo $row['followup'];?></td>
                          <td><a href="<?php echo SITE_URL;?>inquiryedit.php?no=<?php echo $row['no'];?>"><button type="submit" class="btn btn-primary"><span class="icons icon-pencil"></span></button></a><a href="<?php echo SITE_URL;?>inquiry.php?no=<?php echo $row['no'];?>"> <button  type="submit"  class="btn btn-danger"><span class="fa fa-trash"></span></button></a></td>
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

                <!-- Pagination -->
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12">
          <!-- Pagination -->
          <div class="pagination-container margin-top-30 margin-bottom-60">
            <nav class="pagination">
              <?php echo $paginationCtrls; ?>
            </nav>
          </div>
        </div>
      </div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">

        <form id="login-form" action="backend.php?service=inquiry" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" name="name" cols="10" placeholder="Enter Category" class="form-control">
          </div>

          <div class="form-group">
            <label for="email">Address:</label>
            <input type="text" name="address" cols="10" placeholder="Enter Category" class="form-control">
          </div>

                    <div class="form-group">
            <label for="email">City:</label>
            <input type="text" name="city" cols="10" placeholder="Enter Category" class="form-control">
          </div>

                    <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" cols="10" placeholder="Enter Category" class="form-control">
          </div>
                 <div class="form-group">
            <label for="email">Mobile:</label>
            <a href="javascript:;" onclick="phone_btn_onclick();" class="forgot-password">
            <input type="text" name="mobile" cols="10" id="forget-mobile-no" placeholder="Enter Category" class="form-control">
          </a>
          </div>

          <div class="form-group">
            <label for="email">Gender:</label>
            <select name="gender" class="form-control">
              <option value="gender" disabled selected>Gender</option>
              <option > Female</option>
              <option >Male</option>
              <option >Other</option>
              </select>
          </div>

          <div class="form-group">
            <label  style="width:100%;"> Qualification </label>
            <select name='qualification' class="form-control">
              <option  disabled selected>Qualification</option>
             <option>Inquiry</option>
             <option>Other Information</option>
             <option>Interview</option>
             <option>Visit</option>
           </select>
         </div>

        <div class="form-group">
            <label  style="width:100%;"> Course </label>
            <select name='course' class="form-control">
              <option  disabled selected>Course</option>
             <option>Inquiry</option>
             <option>Other Information</option>
             <option>Interview</option>
             <option>Visit</option>
           </select>
         </div>

                                       <div class="form-group">
            <label for="followup">Follow UP:</label>
            <input type="text" name="followup" cols="10" placeholder="Enter Category" class="form-control mask-placeholder">
          </div>

                              <div class="form-group">
            <label for="mobile2">Mobile 2:</label>
            <input type="text" name="mobile2" cols="10" placeholder="Enter Category" class="form-control">
          </div>

                              <div class="form-group">
            <label for="email">Comments:</label>
            <input type="text" name="comment" cols="1000" placeholder="Enter Category" class="form-control">
          </div>

                              <div class="form-group">
            <label for="email">Counseler:</label>
            <input type="text" name="counseler" cols="10" placeholder="Enter Category" class="form-control" required>
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
  


<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
     <script src="asset/js/main.js"></script>
     

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->

<script type="text/javascript">

  function archiveFunction(id) {
  event.preventDefault(); // prevent form submit
  var form = event.target.form; // storing the form
          swal({
    title: "Are you sure?",
    text: "are you sure you want to delete this id.",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes continue !",
    cancelButtonText: "No, cancel please!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      swal("Good job!", "Id Is Deleted!", "success");
      $.ajax({
      url: '<?php echo SITE_URL;?>inquiry.php?no',
      type: 'POST',
      success: function(results){
        console.log("results::",results);
            location.reload(); // then reload the page.(3)
      }
    }); 
    } else {
      swal("Cancelled", "Request Cancelled!", "error");
    }
  });
  } 

</script>
  <!-- end: Javascript -->
  <script type="text/javascript">
  $(document).ready(function(){

    $('.mask-placeholder').mask("00/00/0000");

  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<?php include('fbaccountkit.php');  ?>

  </body>
</html>
