<?php  
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'inv');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if(isset($_POST['save']))  
{  
    $name=$_POST['name'];  
    $location=$_POST['location'];  
    @mysqli_query("insert into tbl_order(name,location) VALUES ('$name','$location')");  
    $id=@mysqli_insert_id();  
    for($i = 0; $i<count($_POST['productname']); $i++)  
    {  
        @mysqli_query("INSERT INTO tbl_orderdetail  
            SET   
            order_id = '{$id}',  
            product_name = '{$_POST['productname'][$i]}',  
            quantity = '{$_POST['quantity'][$i]}',  
            price = '{$_POST['price'][$i]}',  
            discount = '{$_POST['discount'][$i]}',  
            amount = '{$_POST['amount'][$i]}'");   
    }  
}   
?>  
<!DOCTYPE html>  
<html>  

<head>  
    <title>Invoice</title>  
</head>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<body>  
    <form action="" method="POST">  
        <div class="box box-primary">  
            <div class="box-header">  
                <h3 class="box-title">Invoice </h3>  
            </div>  
            <div class="box-body">  
                <div class="form-group">  
                    ReceiptName  
                    <input type="text" name="name" class="form-control">  
                </div>  
                <div class="form-group">  
                    Location  
                    <input type="text" name="location" class="form-control">  
                </div>  
            </div>  
            <input type="submit" class="btnbtn-primary" name="save" value="Save Record">  
        </div><br/>  
        <table class="table table-bordered table-hover">  
            <thead>  
                <th>No</th>  
                <th>Product Name</th>  
                <th>Quantity</th>  
                <th>Price</th>  
                <th>Discount</th>  
                <th>Amount</th>  
                <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
            </thead>  
            <tbody class="detail">  
                <tr>  
                    <td class="no">1</td>  
                    <td><input type="text" class="form-control productname" name="productname[]"></td>  
                    <td><input type="text" class="form-control quantity" name="quantity[]"></td>  
                    <td><input type="text" class="form-control price" name="price[]"></td>  
                    <td><input type="text" class="form-control discount" name="discount[]"></td>  
                    <td><input type="text" class="form-control amount" name="amount[]"></td>  
                    <td><a href="#" class="remove">Delete</td>  
                    </tr>  
                </tbody>  
                <tfoot>  
                    <th></th>  
                    <th></th>  
                    <th></th>  
                    <th></th>  
                    <th></th>  
                    <th style="text-align:center;" class="total">0<b></b></th>  
                </tfoot>  

            </table>  
        </form>  
    </body>  
    </html> 
    <script src="https://code.jquery.com/jquery-1.12.0.min.js">  
</script>  
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js">  
</script>  
    <script type="text/javascript">  
        $(function()  
        {  
            $('#add').click(function()  
            {  
                addnewrow();  
            });  
            $('body').delegate('.remove','click',function()  
            {  
                $(this).parent().parent().remove();  
            });  
            $('body').delegate('.quantity,.price,.discount','keyup',function()  
            {  
                vartr=$(this).parent().parent();  
                varqty=tr.find('.quantity').val();  
                var price=tr.find('.price').val();  

                var dis=tr.find('.discount').val();  
                varamt =(qty * price)-(qty * price *dis)/100;  
                tr.find('.amount').val(amt);  
                total();  
            });  
        });  
        function total()  
        {  
            var t=0;  
            $('.amount').each(function(i,e)   
            {  
                varamt =$(this).val()-0;  
                t+=amt;  
            });  
            $('.total').html(t);  
        }  
        functionaddnewrow()   
        {  
            var n=($('.detail tr').length-0)+1;  
            vartr = '<tr>'+  
            '<td class="no">'+n+'</td>'+  
            '<td><input type="text" class="form-control productname" name="productname[]"></td>'+  
            '<td><input type="text" class="form-control quantity" name="quantity[]"></td>'+  
            '<td><input type="text" class="form-control price" name="price[]"></td>'+  
            '<td><input type="text" class="form-control discount" name="discount[]"></td>'+  
            '<td><input type="text" class="form-control amount" name="amount[]"></td>'+  
            '<td><a href="#" class="remove">Delete</td>'+  
            '</tr>';  
            $('.detail').append(tr);   
        }  
    </script> 