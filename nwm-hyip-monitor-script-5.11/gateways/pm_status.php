<?php
include ("..//config/db.php"); 

$que1 = "SELECT * from gateways where id=1   " ;
$run1 = mysqli_query($con,$que1);
while ($result=mysqli_fetch_array($run1)){
     $password= $result ['password'];
    
     
        
        
        
}


// merchant password    
$merchant_password = $password;

$pass= strtoupper(md5($alternate));
// transaction info

$custom2 = $_POST['PAYMENT_ID'];

$amount = $_POST['PAYMENT_AMOUNT'];
$order_id = $_POST['PAYMENT_ID'];
$batch = $_POST['PAYMENT_BATCH_NUM'];
$customer = $_POST['PAYER_ACCOUNT'];
$payee = $_POST['PAYEE_ACCOUNT'];
$payment_units = $_POST['PAYMENT_UNITS'];
$time = $_POST['TIMESTAMPGMT'];
$hash = $_POST['V2_HASH'];
$q = "select * from orders where order_number='$custom2'";
     $run=mysqli_query($con,$q); 
     while ($detail=mysqli_fetch_array($run)){
            $order_number = $detail['order_number'];
            $type = $detail['type'];
            $id = $detail['id'];
$string=
      $_POST['PAYMENT_ID'].':'.$_POST['PAYEE_ACCOUNT'].':'.
      $_POST['PAYMENT_AMOUNT'].':'.$_POST['PAYMENT_UNITS'].':'.
      $_POST['PAYMENT_BATCH_NUM'].':'.
      $_POST['PAYER_ACCOUNT'].':'.$pass.':'.
      $_POST['TIMESTAMPGMT'];
    
$user_hash = strtoupper(md5($string));


if ($type == programs){
    if ($hash == $user_hash){
$status = 1;
$q1= "update hl_listings set payment_status='$status'  where p_url='$id' ";
                         $run1=mysqli_query($con,$q1);
                       
                        
                        
                        
 
   Header('Location: /payment_success.php');
 
}
                       


}
if  ($type == banners)
{
   if ($hash == $user_hash){
$status = paid;
$payment = 2;
$q1= "update banners set status='$status', payment='$payment'  where banner_id='$id' ";
                         $run1=mysqli_query($con,$q1);
                       
                        
                        
                       
 
   Header('Location: /banner_added.php');
 
} 
                       


}
}
                          
                           




?>


















