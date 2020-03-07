<?php
include ("header.php");



   if (isset($_GET['type'])){
 $type=$_GET['type'];
 $id=$_GET['bid'];

$que = "SELECT * from banners where banner_id=$id    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
    ;
    $banner_url= $result['banner_url'];
    $target_url= $result['target_url'];
    $email= $result['email'];
    $period= $result['period'];
   $price= $result['price'];


}

} 
?>
<div class="post_cat2">
    <div class="cat_bg2"> EDIT BANNER</div>



    
<form action="edit_banner.php?type=<?php
echo $_GET['type'];

?>&bid=<?php
echo $_GET['bid'];

?>" method="post">

        <table >
   	
         <tr>
          <td>Target URL: </td>
          <td><input type="text" name="target_url" value="<?php echo $target_url;?>"> </td>
         </tr>	
         <tr>
          <td>Banner URL: </td>
          <td><input type="text" name="banner_url"  value="<?php echo $banner_url;?>"> </td>
         </tr>
         <tr>
          <td> </td>
      
            
          <tr>
          <td>Period: </td>
          <td><select  name="period"> 
          <option value="<?php echo $period;?>"> <?php echo $period;?> Weeks</option>
          <option value="1"> 1 Week</option>
           <option value="2"> 2 Weeks</option>
            <option value="3"> 3 Weeks</option>
             <option value="4"> 4 Weeks</option>
          	</select></td>
         </tr><tr>
         <td>Contact Email: </td>
          <td><input type="text" name="email" value="<?php echo $email; ?>"> </td>
         </tr>
       <tr>
         <td>price: </td>
          <td><input type="text" name="price" value="<?php echo $price; ?>"> </td>
         </tr>
         <tr>
         <td> </td>
          <td><input type="hidden" name="banner_id" value="<?php echo $_GET['bid'];; ?>"> </td>
         </tr> <tr>
         <td> </td>
          <td><input type="hidden" name="type" value="<?php echo $_GET['type'];; ?>"> </td>
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
     $price= $_POST['price'];
   
   
  $email = $_POST['email'];
   
   
    
	

       

  
       
           
       $q1= "update banners set price='$price',
       target_url='$target_url', banner_url='$banner_url', email='$email',  period='$period' where banner_id=$banner_id ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     
     
		  echo "<script>window.open('edited_banner.php?type=$type','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>