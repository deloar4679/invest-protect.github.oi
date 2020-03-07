<?php
include ("header.php");
?>


<div class="post_cat2">
    <div class="cat_bg2"> SUPPORT FORM</div>
    <h3>Email : <?php echo $support_email;?></h3>
    <h3>Skype ID : <?php echo $skype;?> <a href="skype:<?php echo $skype;?>m?chat"><img src="templates/images/skype.png" width="20" height="20" ></a><br><br></h3>

     <form action="contact.php" method="post">

        <table >
   
         <tr>
          <td>Your Name: </td>
          <td><input type="text" name="name"> </td>
         </tr>	
         <tr>
          <td>your Email: </td>
          <td><input type="text" name="email"> </td>
         </tr>
           <td>Subject: </td>
          <td><input type="text" name="subject"> </td>
         </tr>
      
         <tr>
          <td>Message: </td>
          <td><textarea type="text" name="message" cols="30" rows="5"></textarea>  </td>
         </tr >
        
         <tr align="center"><td colspan="2"><input type="submit" name="submit"  ></td> </tr>

        
        </table> 	

     </form>

</div>


<?php

if (isset($_POST['submit'])){
    $name= $_POST['name'];
    $from= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];
    $to= $support_email ;




	  
	  
       	if ($name==""){
    echo "<script>alert('Please add your name')</script>";
    exit();
}

if ($from==""){
    echo "<script>alert('Please add your email')</script>";
    exit();
}
if ($message==""){
    echo "<script>alert('Please add message')</script>";
    exit();
}


if (mail($to,$subject,$message,  $from)){
		  
		  echo "<script>alert('Message send Successful!')</script>";
	  }
	  
	
    } 
?>


<?php
include ("footer.php");
?>