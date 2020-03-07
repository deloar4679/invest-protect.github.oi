
<?php 
$que1 = "SELECT * from gateways where id=1   " ;
$run1 = mysqli_query($con,$que1);
while ($result=mysqli_fetch_array($run1)){
     $merchant_id= $result ['account'];
     
        
        
        
}





$id = $_GET['cat'];
$pro = $_GET['pro'];
$custom2 = $_GET['item'];
$order_number =$_GET['order'];
if (isset($_GET['pro'] )){
$que = "SELECT * from categories where cat_id=$id   " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
     $cat_id= $result ['cat_id'];
     $cat_name= $result ['cat_name'];
     $price= $result ['cat_price'];
        
        
        
}
}
if (isset($_GET['pro'] )){
    $pro = $_GET['pro'];
    $id = $_GET['cat'];
    $que = "SELECT * from banners where banner_id=$id   " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
     $cat_id= $result ['banner_id'];
     
     $rate= $result ['price'];
        
     $period= $result ['period'];
     $price = $period * $rate;
        
}
    
}
?>

<form action="https://mysidepay.com/sci/form" method="POST"   >
<input type="hidden" name="merchant" value="22">
<input type="hidden" name="currency" value="USD">
<input type="hidden" name="item_name" value="<?php echo $custom2;  ?>">
<input type="hidden" name="custom" value="<?php echo $merchant_id;  ?>">
 <input type="hidden" name="custom2" value="<?php echo $order_number;  ?>">
<input type="hidden" name="amount"  value="<?php echo $price; ?>"/>


<button type="submit" class="item perfmoney"><img src="/images/msp.png" style="padding:10px;"><span></span></button>
	
</form>