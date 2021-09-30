
<style type="text/css">
  .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}
body.solid {  border-style: double;
  border-width: thick;}
body {
  position: relative;
  width: 21cm;  
  height: 27.7cm; 
  /*margin: 0 auto; */
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
</style>




<style>
.invoice-box{
	max-width: 800px;
margin: auto;
padding: 30px;
border: 1px solid #eee;
box-shadow: 0 0 10px rgba(0, 0, 0, .15);
font-size: 16px;
line-height: 24px;
font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
color: #555;
}
.invoice-box table{
	width: 100%;
line-height: inherit;
text-align: left;
}
.invoice-box table td{
	padding: 5px;
vertical-align: top;
}
.invoice-box table tr.heading{
	background: #eee;
border-bottom: 1px solid #ddd;
font-weight: bold;
}

</style>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

      <!--main content start-->

      <section id="main-content">
      	<section class="wrapper">



      		<div class="row mt">
      			<div class="col-lg-12">
      				<div class="content-panel">
      					<div class="invoice-box" id="printableArea">
      						<table cellspacing="0" cellpadding="0">
      							<tbody>
      								<tr class="top">
      									<td colspan="2">
      									</td>
      								</tr>
			
	

<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
include('config.php');
//error_reporting(0);


$id=$_REQUEST['no'];
$eid=$_REQUEST['eno'];  
$sqls = "SELECT sum(payamount) as total FROM fee WHERE enrollment='$eid'";
$result = mysqli_query($conn, $sqls);
$data['pay'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['total'];
$totalAmount = $data['pay'];
$pa=mysqli_query($conn,"select * from `admission` where enrollment='$eid'");
$df=mysqli_fetch_array($pa);
$pas=mysqli_query($conn,"SELECT * FROM fee where receiptid='$id'");

$dfa=mysqli_fetch_array($pas);
?>
      <!-- <meta charset="utf-8"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    
    <title>Example 1</title>
  </head>
  <body  class="solid">
    <header class="clearfix"><br><br><br>
      <div id="logo">
         <img src="https://www.techradix.in/wp-content/uploads/2019/02/website-logo.png" style="height: 80px; width: 315px;">
      </div>
      <center><div class="notice"><h3>401, 4th Floor ,Swastik Plaza, Near Yogi Chock, Varachha Rd,Surat-6<br>Contact: 0261 6546542 / +91 8155877977  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        EmailID: info@Techradix.in</h3></div></center><br>

      <!-- <h1>INVOICE 3-2-1</h1> -->
      <center><h2><u>FEES RECEIPT</2></u></h2></center><br><br>
      <div id="company"><br><br><br>
        <div>Center City: <b>Surat</b>&nbsp;&nbsp;&nbsp;</div>	
        <div>Enrollment No:<b><?php echo $df['enrollment']; ?></b>&nbsp;&nbsp;&nbsp;</div>
        <div>Email ID:<b><?php echo $df['email']; ?></b>&nbsp;&nbsp;&nbsp;</div>
        <div>Total Course Fees:<B><?php echo $df['totalfee']; ?>&nbsp;&nbsp;&nbsp;</B></div>
      </div>
      <div>
        <div>&nbsp;&nbsp;&nbsp;<b>Receipt No:</b><?php echo $dfa['receiptid']; ?></div>
        <div>&nbsp;&nbsp;&nbsp;<b>On Account of:</b>inst./</div><br>
        <div>&nbsp;&nbsp;&nbsp;<b>Center Code:</b>TRDX-0123</div>
        <div>&nbsp;&nbsp;&nbsp;<b>STD Name:</b><?php echo $df['name']; ?></div>
        <div>&nbsp;&nbsp;&nbsp;<b>Address:</b><?php echo $df['address']; ?></div>
        <div>&nbsp;&nbsp;&nbsp;<b>Mobile No:</b> <?php echo $df['mobile']; ?></div>
        <div>&nbsp;&nbsp;&nbsp;<b>Course Name:</b><?php echo $df['course']; ?></div>
        <!-- <div>&nbsp;&nbsp;&nbsp;<b>DUE DATE</b> September 17, 2015</div> -->
      </div>
    </header>

      <table>
        <thead>
          <tr>
            <th class="service">Pay Mode</th>
            <th class="desc">Date</th>
            <th>Payment Detail Drawn on Bank & Branch</th>
            <th>Amount</th>
            <th>Total Paid</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service"><?php echo $dfa['paymentmode']; ?></td>
            <td class="desc">00/00/00000</td>
            <td class="service"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     N/A</td>
            <td class="qty"><?php echo $dfa['payamount']; ?></td>
            <td class="total"><?php echo $totalAmount ?></td>
          </tr><hr>

          <tr>
            <td colspan="4" class="grand total"></td>
            <td class="grand total"></td>
          </tr>
        </tbody>
      </table>

      <!-- <table> -->
          <!-- tr> -->
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           Counselor Signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Authorized Signatory (with seal)<br><br><br><br>           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________
          <!-- </tr> -->
      <!-- </table> -->
      <br><br><br><br>

<h3>&nbsp;&nbsp;&nbsp;<u><b>Terms & Conditions:</b></u><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;Fees paid shell not be refended.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;Installments payments to be made on or before due date of every month.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;Cheques/DD in favour of.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;Cheques validity is subject to realization.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp;&nbsp;All receipt to be produced at the time of requisition of certificates.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp;&nbsp;For any queries/complaints, contact 0261 6546542.<br></h3>

  

			
		</table>
	</div>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  				<tr >
				<td style="float: right;margin-top: 50px;">
					<button type="button" class="btn btn-primary" onclick="printDiv('printableArea')">Print</button>
				</td>
			</tr>

		</section>
      </section><!-- /MAIN CONTENT -->
</body>

      <!--main content end-->
   <?php
// include('footer.php');
?>