<?php
session_start();
// error_reporting(0);
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

$poo=mysqli_query($conn,"select * from `course`");
$row=@mysqli_num_rows($poo);

//<!-- End Chart Data -->
 $and = 'AND YEAR(dates) = '.$year;
 $months = array();
 $fee = array();
    for( $m = 1; $m <= 12; $m++ ) {
    $sqls = "SELECT sum(payamount) as total FROM fee where MONTH(dates)='$m' AND YEAR(dates) = '$year'";
        $rquery = $conn->query($sqls);
    array_push($fee, $rquery->num_rows);


    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }
    $fee = json_encode($fee);
  


// $result = mysqli_query($conn, $sqls);
// $data['pay'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['total'];
// $totalAmounts = $data['pay'];

//     $sql = "SELECT sum(payamount) as totals FROM fee ";
//     $rquery = $conn->query($sql);
//     $data['pays'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['totals'];
// $totalAmounts = $data['pays'];

//     $sqls = "SELECT sum(payamount) as total FROM fee WHERE enrollment='$id'";
// $result = mysqli_query($conn, $sqls);
// $data['pay'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['total'];
// $totalAmount = $data['pay'];
?>
<?php 
 // include 'scriptcharts/scripts.php';
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

                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">

                                <div class="col-md-3 ">
                                    <div class="panel box-v1 btn-danger">
                                      <div class="panel-heading bg-white border-none btn-danger">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0 ">
                                          <h4 class="text-left">Visit</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>8</h1>
                                        <p>Teachers</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                                                
                                  <div class="col-md-3">
                                    <div class="panel box-v1 btn-primary">
                                      <div class="panel-heading bg-white border-none btn-primary">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Visit</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icons icon-notebook text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1><?php echo $row;?></h1>
                                        <p>Course</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                                                
                                  <div class="col-md-3">
                                    <div class="panel box-v1 bg-amber">
                                      <div class="panel-heading bg-white border-none bg-amber">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left text-white">Visit</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right text-white"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center text-white">
                                        <h1>47</h1>
                                        <p>Students</p>
                                        <hr class="btn-white" />
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="panel box-v1 btn-success">
                                      <div class="panel-heading bg-white border-none btn-success">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Visit</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <!-- <h1><?php echo $fee ?></h1> -->
                                        <h1>0</h1>
                                        <p>Collect fee</p>
                                        <hr/>
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
  


<!-- <script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script> -->
  
    <!-- <script src="asset/js/plugins/chart.js/Chart.js"></script> -->

    <!-- custom -->
     <script src="asset/js/main.js"></script>
     
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



<div class="row">
        <div class="col-xs-8">
          <div class="box">
            <div class="box-header with-border">
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Select Year: </label>
                    <select class="form-control input-sm" id="select_year">
                      <?php
                        for($i=2015; $i<=2065; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="panel">
                  <div class="panel-heading-white panel-heading">
                    <h4>Monthly Report </h4>
                      </div>
                      <div class="panel-body">
                          <div id="legend" class="col-md-12">
                            <canvas id="lineChart" class="line-chart"></canvas>
                          </div>
                      </div>
                  </div>
                </div>
              </div>

               <div class="container-fluid mimin-wrapper">
  
          
<!-- start: Content -->
            
              <div class="col-md-4 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading-white panel-heading">
                
                      <button type="button" class="btn btn-primary text-white pull-right" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus-square"></i> Click To Insert</button>
                        <h4>Course </h4></div>
                        <div class="panel-heading">
                      <div class="responsive-table">
                      <?php
                      if(isset($_REQUEST['no'])){
                        $id=$_REQUEST['no'];
                        mysqli_query($conn,"delete  from  `course` where no='$id' ");
                      }
                         extract($_POST);
                      ?>
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                                    <?php    
            $sql = "SELECT * FROM course";
            $result = mysqli_query($conn, $sql);
              $number = 1;
              while ($row = @mysqli_fetch_array($result)) {
            ?> 
                        <tr>
                          <td><?php echo $number ?></td>
                          <td><?php echo $row['name'];?></td>
                          
                          <td><a href="<?php echo SITE_URL;?>dashboard.php?no=<?php echo $row['no'];?>">                                    <button type="submit" class="btn ripple-infinite btn-round btn-danger">
                                    <div>
                                      <span class="fa fa-trash"></span>
                                    </div>
                                  </button></a></td>
                        </tr>
                        <?php  $number++;} ?>
                      </tbody>
                        </table>
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

      <!-- Modal body -->
      <div class="modal-body">

        <form id="login-form" action="backend.php?service=course" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" name="name" cols="10" placeholder="Enter New Course Name" class="form-control">
          </div>

          <button form="login-form" name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>

</div>
  </div>

</div>
            </div>

    <?php
  $and = 'AND YEAR(date) = '.$year;
  $months = array();
  $admission = array();
  $inquiry = array();
  $visiter = array();
  for( $m = 1; $m <= 12; $m++ ) {
    $sql = "SELECT * FROM admission WHERE MONTH(dates) = '$m' AND YEAR(dates) = '$year'";
    $rquery = $conn->query($sql);
    array_push($admission, $rquery->num_rows);

    $sql = "SELECT * FROM visiter WHERE MONTH(dates) = '$m' AND YEAR(dates) = '$year'";
    $rquery = $conn->query($sql);
    array_push($visiter, $rquery->num_rows);

    $sql = "SELECT * FROM inquiry WHERE MONTH(dates) = '$m' AND YEAR(dates) = '$year'";
    $bquery = $conn->query($sql);
    array_push($inquiry, $bquery->num_rows);

    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
  }

  $months = json_encode($months);
  $admission = json_encode($admission);
  $inquiry = json_encode($inquiry);
  $visiter = json_encode($visiter);

?>
  <script src="asset/js/plugins/chart.min.js"></script>
 <script type="text/javascript">
(function(jQuery){
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
  var lineChart = new Chart(lineChartCanvas)
             var lineChartData = {
            labels: <?php echo $months ?>,
            label:'visiter',
            datasets: [
                {
                    label               : 'visiter',
                    fillColor           : 'rgba(210, 214, 222, 1)',
                    strokeColor         : 'rgba(210, 214, 222, 1)',
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo $visiter; ?>
                },
                {
                    label               : 'inquiry',
                    fillColor           : 'rgba(210, 214, 222, 1)',
                    strokeColor         : 'rgba(210, 214, 222, 1)',
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo $inquiry; ?>
                },
                                {
                    label               : 'admission',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo $admission; ?>
                }
            ]
        }
  lineChartData.datasets[1].fillColor   = '#00a65a'
  lineChartData.datasets[1].strokeColor = '#00a65a'
  lineChartData.datasets[1].pointColor  = '#00a65a'

  var lineChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
  }

  lineChartOptions.datasetFill = false
  var myChart = lineChart.Bar(lineChartData, lineChartOptions)
  document.getElementById('legend').innerHTML = lineChart.generateLegend();
      
window.onload = function(){
                        var ctx3 = $(".line-chart")[0].getContext("2d");
                window.myChart = new Chart(ctx3).Line(lineChartData, {
                    responsive : true,
                    showTooltips: true
                });
           };
        })
(jQuery);
</script>
<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'dashboard.php?year='+$(this).val();
  });
});
</script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
