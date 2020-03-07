<?php
include ("header.php");
?>
<div class="post_cat2">
    <div class="cat_bg2"> ADD BANNER</div>



    
<form action="add_banner.php?type=<?php
echo $_GET['type'];

?>&bid=<?php
echo $_GET['bid'];

?>" method="post">

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
         </tr><tr>
         <td>Contact Email: </td>
          <td><input type="text" name="email" value="<?php echo $_SESSION['email'];?>"> </td>
         </tr>
         
         <tr>
          <td> </td>
          <td><input type="submit" name="submit" value="submit"> </td>
         </tr>
           
           

        
        </table> 	

     </form>

<?php
    
    


if (isset($_POST['submit'])){
    $target_url = $_POST['target_url'];
     $banner_url = $_POST['banner_url'];
    
    $type= $_POST['type'];
    $banner_id= $_POST['banner_id'];
    $period= $_POST['period'];
    $payment= 3;
   
  $email = $_POST['email'];
   
    $started_date= $_POST['started_date'];
    $added_date= date("Y/m/d");

	// for session 
	
	$_SESSION['target_url'] =$target_url;
	
    $_SESSION['banner_url']=$banner_url;
    
    $_SESSION['period']=$period;
    $_SESSION['email']=$email;
    
	

       

  
       
            $status = paid;
       $q1= "update banners set target_url='$target_url', banner_url='$banner_url', email='$email', status='$status', period='$period',payment='$payment' where banner_id=$banner_id ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     
     
		  echo "<script>window.open('added_banner.php?type=$type','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>