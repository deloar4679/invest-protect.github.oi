 <?php
 
 $que = "select * from gateways where id=1 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $msp_account_id=$result ['r_account'];
    


}

 $que = "select * from gateways where id=2 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $pm_account_id=$result ['r_account'];
    


}

 $que = "select * from gateways where id=3 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $payeer_account_id=$result ['r_account'];
    


}
 $que = "select * from gateways where id=4 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $btc_account_id=$result ['r_account'];
    


}
 $que = "select * from gateways where id=5 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $adv_account_id=$result ['r_account'];
    


}
 
?>