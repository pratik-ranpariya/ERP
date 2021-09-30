<?php
date_default_timezone_set('Asia/Kolkata');

 // define('ENCR', '5d05e40c518e6ee109b8afa79eba7db5');
 // define('IV', '567c996739edfa1cdbad4c55a80580df');

  //define("SITE_URL", "http://dailyneeds.co.nz");
  define("SITE_URL", "http://localhost/techradix/techradix/");

// define('URL', 'http://admin.dailyneeds.co.nz');
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'dailyneeds@2019');
// define('DB_DATABASE', 'dailyneeds');

define('URL', 'http://localhost/techradix/techradix/login.php');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'techradix');

 $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

 // Check connection
// if (mysqli_connect_errno()){
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }


?>