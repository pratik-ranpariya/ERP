<?php
session_start();
//error_reporting(0);
include('config.php');
if(empty($_SESSION['username']))
{
     header('Location:login.php');
}
$id=$_REQUEST['no'];  

$sqlz = "SELECT totalfee,discount  from admission where enrollment = '$id'";
$sq = $conn->query($sqlz);
$sr = $sq->fetch_assoc();
$totalfee = $sr['totalfee'];
$discount = $sr['discount'];

$sqls = "SELECT sum(payamount) as total FROM fee WHERE enrollment='$id'";
$result = mysqli_query($conn, $sqls);
$data['pay'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['total'];
$totalAmount = $data['pay'];

     $afterdiscount = $totalfee*$discount;
     $as = ((float)$afterdiscount/100.0);
     $as=$totalfee-$as;

$dueamount = $as- $totalAmount;
$sqli = "SELECT count(*) as total FROM fee WHERE enrollment='$id'";
$result = mysqli_query($conn, $sqli);
$data['orders'] = mysqli_fetch_array($result,MYSQLI_ASSOC)['total'];

$pa=mysqli_query($conn,"select * from `admission` where enrollment='$id'");
$df=mysqli_fetch_array($pa);
          
if($dueamount=='0'){
  extract($_POST);
   $sql = "UPDATE admission SET status=1 WHERE enrollment = '$id'";
      mysqli_query($conn, $sql);
}
?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
  <div class="container">
    <div class="load-animate animated fadeInUp">
      <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <h2 class="title">Fee Payment Mode</h2>
        </div>            
      </div>
      <input id="currency" type="hidden" value="$">
      <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <h3>From,</h3><br>

        <b> Enrollment:</b> <?php echo $df['enrollment']; ?><br>  
         <b> Name: </b><?php echo $df['name']; ?><br>  
       <b> Address: </b> <?php echo $df['address']; ?><br> 
       <b>  Mobile: </b><?php echo $df['mobile']; ?><br>
       <b>  Email: </b><?php echo $df['email']; ?><br>
       <b>Total Fee:</b> <?php echo $totalfee ?><br> 
      <b> Discount: </b><?php echo $discount ?>%<br>
      <b> After Discount Price: </b><?php echo $as ?><br>
       <b>  Total Paidfee: </b><?php echo $totalAmount ?><br>
       <b>  Total Installment: </b><?php echo $data['orders']; ?><br>
      <!-- <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total"> -->
     <b> Due Amount: </b><?php echo $dueamount ?><br><br>
        </div>        
<!--         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
          <h3>To,</h3>
          <div class="form-group">
            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea>
          </div>
          
        </div> -->
      </div><br><br>

      <form action="backend.php?service=feepayment" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
      <div class="row" id="myModal">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <table class="table table-bordered " id="invoiceItem"> 
            <tr class="btn-primary">
              <th width="21%">Payment Mode</th>
              <th width="21%">Installment No.</th>
              <th width="21%">Receipt No.</th>  
              <th width="15%">Pay Amount</th>  
              <th width="5%">Print</th>
            </tr>         
            <?php
              $sql = "SELECT * FROM fee WHERE enrollment='".$id."'";
            $result = mysqli_query($conn, $sql);
              while ($row = @mysqli_fetch_array($result)) {
            ?>    
            <tr id="formcontent">
              <td>
                <select name="paymentmode" class="form-control" required >
                <option><?php echo $row['paymentmode'];?></option>
              </td>
              <td><input type="text" name="installment" value="<?php echo $row['installment'];?>" id="productCode_1" class="form-control" autocomplete="off" required></td>
              <td><input type="text" name="receiptid" value="<?php echo $row['receiptid'];?>" id="productName_1" class="form-control" autocomplete="off" required></td>       
              <td><input type="number" name="payamount" value="<?php echo $row['payamount'];?>" id="amountPaid" class="form-control price" autocomplete="off" required></td>

              <td><span><a href="<?php echo SITE_URL ;?>print.php?no=<?php echo $row['receiptid'];?>&eno=<?php echo $row['enrollment'] ;?>"> print </a> </span></td>
            </tr>      
            <?php } ?>     
          </table>

          <table class="table table-bordered table-hover" id="invoiceItem">             
            <tr>
              <td width="21%">
                <select name="paymentmode" class="form-control" required>
                <option>Cash</option>
                <option>Chack</option>
                <option>Bank Transfer</option>
              </td>
              <td width="21%"><input type="text" name="installment" id="productCode_1" class="form-control" autocomplete="off " required></td>
              <td width="21%"><input type="text" name="receiptid" id="productName_1" class="form-control" autocomplete="off" required></td>
              <td width="15%"><input type="number" name="payamount" id="amountPaid" class="form-control price" autocomplete="off" required></td>
              <td width="5%"><span><a href="#"> print</a>  </span></td>
            </tr>           
          </table>
        </div>
      </div>
<!--       <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
          <button class="btn btn-warning" id="addRows" type="button">+ Add More</button>
        </div>
      </div> -->
      <div class="row"> 
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

          <br>
          <div class="form-group">
            <input type="hidden"  class="form-control" value="<?php echo $df['enrollment']; ?>" name="enrollment">
            <input data-loading-text="Saving Invoice..." type="submit" name="submit" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">           
          </div>
                <!--     <div class="form-footer">
            <input data-loading-text="Saving Invoice..." type="submit" name="submit" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">           
          </div> -->
          
        </div>

        </div> 
        </form>
      </div>
      <div class="clearfix"></div>            
    </div>
    </div>
  
<input value="" type="hidden" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
<input value="" type="hidden" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
<input value="" type="hidden" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">

<script type="text/javascript">

   $(document).ready(function(){
  $(document).on('click', '#checkAll', function() {           
    $(".itemRow").prop("checked", this.checked);
  }); 
  $(document).on('click', '.itemRow', function() {    
    if ($('.itemRow:checked').length == $('.itemRow').length) {
      $('#checkAll').prop('checked', true);
    } else {
      $('#checkAll').prop('checked', false);
    }
  });  
  var count = $(".itemRow").length;
  $(document).on('click', '#addRows', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
     htmlRows += '<td><select name="paymentmode" class="form-control" required ><option>Cash</option><option>Chack</option><option>Bank Transfer</option></td>';          
    htmlRows += '<td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';          
    htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>'; 
    // htmlRows += '<td><input type="number" name="price[]" id="price_'+count+'"  class="form-control quantity" autocomplete="off"></td>';      
    // htmlRows += '<td><input type="number" name="taxRate" id="taxRate" class="form-control price" autocomplete="off"></td>'; 
    htmlRows += '<td><input type="number" name="amountPaid" id="amountPaid'+count+'" class="form-control price" autocomplete="off"></td>';   
    // htmlRows += '<td><input type="number" name="amountDue" id="amountDue" class="form-control total" autocomplete="off"></td>';
    htmlRows += '<td><span><a href=""> print </a> </span></td>';
    htmlRows += '</tr>';
    $('#invoiceItem').append(htmlRows);
  }); 
  $(document).on('click', '#removeRows', function(){
    $(".itemRow:checked").each(function() {
      $(this).closest('tr').remove();
    });
    $('#checkAll').prop('checked', false);
    calculateTotal();
  });   
  $(document).on('blur', "[id^=amountPaid]", function(){
    calculateTotal();
  }); 
  $(document).on('blur', "[id^=price_]", function(){
    calculateTotal();
  }); 
  $(document).on('blur', "#taxRate", function(){    
    calculateTotal();
  }); 
  $(document).on('blur', "#amountPaid", function(){
    var amountPaid = $(this).val();
    var totalAftertax = $('#totalAftertax').val();  
    if(amountPaid && totalAftertax) {
      totalAftertax = totalAftertax-amountPaid;     
      $('#amountDue').val(totalAftertax);
    } else {
      $('#amountDue').val(totalAftertax);
    } 
  }); 
  $(document).on('click', '.deleteInvoice', function(){
    var id = $(this).attr("id");
    if(confirm("Are you sure you want to remove this?")){
      $.ajax({
        url:"action.php",
        method:"POST",
        dataType: "json",
        data:{id:id, action:'delete_invoice'},        
        success:function(response) {
          if(response.status == 1) {
            $('#'+id).closest("tr").remove();
          }
        }
      });
    } else {
      return false;
    }
  });
}); 
function calculateTotal(){
  var totalAmount = 0; 
  $("[id^='price_']").each(function() {
    var id = $(this).attr('id');
    id = id.replace("price_",'');
    var price = $('#price_'+id).val();
    var quantity  = $('#quantity_'+id).val();
    if(!quantity) {
      quantity = 1;
    }
    var total = price*quantity;
    $('#total_'+id).val(parseFloat(total));
    totalAmount += total;     
  });
  $('#subTotal').val(parseFloat(totalAmount));  
  var taxRate = $("#taxRate").val();
  var subTotal = $('#subTotal').val();  
  if(subTotal) {
    var taxAmount = subTotal*taxRate/100;
    $('#taxAmount').val(taxAmount);
    subTotal = parseFloat(subTotal)-parseFloat(taxAmount);
    $('#totalAftertax').val(subTotal);    
    var amountPaid = $('#amountPaid').val();
    var totalAftertax = $('#totalAftertax').val();  
    if(amountPaid && totalAftertax) {
      totalAftertax = totalAftertax-amountPaid;     
      $('#amountDue').val(totalAftertax);
    } else {    
      $('#amountDue').val(subTotal);
    }
  }
}

 </script>