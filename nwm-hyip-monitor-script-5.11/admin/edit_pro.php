<?php
include ("header.php");
?>
<?php
if (isset($_GET['pro'])){
 $pro=$_GET['pro'];

$que = "SELECT * from hl_listings where id=$pro  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
    $id= $result ['id'];
    $name= $result ['name'];
    $url= $result ['url'];
    $ref_url= $result ['ref_url'];
    $email= $result ['email'];
    $last_payout= $result ['last_payout'];    
    $status= $result ['status'];
    $hyip_status= $result ['hyip_status'];
    $plans= $result ['percents'];
    $ref_com= $result ['ref_com'];
    $min_spend= $result ['min_spend'];
    $max_spend= $result ['max_spend'];
    $our_investment= $result ['our_investment'];
    $min_withdraw= $result ['min_withdraw'];
    $withdraw_type= $result ['withdraw_type'];
    $details= $result ['details'];
    $desc= substr($details,0,115);
    
    
    $added= $result ['added'];
    $msp= $result ['msp'];
    $pm= $result ['pm'];
    $btc= $result ['btc'];
    $payeer= $result ['payeer'];
    $adv= $result ['adv'];
    $pp= $result ['pp'];
    $payza= $result ['payza'];
    $neteller= $result ['net'];
    $skrill= $result ['skrill'];
    $ltc= $result ['ltc'];
    $btccash= $result ['btccash'];
    $doge= $result ['doge'];
    $eth= $result ['eth'];
    $comodo_ssl= $result ['comodo_ssl'];
    $evssl= $result ['evssl'];
    $ddos= $result ['ddos'];

    $started_date= $result ['started_date'];
    $added_date= $result ['added'];
}
}
?>
<div class="post_cat2">
    <div class="cat_bg2"> EDIT PROGRAM</div>



    

     <form action="edit_pro.php?pro=<?php echo $_GET['pro']; ?>" method="post">

        <table >
      
         <tr>
          <td>Program Category: </td>
          <td><select name='group_id'>
              <?php 
              $pro=$_GET['pro'];

$que = "SELECT * from hl_listings where id=$pro    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $cat_id= $result['group_id'];
     
      $que = "SELECT * from categories where cat_id=$cat_id  " ;
$run = mysqli_query($con,$que);
while ($cat=mysqli_fetch_array($run)){
   $cat_name= $cat ['cat_name'];
    
}
        
 

              echo "<option value='$cat_id'>$cat_name</option>";
}
              ?>
      
            
           <?php

          	$q= "select * from categories";
          	$run = mysqli_query($con,$q);
          	while ($cat=mysqli_fetch_array($run)){
          	$cat_id = $cat['cat_id'];
          	$cat_name = $cat ['cat_name'];

           echo "
          
          <option value='$cat_id'>$cat_name</option>

          
         ";
         }
         ?>
         </select> </td>
           </tr>
         <tr>
          <td>Program name: </td>
          <td><input type="text" name="name" value="<?php echo $name; ?>"> </td>
         </tr>	
         <tr>
          <td>Program Url: </td>
          <td><input type="text" name="url" value="<?php echo $url; ?>"> </td>
         </tr>
          <tr>
          <td>Referral Url: </td>
          <td><input type="text" name="ref_url" value="<?php echo $ref_url; ?>"> </td>
         </tr>
         <tr>
          <td>Status: </td>
          <td><select name="hyip_status"> 
           <option value="<?php echo $hyip_status;?>"> <?php if ($hyip_status == 1)
           {
            echo 'Paying';   
           }
           else if ($hyip_status == 2)
           {
               echo 'Waiting';
           }
           else if ($hyip_status == 3)
           {
               echo 'Problem';
           }
           else if ($hyip_status == 4)
           {
               echo 'Not Paying';
           }
           else if ($hyip_status == 5)
           {
               echo 'Pending';
           }
           ?></option>
          <?php if ($hyip_status != 1) { ?><option value="1">Paying</option> <?php }?>
           <?php if ($hyip_status != 2) { ?><option value="2">Waiting</option></option> <?php }?>
          <?php if ($hyip_status != 3) { ?><option value="3">Problem</option> <?php }?>
           <?php if ($hyip_status != 4) { ?><option value="4">Not Paying</option> <?php }?>
          <?php if ($hyip_status != 5) { ?><option value="5">Pending</option> <?php }?>
          </select> </td>
         </tr>
        
          <tr>
          <td>Status ON/OFF: </td>
          <td><select name="status"> 
          <?php
          if ($status==1){
              echo "<option value='1'> ON</option>
              <option value='0'> OFF</option>";
          }
           if ($status==0){
              echo "<option value='0'> OFF</option>
              <option value='1'> ON</option>";
          }
          ?>
          
           
          </select> </td>
         </tr>
         
         
          <tr>
          <td>Plans: </td>
          <td><textarea type="text" name="percents"  cols="30" rows="3" ><?php echo $plans; ?></textarea>  </td>
          
           </tr >
         <tr>
          <td>Referral commission: </td>
          <td><input type="text" name="ref_com" value="<?php echo $ref_com; ?>"> </td>
         </tr>
         
          <tr>
          <td>Contact E-mail: </td>
          <td><input type="text" name="email" value="<?php echo $email; ?>"> </td>
         </tr>
         <tr>
          <td>Minimum Deposit: </td>
          <td><input type="text" name="min_spend" value="<?php echo $min_spend; ?>"> </td>
         </tr>
          <tr>
          <td>Maximum Deposit: </td>
          <td><input type="text" name="max_spend" value="<?php echo $max_spend; ?>"> </td>
         </tr>
          <tr>
          <td>Minimum Withdraw: </td>
          <td><input type="text" name="min_withdraw" value="<?php echo $min_withdraw; ?>">  </td>
         </tr>
          <tr>
          <td>Withdraw Type : </td>
          <td><select  name="withdraw_type"> 
          <?php 
           $pro=$_GET['pro'];

$que = "SELECT * from hl_listings where id=$pro    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   $withdraw_type= $result['withdraw_type'];
   echo "<option value='$withdraw_type'> $withdraw_type</option> ";
}
          
          ?>
          
          <option value="Instant"> Instant</option>
          	<option value="Manual"> Manual</option></select></td>
         </tr>
         
          <tr>
          <td> Started Date: </td>
          <td><input type="text" name="started_date" value="<?php echo $started_date; ?>">  </td>
         </tr>
          <tr>
          <td> Added Date: </td>
          <td><input type="text" name="added" value="<?php echo $added_date; ?>">  </td>
         </tr>
          
        <?php
         $pro=$_GET['pro'];

$que = "SELECT * from hl_listings where id=$pro  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
    $msp= $result['msp'];
	$pm= $result['pm'];
	$btc= $result['btc'];
	$payeer= $result['payeer'];
	$adv= $result['adv'];
	$pp= $result['pp'];
	$payza= $result['payza'];
	$net= $result['net'];
	$skrill= $result['skrill'];
	$ltc= $result['ltc'];
	$btccash= $result['btccash'];
	$doge= $result['doge'];
	$eth= $result['eth'];
	$ssl= $result['comodo_ssl'];
	$evssl= $result['evssl'];
	$ddos= $result['ddos'];
	
		if ($msp=="1"){
	    $msp_status="checked";
	}
	
	
	if ($pm=="1"){
	    $pm_status="checked";
	}
		if ($btc=="1"){
	    $btc_status="checked";
	}
		if ($payeer=="1"){
	    $payeer_status="checked";
	}
		
	if ($adv=="1"){
	    $adv_status="checked";
	}
		if ($pp=="1"){
	    $pp_status="checked";
	}
		if ($payza=="1"){
	    $payza_status="checked";
	}
		
	if ($net=="1"){
	    $net_status="checked";
	}
		if ($skrill=="1"){
	    $skrill_status="checked";
	}
		if ($ltc=="1"){
	    $ltc_status="checked";
	}
		
	if ($btccash=="1"){
	    $btccash_status="checked";
	}
		if ($doge=="1"){
	    $doge_status="checked";
	}
		if ($eth=="1"){
	    $eth_status="checked";
	}
		
	if ($ssl=="1"){
	    $ssl_status="checked";
	}
		if ($evssl=="1"){
	    $evssl_status="checked";
	}
		if ($ddos=="1"){
	    $ddos_status="checked";
	}
	
        
        echo "
        <tr><td></td><td><input type='checkbox' name='msp' value='1' $msp_status > MySidePay </td> </tr>
        
         <tr><td></td><td><input type='checkbox' name='pm' value='1' $pm_status > PerfectMoney </td> </tr> 
         

     <tr><td></td><td><input type='checkbox' name='btc' value='1' $btc_status> Bitcoin </td> </tr>
         <tr><td></td><td><input type='checkbox' name='payeer' value='1' $payeer_status> Payeer </td> </tr>
         <tr><td></td><td><input type='checkbox' name='adv' value='1' $adv_status> Advcash </td> </tr>
         <tr><td></td><td><input type='checkbox' name='pp' value='1' $pp_status> Paypal </td> </tr>
         <tr><td></td><td><input type='checkbox' name='payza' value='1' $payza_status> Payza </td> </tr>
         <tr><td></td><td><input type='checkbox' name='net' value='1' $net_status> Neteller </td> </tr>
         <tr><td></td><td><input type='checkbox' name='skrill' value='1' $skrill_status> Skrill </td> </tr>
         <tr><td></td><td><input type='checkbox' name='ltc' value='1' $ltc_status> Litecoin </td> </tr>
         <tr><td></td><td><input type='checkbox' name='btccash' value='1' $btccash_status> BTC CASH </td> </tr>
         <tr><td></td><td><input type='checkbox' name='doge' value='1' $doge_status> DOGE </td> </tr>
         <tr><td></td><td><input type='checkbox' name='eth' value='1' $eth_status> Etherium </td> </tr>
         <tr><td></td><td><input type='checkbox' name='ssl' value='1' $ssl_status> SSL </td> </tr>
         <tr><td></td><td><input type='checkbox' name='evssl' value='1' $evssl_status> Ev SSL </td> </tr>
         <tr><td></td><td><input type='checkbox' name='ddos' value='1' $ddos_status> DDOS PROTECTED </td> </tr>";
}
         ?>
         <tr>
          <td>Program Description: </td>
          <td><textarea type="text" name="details" cols="40" rows="10" ><?php echo $details; ?></textarea>  </td>
         </tr >
         <tr align="center"><td colspan="2"><input type="submit" name="submit"  ></td> </tr>

        
        </table> 	

     </form>

<?php
    
   


if (isset($_POST['submit'])){
    $pro=$_GET['pro'];
    $group_id = $_POST['group_id'];
     
    
    $name= $_POST['name'];
    $url= $_POST['url'];
    $ref_url= $_POST['ref_url'];
  

    $status= $_POST['status'];
    $hyip_status= $_POST['hyip_status'];
    
    $percents= $_POST['percents'];
    $min_spend= $_POST['min_spend'];
    $max_spend= $_POST['max_spend'];
    $ref_com= $_POST['ref_com'];
    $email= $_POST['email'];
    $min_withdraw= $_POST['min_withdraw'];
    $withdraw_type= $_POST['withdraw_type'];
    $added= $_POST['added'];
    $started_date= $_POST['started_date'];
    
  
    $last_payout = 'Waiting';
    $msp= $_POST['msp'];
	$pm= $_POST['pm'];
	$btc= $_POST['btc'];
	$payeer= $_POST['payeer'];
	$adv= $_POST['adv'];
	$pp= $_POST['pp'];
	$payza= $_POST['payza'];
	$net= $_POST['net'];
	$skrill= $_POST['skrill'];
	$ltc= $_POST['ltc'];
	$btccash= $_POST['btccash'];
	$doge= $_POST['doge'];
	$eth= $_POST['eth'];
	$ssl= $_POST['ssl'];
	$evssl= $_POST['evssl'];
	$ddos= $_POST['ddos'];
	
	$details = $_POST['details'];
	
	
	

  if ($ddos == ""){
    $ddos = 0;
    $payment_status = '0';
  }

        if ($name==""){
    echo '<script>alert("Please Enter Program name");</script>';
       echo "<script>window.open('edit_pro.php?pro=$pro','_self') </script>";
}
if ($url==""){
    echo '<script>alert("Please Enter Program URL");</script>';
       echo "<script>window.open('edit_pro.php?pro=$pro','_self') </script>";
}


    
        if ($email==""){
    echo '<script>alert("Please Enter your contact Email");</script>';
       echo "<script>window.open('edit_pro.php?pro=$pro','_self') </script>";exit(); 
}
        else {
       $q1= "update hl_listings set group_id='$group_id', name='$name', url='$url', status='$status', hyip_status='$hyip_status', percents='$percents', ref_com='$ref_com', min_spend='$min_spend', max_spend='$max_spend', min_withdraw='$min_withdraw', withdraw_type='$withdraw_type', started_date='$started_date', added='$added',msp='$msp', pm='$pm', btc='$btc', payeer='$payeer', adv='$adv', pp='$pp', payza='$payza', net='$net', skrill='$skrill', ltc='$ltc', btccash='$btccash', doge='$doge', eth='$eth', comodo_ssl='$ssl', evssl='$evssl', ddos='$ddos', details='$details', email='$email', ref_url='$ref_url' where id=$pro ";
                         $run1=mysqli_query($con,$q1); }

if($run1){
     
     
     
		  echo '<script>alert("Program updated Successful!");</script>';
       echo "<script>window.open('edit_pro.php?pro=$pro','_self') </script>";exit(); }
	 else {
	     
	 	echo '<script>alert("Error");</script>';
       echo "<script>window.open('edit_pro.php?pro=$pro','_self') </script>";exit();
	 } 
	
    } 

	



?>
 

</div>




<?php
include ("footer.php");
?>