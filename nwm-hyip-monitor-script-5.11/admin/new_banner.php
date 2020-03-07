<?php
include ("header.php");
?>


<div class="post_cat">
    <div class="cat_bg"> ADD NEW BANNER SPACE</div>
    
    
    
    
    <form action="new_banner.php" method="post">

        <table >
    
        
           <tr>
          <td>New Banner Price: </td>
          <td><input type="text" name="price"  value="<?php echo $_SESSION['price'];?>"> </td>
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
            
         
          
         <tr align="center"><td colspan="2"><input type="submit" name="submit"  ></td> </tr>

        
        </table> 	

     </form>

<?php
    
    


if (isset($_POST['submit'])){
    $target_url = $_POST['target_url'];
     $banner_url = $_POST['banner_url'];
    $price = $_POST['price'];
    $type= $_POST['type'];
    $banner_id= $_POST['banner_id'];
    $period= $_POST['period'];
   
  $email = $_POST['email'];
   
    $started_date= $_POST['started_date'];
    $added_date= date("Y/m/d");

	// for session 
	
	$_SESSION['target_url'] =$target_url;
	
    $_SESSION['banner_url']=$banner_url;
    $_SESSION['price']=$price;
    $_SESSION['period']=$period;
    $_SESSION['email']=$email;
    
	

       
if ($price==""){
    echo '<script>alert("Please Enter banner price");</script>';
       echo "<script>window.open('banner.php?type=$type&bid=$banner_id','_self') </script>";
}
  
        else {
            $status = notpaid;
       $q= "insert into banners (type,price,target_url,banner_url,email,start,end,status,period) values 
                         ('$type','$price','$target_url','$banner_url','$email','$start','$end','$status','$period')";
                         $run=mysqli_query($con,$q); }

 if($run){
     
   
     
		   echo '<script>alert("Banner space added successful");</script>';
       echo "<script>window.open('added_banner.php?type=$type','_self') </script>";
     unset($_SESSION['target_url']);
unset($_SESSION['price']);
unset($_SESSION['banner_url']);
unset($_SESSION['email']);
 }
	 else {
	     
	 	 echo '<script>alert("error");</script>';
	 } 
	
    }

	



?>
 
    
    
    </div>

<?php
include ("footer.php");
?>