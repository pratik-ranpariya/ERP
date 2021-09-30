   <?php
error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:'.URL);
}
?>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                                      <li class="ripple">
                      <a href="dashboard.php" class="nav-header">
                       <span class="fa fa-check-square-o"></span>Dashboard
                       <span class="fa-angle-right fa right-arrow"></span>
                      </a>
                    </li>
                    <li class="ripple">
                      <a href="index.php" class="nav-header">
                       <span class="fa fa-check-square-o"></span>Visiter
                       <span class="fa-angle-right fa right-arrow"></span>
                      </a>
                    </li>
                    <li class="ripple">
                      <a href="inquiry.php" class="nav-header">
                       <span class="fa fa-check-square-o"></span>Inquiry
                       <span class="fa-angle-right fa right-arrow"></span>
                      </a>
                    </li>
 <!--                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Follow Up
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li> -->
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Admission
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="adinquiry.php">Already In Inquiry</a></li>
                        <li><a href="Admission.php">New Admission</a></li>
                        <li><a href="search.php">Search</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="certificate.php" class="nav-header">
                       <span class="fa fa-check-square-o"></span>Certificate
                       <span class="fa-angle-right fa right-arrow"></span>
                      </a>
                    </li>
                    <li class="ripple">
                      <a href="feereceipt.php" class="nav-header">
                        <span class="fa fa-odnoklassniki"></span> Fees  
                        <span class="fa-angle-right fa right-arrow text-right"></span> 
                      </a>
                    </li>
                  </ul>
            </div>
        </div>       
      </div>