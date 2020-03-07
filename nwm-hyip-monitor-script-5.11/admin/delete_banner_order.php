 <?php 
                    include ("db.php");


         
         
                   
              $id =$_GET['banner'];

 $payment = 0;
       $q1= "update banners set payment='$payment' where banner_id=$id ";
                         $run1=mysqli_query($con,$q1);
if($run1){
    
   $pro= $_GET['pro'];
  
   	echo "<script>alert('Banner order Deleted Successful')</script>";
		  echo "<script>window.open('pending_banners.php','_self') </script>";
	  }
	 else {
	 	echo "<script>alert('Error')</script>";
		  echo "<script>window.open('pending_banners.php','_self') </script>";
	 } 
              ?>
              
              
              
              
              



