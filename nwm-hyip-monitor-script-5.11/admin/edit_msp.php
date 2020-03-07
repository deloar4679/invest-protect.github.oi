<?php
include ("header.php");


 
 
 
 
 $que = "select * from gateways where id=1 " ;
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



    
<form action="edit_msp.php" method="post">

        <table >
   	
         <tr>
          <td>MERCHANT ID FOR AUTO RECEIVING : </td>
          <td><input type="text" name="merchant_id" value="<?php echo $account;?>"> </td>
         </tr>	
         
         <tr>
          <td>MERCHANT PASSWORD FOR AUTO RECEIVING: </td>
          <td><input type="password" name="password"  value="<?php echo $password;?>"> </td>
         </tr>
         
         <tr>
          <td>FOR MANUAL RECEIVING ACCOUNT : </td>
          <td><input type="text" name="r_account" value="<?php echo $r_account;?>" placeholder="MSP4765335"> </td>
         </tr>
      
    
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
     
     
     
           <div id="outboxprogram">
<div class="program HOT PROGRAMS ">
<h3 style="color:black;"><span style="color:red;">    you need to open account on MST HERE <a href="https://mysidepay.com/" target="_blank">www.mysidepay.com</a> then go in MERCHANTS and click on Add Wedsite and fill informations bellow.</span> </h3>

<h3 style="color:black;">Company Name :<span style="color:blue;">    ANY YOUR NAME</span> </h3>

    <h3 style="color:black;">URL site :<span style="color:blue;">    <?php echo $site_url;?></span> </h3>
    
    <h3 style="color:black;">Status IPN link :<span style="color:blue;">    <?php echo $site_url;?>gateways/msp_status.php</span> </h3>

    <h3 style="color:black;">Success link :<span style="color:blue;">    <?php echo $site_url;?>payment_success.php</span> </h3>
   
    <h3 style="color:black;">Fail link :<span style="color:blue;">    <?php echo $site_url;?>gateways/fail.php</span> </h3>
    
    <h3 style="color:black;">Merchant IPN password :<span style="color:blue;">    ANYTHING BUT MINIMUM 10 DIGITS</span> </h3>
    
    <h3 style="color:black;">Who pays the fees? :<span style="color:blue;">    ANYTHING YOU CAN SELECT</span> </h3>
    <h3 style="color:black;">Comment for administration :<span style="color:blue;">    ANYTHING YOU CAN ADD</span> </h3>
    
    
     
    
    
    
<h3 style="color:black;"><span style="color:red;">    after submission you will get merchant ID and Merchant password you added you need to fill above feilds Your store will be aproved with in 24 hours after submission then you can accept payments on your site </span> </h3>


</div>
</div>

<?php
    



if (isset($_POST['submit'])){
    $id=$_POST ['id'];
    $name=$_POST ['name'];
     $title=$_POST ['title'];
     $merchant_id=$_POST ['merchant_id'];
     $password=$_POST ['password'];
   
   $r_account=$_POST ['r_account'];
    
	

       

  
       
           
       $q1= "update gateways set account='$merchant_id',
       password='$password', r_account='$r_account' where id=$id ";
                         $run1=mysqli_query($con,$q1); 

 
     
    
     
     if($run1){
     
     echo "<script>alert('MySidePay edited Successful')</script>";
     
		  echo "<script>window.open('edit_msp.php','_self') </script>";}

	
	 } 
	
     
?>
 

</div>




<?php
include ("footer.php");
?>