<?php
include ("header.php");


 
 
 
 
 $que = "select * from gateways where id=2 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
   $name=$result ['name'];
     $title=$result ['title'];
     $account=$result ['account'];
     $r_account=$result ['r_account'];
     $password=$result ['password'];


}
 
?>
<div class="post_cat2">
    <div class="cat_bg2"> EDIT MYSIDEPAY PAYMENT PROCESSOR</div>



    
<form action="edit_pm.php" method="post">

        <table >
   	
         <tr>
          <td>ACCOUNT ID ex: U87684682 : </td>
          <td><input type="text" name="account_id" value="<?php echo $account;?>"> </td>
         </tr>	
         <tr>
          <td>PassPhase Code : </td>
          <td><input type="password" name="password"  value="<?php echo $password;?>"> </td>
         </tr>
         <tr>
          <td>Account Name : </td>
          <td><input type="text" name="title"  value="<?php echo $title;?>"> </td>
         </tr>
          <tr>
          <td>FOR MANUAL RECEIVING ACCOUNT : </td>
          <td><input type="text" name="r_account" value="<?php echo $r_account;?>" placeholder="U87684682"> </td>
         </tr>
      
    
         <tr>
         <td> </td>
          <td><input type="hidden" name="id" value="2"> </td>
         </tr> 
         <tr>
          <td> </td>
          <td><input type="submit" name="submit" value="submit"> </td>
         </tr>
           
           

        
        </table> 	

     </form>

<?php
    



if (isset($_POST['submit'])){
    $id=$_POST ['id'];
    $name=$_POST ['name'];
     $title=$_POST ['title'];
     $account_id=$_POST ['account_id'];
     $password=$_POST ['password'];
   $r_account=$_POST ['r_account'];
   
    
	

       

  
       
           
       $q1= "update gateways set account='$account_id',
       password='$password',title='$title',r_account='$r_account' where id=$id ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     echo "<script>alert('Perfectmoney edited Successful')</script>";
     
		  echo "<script>window.open('edit_pm.php','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>