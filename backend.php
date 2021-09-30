<?php
session_start();
// error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:'.URL);
}
?>

<?php

if($_GET['service']){
	switch ($_GET['service']) {
		case 'visiter':
				visiter($conn);
			break;
		case 'inquiry':
				inquiry($conn);
			break;
		case 'forgetPassword':
				forgetPassword($conn);
			break;
		case 'admission':
				admission($conn);
			break;
		case 'login':
				login($conn);
			break;
		case 'course':
				course($conn);
			break;
		case 'feepayment':
				feepayment($conn);
			break;
		default:
			// code...
			break;
	}
}else{
	echo json_encode(array(), true);
}

function visiter($conn){


	if(isset($_REQUEST['submit'])){
	  extract($_REQUEST);
	  
	  mysqli_query($conn,"INSERT INTO visiter (name, mobile, purpose) VALUES ('$name','$mobile','$purpose')");
	   header('location:'.SITE_URL.'/index.php');
	}
}

function inquiry($conn){


	if(isset($_REQUEST['submit'])){
	  extract($_REQUEST);
	  // if value is empty than display data insert is N/A..
	  $isEmptey=$comment;
	  if($isEmptey==''){
	  	$isEmptey="N/A";
	  }
	  	  // if value is empty than display data insert is N/A..
	  $isEmpteys=$mobile2;
	  if($isEmpteys==''){
	  	$isEmpteys="N/A";
	  }
	  //close the data value..
	  mysqli_query($conn,"INSERT INTO inquiry (name,address,city,email,mobile,gender,qualification,course,followup,comment,counseler,mobile2) VALUES ('$name','$address','$city','$email','$mobile','$gender','$qualification','$course','$followup','$isEmptey','$counseler','$isEmpteys')");
	  header('location:'.SITE_URL.'/inquiry.php');
	}
}


function course($conn){

	if(isset($_REQUEST['submit'])){
	  extract($_REQUEST);
	  
	  mysqli_query($conn,"INSERT INTO course (name) VALUES ('$name')");
	   header('location:'.SITE_URL.'/dashboard.php');
	}
}

function admission($conn){
	if(isset($_FILES["file"]["type"]) || $_FILES["file"]["type"]==""){
		
		$validextensions = array(
			"jpeg",
			"jpg",
			"png",
			"JPG",
			"PNG"
		);
		$temporary = explode(".", $_FILES["file"]["name"]);

		$file_extension = end($temporary);
		

		if (($_FILES["file"]["size"] < 8000000) || $_FILES["file"]["size"]==0){
			$fileName = 'profile_'.time().'.'.$file_extension;
					$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
					$targetPath = "admissionimage/".$fileName; // Target path where file is to be stored
					move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file

					 // $name = mysqli_real_escape_string($conn, $_POST['name']);
					 // $address = mysqli_real_escape_string($conn, $_POST['address']);
					 // $city = mysqli_real_escape_string($conn, $_POST['city']);
					 // $email = mysqli_real_escape_string($conn, $_POST['email']);
					 // $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
					 // $gender = mysqli_real_escape_string($conn, $_POST['gender']);
					 // $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
					 // $course = mysqli_real_escape_string($conn, $_POST['course']);
					extract($_POST);

						  $isEmpteys=$mobilenumber;
						  if($isEmpteys=='Mobile 2'){
						  	$isEmpteys="N/A";
						  }

					$sql = "INSERT INTO admission (name,address,city,email,mobile,mobilenumber,gender,birthday,qualification,course,image,enrollment,totalfee,discount) VALUES ('$name','$address','$city','$email','$mobile','$isEmpteys','$gender','$birthday','$qualification','$course','$fileName','$enrollment','$totalfee','$discount')";
					mysqli_query($conn, $sql);
					echo json_encode(array('error' => 'N', 'msg' => 'Register Successfull', 'data' => $_POST), true);
					header('location:admission.php');

				}else
				{
					echo json_encode(array('error' => 'Y', 'msg' => 'Enable to Upload File Size Exceed', 'data' => $_POST), true);
				}
			}
		}

function forgetPassword($conn){

  $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile']);
  $mypassword = mysqli_real_escape_string($conn, $_POST['password']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
 
 $sql = "UPDATE login SET password='$mypassword', username='$username' WHERE mobile='$mobile_no'";
	    mysqli_query($conn, $sql);

    header('location:'.SITE_URL.'/login.php');
    echo json_encode(array('error' => 'N', 'msg' => 'Password Updated Sucessfully'), true);

  }

function feepayment($conn){


	if(isset($_REQUEST['submit'])){
	  extract($_REQUEST);
	  
	  mysqli_query($conn,"INSERT INTO fee (receiptid, installment, enrollment, paymentmode, payamount) VALUES ('$receiptid', '$installment', '$enrollment', '$paymentmode', '$payamount')");
	   header('location:'.SITE_URL.'/fee.php');
	}
}

function clientportfolio($conn){
	if(isset($_FILES["file"]["type"]) || $_FILES["file"]["type"]==""){
		
		$validextensions = array(
			"jpeg",
			"jpg",
			"png",
			"JPG",
			"PNG"
		);
		$temporary = explode(".", $_FILES["file"]["name"]);

		$file_extension = end($temporary);
		

		if (($_FILES["file"]["size"] < 8000000) || $_FILES["file"]["size"]==0){
			$fileName = 'profile_'.time().'.'.$file_extension;
					$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
					$targetPath = "../images/sweet/portfolio/client/".$fileName; // Target path where file is to be stored
					move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
					

					if($_POST['name'] == ''){
						echo json_encode(array('error' => 'Y', 'msg' => 'name not found on requested data', 'data' => $_POST), true);
						return true;
					}
					if($_POST['description'] == ''){
						echo json_encode(array('error' => 'Y', 'msg' => 'link not found on requested data', 'data' => $_POST), true);
						return true;
					}

					$name = mysqli_real_escape_string($conn, $_POST['name']);
					$description = mysqli_real_escape_string($conn, $_POST['description']);

					$sql = "INSERT INTO client_portfolio (name, description, image) VALUES ('$name','$description','$fileName')";
					mysqli_query($conn, $sql);
					header('location:'.SITE_URL.'/clientportfolio.php');
					echo json_encode(array('error' => 'N', 'msg' => 'Register Successfull', 'data' => $_POST), true);

				}else
				{
					echo json_encode(array('error' => 'Y', 'msg' => 'Enable to Upload File Size Exceed', 'data' => $_POST), true);
				}
			}
		}

function login($conn){

$errmsg="";
session_start();
if (!empty($_POST))
{
    $conn = mysqli_connect("localhost","root","","techradix");

    $username =$_POST['username'];
    $password =$_POST['password'];
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";

    $result = mysqli_query($conn, $sql);

    // echo $result;
    if (@mysqli_num_rows($result) == 1)
    {
             $_SESSION['username']=$username;
             header('Location:'.SITE_URL.'/index.php');
             $errmsg="sucess";
        
    }    
     else
    {
     $errmsg="Email or Password are incorrect!!!";
    }

    mysqli_close($conn);
}

if(isset($_SESSION['username']))
{
    header('location:'.SITE_URL.'/index.php');
}
}

?>
