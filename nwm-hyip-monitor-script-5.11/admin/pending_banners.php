

  

  
<?php
include ("header.php");
?>


<div class="post_cat">
    <div class="cat_bg"> BANNER ORDERS</div>



 
 
 
  
       <?php

          	$q= "select * from banners where payment=1 || payment=2 order by price desc";
          	$run = mysqli_query($con,$q);
          	while ($ban=mysqli_fetch_array($run)){
          	$banner_id = $ban['banner_id'];
          	$banner_url = $ban['banner_url'];
          	$target_url = $ban['target_url'];
          	$email = $ban['email'];
          	$price = $ban ['price'];
          	$status = $ban ['status'];
          	$type = $ban ['type'];
          	$start = $ban ['start'];
          	$end = $ban ['end'];
          	$rate = $ban ['price'];
            $period= $ban ['period'];
            $price = $period * $rate;
          	$payment = $ban ['payment'];
          	
          	if ($payment==1){
          	    $payment=Notpaid;
          	}
          		if ($payment==2){
          	    $payment=Paid;
          	}
         
         
         
          	
          	    
          	    
          
         
         ?>
         
         
         
         
         
         
         <div id="outboxprogram">
<div class="program HOT PROGRAMS ">

<a href="<?php echo $target_url; ?>" ><img src="<?php echo $banner_url; ?>" ></a>

<div class="title_right">
    <h3 style="color:black;">CONTACT EMAIL :<span style="color:blue;">   <?php echo $email; ?> </span></h3>
<h3 style="color:black;">TARGET URL :<span style="color:blue;">   <?php echo $target_url; ?> </span></h3>
    <h3 style="color:black;">PAYMENT :<span style="color:blue;">   <?php echo $payment; ?></span> </h3>
    <h3 style="color:black;">PRICE :<span style="color:blue;">$   <?php echo $price; ?></span> </h3>
    <h3 style="color:black;">ORDER FOR :<span style="color:blue;">   <?php echo $period; ?> weeks</span> </h3>
    <h3 style="color:black;">START DATE :<span style="color:blue;">   <?php echo $start; ?></span> </h3>
    <h3 style="color:black;">END DATE :<span style="color:blue;">   <?php echo $end; ?></span> </h3>
          <form action="activate_banner_order.php?banner=<?php echo $banner_id; ?>" method="post">

      
       
         <tr align="center"><td colspan="2"><input type="submit" name="activate_order"   value="Activate Now"></td> </tr>

        
       

     </form>
     <br>
     
         <form action="delete_banner_order.php?banner=<?php echo $banner_id; ?>" method="post">

      
       
         <tr align="center"><td colspan="2"><input type="submit" name="delete_order"   value="Delete Now"></td> </tr>

        
       
     </form>
     
    
    
    
</div>


</div>
</div>













































<?php
}

?>

</div>

<?php


include ("footer.php");

?>