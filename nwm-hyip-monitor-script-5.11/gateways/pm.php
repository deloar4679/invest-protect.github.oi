
<?php 
$que1 = "SELECT * from gateways where id=2   " ;
$run1 = mysqli_query($con,$que1);
while ($result=mysqli_fetch_array($run1)){
     $pm_account= $result ['account'];
     $pm_title= $result ['title'];
     
        
        
        
}





$id = $_GET['cat'];
$pro = $_GET['pro'];
$custom2 = $_GET['item'];
$order_number = $_GET['order'];
if (isset($_GET['pro'] )){
$que = "SELECT * from categories where cat_id=$id   " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
     $cat_id= $result ['cat_id'];
     $cat_name= $result ['cat_name'];
     $price= $result ['cat_price'];
        
        
        
}
}
if (isset($_GET['ban'] )){
    $pro = $_GET['pro'];
    $id = $_GET['cat'];
    $que = "SELECT * from banners where banner_id=$id   " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
     $cat_id= $result ['banner_id'];
     
     $price= $result ['price'];
        
        
        
}
    
}
?>
<form action="https://perfectmoney.is/api/step1.asp" method="POST">



                    <input type="hidden" name="PAYEE_ACCOUNT" value="<?php echo $pm_account;  ?>" >
                    <input type="hidden" name="PAYEE_NAME" value="<?php echo $pm_title;  ?>">
                    <input type="hidden" name="PAYMENT_AMOUNT" value="<?php echo $price;  ?>">
                    <input type="hidden" name="PAYMENT_UNITS" value="USD">
                    <input type="hidden" name="STATUS_URL" value='https://investlister.com/getways/pm_status.php'>
                    <input type="hidden" name="PAYMENT_URL" value='https://investlister.com/payment_success.php'>
                    <input type="hidden" name="NOPAYMENT_URL" value='https://investlister.com/payment_fail.php'>
                    <input type="hidden" name="PAYMENT_ID" value="<?php echo $order_number;  ?>">
                    
                    <input type="hidden" name="SUGGESTED_MEMO" value="<?php echo $custom2;  ?>">
                    
                 
					<button type="submit" class="item perfmoney"><img src="/images/p-money.png" style="padding:10px;"><span></span></button>

                             </p>



                  </form>

