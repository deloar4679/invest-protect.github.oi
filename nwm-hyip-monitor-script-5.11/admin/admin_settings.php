<?php
include ("header.php");


 
 
 
 
 $que = "select * from admin  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $email=$result ['email'];
     $username=$result ['username'];
     $password=$result ['password'];
     


}
 
?>
<div class="post_cat2">
    <div class="cat_bg2"> Admin account settings</div>



    
<form action="admin_settings.php" method="post">

        <table >
   	
         <tr>
          <td>Email : </td>
          <td><input type="text" name="email" value="<?php echo $email;?>"> </td>
         </tr>	
         
         
         <tr>
          <td>UserName : </td>
          <td><input type="text" name="username"  value="<?php echo $username;?>"> </td>
         </tr>
         <tr>
          <td>New password : </td>
          <td><input type="password" name="password1"  > </td>
         </tr>
         <tr>
          <td>Confirm password : </td>
          <td><input type="password" name="password2"  > </td>
         </tr>
         
       <tr>
          <td>Old password : </td>
          <td><input type="password" name="password" > </td>
         </tr>
         <tr>
          <td> </td>
          <td><input type="submit" name="submit" value="submit"> </td>
         </tr>
           
           

        
        </table> 	

     </form>

<?php
    



if (isset($_POST['submit'])){
    
     $email=$_POST ['email'];
     $username=$_POST ['username'];
     $password=$_POST ['password'];
     $password1=$_POST ['password1'];
     $password2=$_POST ['password2'];
     $pass = md5($password);
     $final_pass = md5($password1);
   
    
 
 $que = "select * from admin  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
         $fetch=$result ['password'];
     
if ($fetch!==$pass){
      echo "<script>alert('Your old password not correct')</script>"; exit();
}

    

}
       

  if($password1!==$password2)
  {
      echo "<script>alert('Your new password not match')</script>"; exit();
}
else {
       
           
       $q1= "update admin set username='$username',
       email='$email',password='$final_pass' where id='1' ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     echo "<script>alert('Changed Successful')</script>";
     
		  echo "<script>window.open('admin_settings.php','_self') </script>";}

	
	 } 
	
}
?>
 

</div>




<?php
include ("footer.php");
?>