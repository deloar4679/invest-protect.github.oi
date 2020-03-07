<?php
include ("header.php");


 
 
 
 
 $que = "select * from gateways where id=4 " ;
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
    <div class="cat_bg2"> EDIT BITCOIN PAYMENT PROCESSOR</div>



    
<form action="edit_btc.php" method="post">

        <table >
   	
         
      
          <tr>
          <td>FOR MANUAL RECEIVING ACCOUNT : </td>
          <td><input type="text" name="r_account" value="<?php echo $r_account;?>" placeholder="36HD5Efgzem6fLshgiuFgdYVUsnsX3qL1u"> </td>
         </tr>
      
    
         <tr>
         <td> </td>
          <td><input type="hidden" name="id" value="4"> </td>
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
     
		  echo "<script>window.open('edit_btc.php','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>