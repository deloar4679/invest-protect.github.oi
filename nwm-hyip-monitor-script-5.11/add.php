<?php
include ("header.php");
$genrate_number = rand(1,110); 

?>
<div class="post_cat2">
    <div class="cat_bg2"> ADD PROGRAM</div>



    
<form action="add.php" method="post">

        <table >
      
         
            <tr>
          <td> </td>
          <td><input type="hidden" name="group_id" value="<?php
echo $cat=$_GET['cat'];

?>"> </td>
         </tr>
         <tr>
          <td>Program name: </td>
          <td><input type="text" name="name" value="<?php echo $_SESSION['name'];?>" placeholder="COMPANY NAME"> </td>
         </tr>	
         <tr>
          <td>Program Url: </td>
          <td><input type="text" name="url"  value="<?php echo $_SESSION['url'];?>" placeholder="http://yourdomain.com"> </td>
         </tr>
     
         
         
         
         <tr>
          <td>Plans: </td>
          <td><textarea type="text" name="percents"  cols="30" rows="3" ><?php echo $_SESSION['percents'];?></textarea>  </td>
          
           </tr >
         
        
        
        
         <tr>
          <td>Minimum Deposit: </td>
          <td><input type="text" name="min_spend" value="<?php echo $_SESSION['min_spend'];?>"> </td>
         </tr>
          <tr>
          <td>Maximum Deposit: </td>
          <td><input type="text" name="max_spend" value="<?php echo $_SESSION['max_spend'];?>"> </td>
         </tr>
          <tr>
          <td>Referral commission: </td>
          <td><input type="text" name="ref_com" value="<?php echo $_SESSION['ref_com'];?>"> </td>
         </tr>
         
          <tr>
          <td>Contact E-mail: </td>
          <td><input type="text" name="email" value="<?php echo $_SESSION['email'];?>"> </td>
         </tr>
          <tr>
          <td>Minimum Withdraw: </td>
          <td><input type="text" name="min_withdraw" value="<?php echo $_SESSION['min_withdraw'];?>"> </td>
         </tr>
          <tr>
          <td>Withdraw Type : </td>
          <td><select  name="withdraw_type"> 
          <?php if( $_SESSION['withdraw_type']=="Manual"){
          echo "<option value='Manual'> Manual</option><option value='Instant'> Instant</option>";}
          else {
          echo "<option value='Instant'> Instant</option>
          	<option value='Manual'> Manual</option>"; } ?>
          	</select></td>
         </tr>
        
        
          <tr>
          <td> Started Date: </td>
          <td><input type="text" name="started_date" value="<?php  echo $started_date= date("Y/m/d"); ?>">  </td>
         </tr>
          
        
        <tr><td></td><td><input type="checkbox" name="msp" value="1" <?php if
         ($_SESSION['msp']=="1"){
         echo "checked";}
         else {} ?> > MySidePay </td> </tr>
         
         <tr><td></td><td><input type="checkbox" name="pm" value="1" <?php if
         ($_SESSION['pm']=="1"){
         echo "checked";}
         else {} ?> > PerfectMoney </td> </tr>
         <tr><td></td><td><input type="checkbox" name="btc" value="1" <?php if
         ($_SESSION['btc']=="1"){
         echo "checked";}
         else {} ?>> Bitcoin </td> </tr>
         <tr><td></td><td><input type="checkbox" name="payeer" value="1" <?php if
         ($_SESSION['payeer']=="1"){
         echo "checked";}
         else {} ?>> Payeer </td> </tr>
         <tr><td></td><td><input type="checkbox" name="adv" value="1"<?php if
         ($_SESSION['adv']=="1"){
         echo "checked";}
         else {} ?> > Advcash </td> </tr>
         <tr><td></td><td><input type="checkbox" name="pp" value="1" <?php if
         ($_SESSION['pp']=="1"){
         echo "checked";}
         else {} ?>> Paypal </td> </tr>
         <tr><td></td><td><input type="checkbox" name="payza" value="1"  <?php if
         ($_SESSION['payza']=="1"){
         echo "checked";}
         else {} ?>> Payza </td> </tr>
         <tr><td></td><td><input type="checkbox" name="net" value="1"  <?php if
         ($_SESSION['net']=="1"){
         echo "checked";}
         else {} ?>> Neteller </td> </tr>
         <tr><td></td><td><input type="checkbox" name="skrill" value="1" <?php if
         ($_SESSION['skrill']=="1"){
         echo "checked";}
         else {} ?>> Skrill </td> </tr>
         <tr><td></td><td><input type="checkbox" name="ltc" value="1" <?php if
         ($_SESSION['ltc']=="1"){
         echo "checked";}
         else {} ?> > Litecoin </td> </tr>
         <tr><td></td><td><input type="checkbox" name="btccash" value="1"  <?php if
         ($_SESSION['btccash']=="1"){
         echo "checked";}
         else {} ?>> BTC CASH </td> </tr>
         <tr><td></td><td><input type="checkbox" name="doge" value="1"  <?php if
         ($_SESSION['doge']=="1"){
         echo "checked";}
         else {} ?>> DOGE </td> </tr>
         <tr><td></td><td><input type="checkbox" name="eth" value="1" <?php if
         ($_SESSION['eth']=="1"){
         echo "checked";}
         else {} ?> > Etherium </td> </tr>
         <tr><td></td><td><input type="checkbox" name="ssl" value="1"  <?php if
         ($_SESSION['ssl']=="1"){
         echo "checked";}
         else {} ?>> SSL </td> </tr>
         <tr><td></td><td><input type="checkbox" name="evssl" value="1" <?php if
         ($_SESSION['evssl']=="1"){
         echo "checked";}
         else {} ?>> Ev SSL </td> </tr>
         <tr><td></td><td><input type="checkbox" name="ddos" value="1"  <?php if
         ($_SESSION['ddos']=="1"){
         echo "checked";}
         else {} ?>> DDOS PROTECTED </td> </tr>
         <tr>
          <td>Program Description: </td>
          <td><textarea type="text" name="details"  cols="30" rows="6" ><?php echo $_SESSION['details'];?></textarea>  </td>
          
           </tr >
         
         </tr >
         
            <tr>
          <td> </td>
          <td><input type="hidden" name="order_number" value="<?php echo $genrate_number;?>"> </td>
         </tr>
         <tr align="center"><td colspan="2"><input type="submit" name="submit"  ></td> </tr>

        
        </table> 	

     </form>

<?php
    
   


if (isset($_POST['submit'])){
    $group_id = $_POST['group_id'];
     
    
    $name= $_POST['name'];
    $url= $_POST['url'];
    
  

    $status= '0';
    $hyip_status= '2';
    
    $percents= $_POST['percents'];
    $min_spend= $_POST['min_spend'];
    $max_spend= $_POST['max_spend'];
    $ref_com= $_POST['ref_com'];
    $email= $_POST['email'];
    $min_withdraw= $_POST['min_withdraw'];
    $withdraw_type= $_POST['withdraw_type'];
    $date_added= date("Y/m/d");
    $started_date= $_POST['started_date'];
    
    $added = date('d-F-Y');
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
	$order_number= $_POST['order_number'];
	
	
	// for session 
	
	$_SESSION['name'] =$name;
	
    $_SESSION['url']=$url;
    
    $_SESSION['percents']=$percents;
    $_SESSION['ref_com']=$ref_com;
    $_SESSION['min_spend']=$min_spend;
    $_SESSION['max_spend']=$max_spend;
    $_SESSION['min_withdraw']=$min_withdraw;
    $_SESSION['withdraw_type']=$withdraw_type;
    $_SESSION['details']=$details;
    $_SESSION['started_date']= $started_date;
   $_SESSION['email']=$email;
   $_SESSION['msp']=$msp;
	$_SESSION['pm']=$pm;
	$_SESSION['btc']=$btc;
	$_SESSION['payeer']=$payeer;
	$_SESSION['adv']=$adv;
	$_SESSION['pp']=$pp;
	$_SESSION['payza']=$payza;
	$_SESSION['net']=$net;
	$_SESSION['skrill']=$skrill;
	$_SESSION['ltc']=$ltc;
	$_SESSION['btccash']=$btccash;
	$_SESSION['doge']=$doge;
	$_SESSION['eth']=$eth;
	$_SESSION['ssl']=$ssl;
	$_SESSION['evssl']=$evssl;
	$_SESSION['ddos']=$ddos;
  if ($ddos == ""){
    $ddos = 0;
    $payment_status = '0';
  }

        if ($name==""){
    echo '<script>alert("Please Enter Program name");</script>';
       echo "<script>window.open('add.php?cat=$cat_id','_self') </script>";
}
if ($url==""){
    echo '<script>alert("Please Enter Program URL");</script>';
       echo "<script>window.open('add.php?cat=$cat_id','_self') </script>";
}


    
        if ($email==""){
    echo '<script>alert("Please Enter your contact Email");</script>';
       echo "<script>window.open('add.php?cat=$cat_id','_self') </script>";exit(); 
}
        else {
       $q= "insert into hl_listings (group_id,name,url,status,hyip_status,percents,min_spend,max_spend,ref_com,ref_url,email,date_added,started_date,details,withdraw_type,min_withdraw,msp,pm,btc,payeer,adv,pp,payza,net,skrill,ltc,btccash,doge,eth,comodo_ssl,evssl,ddos,payment_status,added,last_payout) values 
         
                        ('$group_id','$name','$url','$status','$hyip_status','$percents','$min_spend','$max_spend','$ref_com',
                         '$ref_url','$email','$date_added','$started_date','$details','$withdraw_type','$min_withdraw','$msp','$pm','$btc','$payeer','$adv','$pp','$payza','$net','$skrill','$ltc','$btccash','$doge','$eth','$ssl','$evssl','$ddos','$payment_status','$added','$last_payout')";
                         $run=mysqli_query($con,$q); }

if($run){
     
     
     
		  echo "<script>window.open('paynow.php?pro=$url&cat=$group_id&item=programs&order=$order_number','_self') </script>";}
	 else {
	     
	 	echo "<script>window.location.href = previousUrl; </script>";
	 } 
	
    } 

	



?>
 

</div>




<?php
include ("footer.php");
?>