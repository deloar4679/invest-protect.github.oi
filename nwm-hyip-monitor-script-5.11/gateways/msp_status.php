
<?php
include ("..//config/db.php"); 
$que1 = "SELECT * from gateways where id=2   " ;
$run1 = mysqli_query($con,$que1);
while ($result=mysqli_fetch_array($run1)){
     $password= $result ['password'];
    
     
        
        
        
}


// merchant password    
$merchant_password = $password;

// transaction info
$amount = $_POST['amount'];
$fee = $_POST['fee'];
$total = $_POST['total'];
$currency = $_POST['currency'];
$payer = $_POST['payer'];
$receiver = $_POST['receiver'];
$status = $_POST['status'];
$date = $_POST['date'];
$id_transfer = $_POST['id_transfer'];
// Merchant info
$merchant_name = $_POST['merchant_name'];
$merchant_id = $_POST['merchant_id'];
$balance = $_POST['balance'];
// Purchase Information
$item_name = $_POST['item_name'];
$custom = $_POST['custom'];
$custom2 = $_POST['custom2'];

$q = "select * from orders where order_number='$custom2'";
     $run=mysqli_query($con,$q); 
     while ($detail=mysqli_fetch_array($run)){
            $order_number = $detail['order_number'];
            $type = $detail['type'];
            $id = $detail['id'];
            
     

// Verification of the transaction
$hash = $_POST['hash'];

$hash_string = $amount.':'.$merchant_password.':'.$date.':'.$id_transfer;
    
$user_hash = strtoupper(md5($hash_string));


if ($type == programs){
    if ($hash == $user_hash){
$status = 1;
$q1= "update hl_listings set payment_status='$status'  where url='$id' ";
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










