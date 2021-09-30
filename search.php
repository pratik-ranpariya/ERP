<?php
session_start();
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
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:20px;">
              <div class="col-md-12 col-sm-12 col-xs-12 mail-wrapper">
                    
                  <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
                      <div class="col-md-3 col-sm-12 col-xs-12 mail-left">
                <div class="col-md-10  col-sm-10 col-xs-10 padding-0">
                     <div class="input-group searchbox-v1">
<!--                       <span class="input-group-addon box-shadow-none" id="basic-addon1">
                        <span class="fa fa-search"></span>
                      </span> -->
                     <!--  <input type="text" class="txtsearch border-none box-shadow-none" placeholder="Search Email..." aria-describedby="basic-addon1"> -->
<!-- <?php
      error_reporting(0);
      if(isset($_POST['submit']))
      {

        // connect to mysql
       

        // id to search
        $id = $_POST['name'];

        // mysql search query
        $query = "SELECT * FROM `admission` WHERE `name` LIKE = $id%";

        $result = mysqli_query($conn, $query);

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
        echo "name Not Found";
        $image = "";

      }

      @mysqli_free_result($result);
      mysqli_close($conn);

    }

    // in the first time inputs are empty
    else{
    $image = "";
  }

                          ?> -->
                          <form method="post">
              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    
                    <div class="form-group form-animate-text">
                      <input type="text" name="search" class="form-text" required>
                      <span class="bar"></span>

                      <label class="label-search">Search With <b>Name</b> </label>
              <!--         <span name="submit" class="fa fa-search icon-search"  style="font-size:23px;"></span> -->
                    </div>
                  </div>
                </li>
              </ul></form><br><br><br>

    <!-- [SEARCH FORM] -->
<!--      <form method="post">
      <h5>
        SEARCH WITH NAME
      </h5>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
    </form> -->



    <!-- [SEARCH RESULTS] -->
    <div id="results"></div>
                        
                                                        <?php
                              if (isset($_POST['search'])) {
  require "3-search.php";
}
    if (isset($_POST['search'])) {
      if (count($results) > 0) {
        foreach ($results as $r)
         {
          
?><br>
                          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr class="btn-primary">
                          <th>Name</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Mobile 2</th>
                          <th>Gender</th>
                          <th>Birthday</th>
                          <th>Qualification</th>
                          <th>Course</th> 
                          <th>Image</th>                                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $r['name'];?></td>
                          <td><?php echo $r['address'];?></td>
                          <td><?php echo $r['city'];?></td>
                          <td><?php echo $r['email'];?></td>
                          <td><?php echo $r['mobile'];?></td>
                           <td><?php echo $r['mobilenumber'];?></td>
                          <td><?php echo $r['gender'];?></td>
                          <td><?php echo $r['birthday'];?></td>
                          <td><?php echo $r['qualification'];?></td>
                          <td><?php echo $r['course'];?></td>
                          <td><img src ="admissionimage/<?php echo $r['image'];?>" height="150" weight="150"></td>
                        </tr>
                        
                      </tbody>
                        </table>
                      <?php
                              }
      } else {
        echo "<br><h3>No results found</h3>";
      }
    }
    ?> 
                    </div>
              <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                </div>
            </div>
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
    <script>
      function fetch() {
        // GET SEARCH TERM
        var data = new FormData();
        data.append('search', document.getElementById("search").value);
        data.append('ajax', 1);

        // AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', "3-search.php", true);
        xhr.onload = function () {
          if (xhr.status==403 || xhr.status==404) {
            alert("ERROR LOADING FILE!");
          } else {
            var results = JSON.parse(this.response),
                wrapper = document.getElementById("results");
            wrapper.innerHTML = "";
            if (results.length > 0) {
              for(var res of results) {
                var line = document.createElement("div");
                line.innerHTML = res['name'] + " - " + res['email']+ " - " + res['mobile']+ " - " + res['gender']+ " - " + res['city']+ " - " + res['course'];
                wrapper.appendChild(line);
              }
            } else {
              wrapper.innerHTML = "No results found";
            }
          }
        };
        xhr.send(data);
        return false;
      }
    </script> 
</body>
</html>
