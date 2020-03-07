<?php
include ("db.php");

	if (isset($_GET['id'])){
          	    $id =$_GET['id'];
         $payment = 3;
$q1= "update banners set payment='$payment'  where banner_id='$id' ";
                         $run1=mysqli_query($con,$q1);
                       
                        
                        
 if($run1){
    
   $pro= $_GET['pro'];
  
   	echo "<script>alert('Banner Approved Successful')</script>";
		  echo "<script>window.open('pending_banners.php','_self') </script>";
	  }
	 else {
	 	echo "<script>alert('Error')</script>";
		  echo "<script>window.open('pending_banners.php','_self') </script>";
	 }
          	}      
         ?>