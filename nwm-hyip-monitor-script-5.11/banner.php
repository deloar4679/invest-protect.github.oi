<?php
include ("header.php");
$genrate_number = rand(1,110); 
?>
<div class="post_cat2">
    <div class="cat_bg2"> ADD BANNER</div>
<h4>
Our contact Email :  admin@investlister.com </h4>


    
<form action="banner.php" method="post">

        <table >
    
         <tr>
          <td>Target URL: </td>
          <td><input type="text" name="target_url" value="<?php echo $_SESSION['target_url'];?>"> </td>
         </tr>	
         <tr>
          <td>Banner URL: </td>
          <td><input type="text" name="banner_url"  value="<?php echo $_SESSION['banner_url'];?>"> </td>
         </tr>
           <tr>
          <td> </td>
          <td><input type="hidden" name="order_number" value="<?php echo $genrate_number;?>"> </td>
         </tr>
         <tr>
          <td> </td>
          <td><input type="hidden" name="type" value="<?php
echo $_GET['type'];

?>"> </td>
         </tr>
            <td> </td>
          <td><input type="hidden" name="banner_id" value="<?php
echo $_GET['bid'];

?>"> </td>
         </tr>
            
          <tr>
          <td>Period: </td>
          <td><select  name="period"> 
          <option value="1"> 1 Week</option>
           <option value="2"> 2 Weeks</option>
            <option value="3"> 3 Weeks</option>
             <option value="4"> 4 Weeks</option>
          	</select></td>
         </tr>
         <td>your contact email: </td>
          <td><input type="text" name="email" value="<?php echo $_SESSION['email'];?>"> </td>
         </tr>
          
         <tr align="center"><td colspan="2"><input type="submit" name="submit"  ></td> </tr>

        
        </table> 	

     </form>

<?php
    
    


if (isset($_POST['submit'])){
    $target_url = $_POST['target_url'];
     $banner_url = $_POST['banner_url'];
    $order_number= $_POST['order_number'];
    $type= $_POST['type'];
    $banner_id= $_POST['banner_id'];
    
    $period= $_POST['period'];
    $payment= 1;
   
  $email = $_POST['email'];
   
    
    $start= date("Y/m/d");
    
    
    
	// for session 
	
	$_SESSION['target_url'] =$target_url;
	
    $_SESSION['banner_url']=$banner_url;
    
    $_SESSION['period']=$period;
    $_SESSION['email']=$email;
    
	if($period==1){
	    
	    $end=date("Y-m-d", strtotime("+1 week"));
	}
		if($period==2){
	    
	    $end=date("Y-m-d", strtotime("+2 week"));
	}
		if($period==3){
	    
	    $end=date("Y-m-d", strtotime("+3 week"));
	}
		if($period==4){
	    
	    $end=date("Y-m-d", strtotime("+4 week"));
	}

        if ($target_url==""){
    echo '<script>alert("Please Enter Target URL");</script>';
       echo "<script>window.open('banner.php?type=$type&bid=$banner_id','_self') </script>";
}
if ($banner_url==""){
    echo '<script>alert("Please Enter Banner URL");</script>';
       echo "<script>window.open('banner.php?type=$type&bid=$banner_id','_self') </script>";
}
if ($email==""){
    echo '<script>alert("Please Enter your email address");</script>';
       echo "<script>window.open('banner.php?type=$type&bid=$banner_id','_self') </script>";
}
  
        else {
            $status = notpaid;
       $q1= "update banners set target_url='$target_url', banner_url='$banner_url', email='$email', status='$status', period='$period',payment='$payment' ,start='$start',end='$end' where banner_id=$banner_id ";
                         $run1=mysqli_query($con,$q1); }

 if($run1){
     
     
     
		  echo "<script>window.open('banner_payment.php?pro=$banner_id&cat=$banner_id&url=$banner_url&item=banners&order=$order_number','_self') </script>";}
	 else {
	     
	 	echo "<script>window.location.href = previousUrl; </script>";
	 } 
	
    

	


}
?>
 

</div>




<?php
include ("footer.php");
?>