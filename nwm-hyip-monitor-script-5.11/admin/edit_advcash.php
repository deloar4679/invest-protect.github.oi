<?php
include ("header.php");


 
 
 
 
 $que = "select * from gateways where id=5 " ;
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
    <div class="cat_bg2"> EDIT ADVCASH PAYMENT PROCESSOR</div>



    
<form action="edit_advcash.php" method="post">

        <table >
   	
         
      
          <tr>
          <td>FOR MANUAL RECEIVING ACCOUNT : </td>
          <td><input type="text" name="r_account" value="<?php echo $r_account;?>" placeholder="U 7561 2282 7286"> </td>
         </tr>
      
    
         <tr>
         <td> </td>
          <td><input type="hidden" name="id" value="5"> </td>
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
   
   $r_account=$_POST ['r_account'];
   
    
	

       

  
       
           
       $q1= "update gateways set r_account='$r_account' where id=$id ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     echo "<script>alert('BTC edited Successful')</script>";
     
		  echo "<script>window.open('edit_advcash.php','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>