<?php
include ("header.php");


 
 
 
 
 $que = "select * from settings  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $site_url=$result ['site_url'];
     $site_title=$result ['site_title'];
     $site_name=$result ['site_name'];
     $keywords=$result ['keywords'];
     $description=$result ['description'];
     $support_email=$result ['support_email'];
     $skype=$result ['skype'];


}
 
?>
<div class="post_cat2">
    <div class="cat_bg2"> EDIT MAIN SETTINGS</div>



    
<form action="main_settings.php" method="post">

        <table >
   	
         <tr>
          <td>Site URL : </td>
          <td><input type="text" name="site_url" value="<?php echo $site_url;?>"> </td>
         </tr>	
         
         
         <tr>
          <td>Site Name : </td>
          <td><input type="text" name="site_name"  value="<?php echo $site_name;?>"> </td>
         </tr>
         <tr>
          <td>Meta Title : </td>
          <td><input type="text" name="site_title"  value="<?php echo $site_title;?>"> </td>
         </tr>
         <tr>
          <td>Meta Keywords : </td>
          
          <td><textarea type="text" name="keywords"  cols="30" rows="3" ><?php echo $keywords;?></textarea>  </td>
         </tr>
         <tr>
          <td>Meta Description : </td>
           <td><textarea type="text" name="description"  cols="30" rows="3" ><?php echo $description;?></textarea>  </td>
         </tr>
         <tr>
          <td>Support Email : </td>
          <td><input type="text" name="support_email"  value="<?php echo $support_email;?>"> </td>
         </tr>
         <tr>
          <td>SKype ID : </td>
          <td><input type="text" name="skype"  value="<?php echo $skype;?>"> </td>
         </tr>
         <tr>
          <td> </td>
      
    
         <tr>
         <td> </td>
          <td><input type="hidden" name="id" value="1"> </td>
         </tr> 
         <tr>
          <td> </td>
          <td><input type="submit" name="submit" value="submit"> </td>
         </tr>
           
           

        
        </table> 	

     </form>

<?php
    



if (isset($_POST['submit'])){
    
    $site_url=$_POST ['site_url'];
     $site_title=$_POST ['site_title'];
     $site_name=$_POST ['site_name'];
     $keywords=$_POST ['keywords'];
     $description=$_POST ['description'];
     $support_email=$_POST ['support_email'];
     $skype=$_POST ['skype'];

   
   
    
	

       

  
       
           
       $q1= "update settings set site_url='$site_url',
       site_title='$site_title',site_name='$site_name',
       keywords='$keywords', description='$description',support_email='$support_email', skype='$skype' where id='1' ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     echo "<script>alert('Settings edited Successful')</script>";
     
		  echo "<script>window.open('main_settings.php','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>