<?php
include ("header.php");

?>

<div class="post_cat2">
<?php

    echo " <div class='cat_bg2'>ALL WAITING PROGRAMS</div>";
  

$que = "SELECT * from hl_listings where hyip_status='2'  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
    $id= $result ['id'];
    $name= $result ['name'];
    $url= $result ['url'];
    $last_payout= $result ['last_payout'];    
    $status= $result ['status'];
    $pro_status= $result ['hyip_status'];
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

    $added_date= $result ['started_date'];
//* monitor days  days
$now = time(); // or your date as well
$your_date = strtotime("$added_date");
$datediff = $now - $your_date;

$added_days = round($datediff / (60 * 60 * 24));

// total days

$now = time(); // or your date as well
$your_date = strtotime("$started_date");
$datediff = $now - $your_date;

$total_days = round($datediff / (60 * 60 * 24));

if ($pro_status=="1"){
    $pro_status = "PAYING";


}

if ($pro_status=="2"){
    $pro_status = "WAITING";

    
}
if ($pro_status=="3"){
    $pro_status = "PROBLEM";

    
}
  if ($pro_status=="4"){
    $pro_status = "NOT PAYING";

    
}
if ($pro_status=="5"){
    $pro_status = "NOT MONITORING";

    
}
  ?>
  

  




























<div id="outboxprogram">
<div class="program HOT PROGRAMS ">
<div class="frm-title2">
<div class="title1">
        <div class="title_left"> <a href="open.php?link=<?php echo $id; ?>" target="_blank"><?php echo $name; ?></a></div>
        <div class="title_right">
       <?php
echo "
  
            
      <ul>
     <li><a href='edit_pro.php?pro=$id'>Edit</a></li>
     <li><a href='delete_program.php?pro=$id'>Delete</a></li>
     <li><a href='payouts.php?pro=$id'>Add Payout</a></li>
      <li><a href='our_investment.php?pro=$id'>Our Investment</a></li>
        <li><a href='/details.php?pro=$id'>Details</a></li>
        <li><a href='/image.php?img=$id' target='_blank'>Monitor Button</a></li>
        
        
    </ul> "; ?>
</div>
</div>
       


</div>

<div class="main clearfix">
<div class="col1 clearfix">
    <img src="https://blinky.nemui.org/shot/larg?<?php echo $url; ?>/" style="background-color:rgba(0, 0, 0, 0.3);border:solid 1px #FFFFFF;" alt="luxearn screenshot">
  
    
    <div class="allmonitors">





                 
   
   
   
   
   
   
   
    </div>    
    
</div>

<div class="col2">
  
  
  
 
  <div class="percents"><?php echo $plans;?></div><font color="#0000">
  <div class="amountdiv" style="margin-top: 1px;">Min/Max Investment: <b class="min"><?php echo $min_spend;?></b> / <b class="max"><?php echo $max_spend;?></b></div>
  <div class="referral" style="margin-top: 1px;">Bonus Referral:  <b><?php echo $ref_com;?></b></div>
  <div class="withdrawal" style="margin: 2px 0;">Withdrawal: <b>
      
      
      
  <font color="#b304a5"><?php echo $withdraw_type;?></font>
    </b>
  </div>
  <!--div class="clearall"></div-->
  <div class="clearall"></div>
      <div class="investment" style="margin-top: 1px;">Our Investment: <font color="#218102"><b>$ <?php echo $our_investment;?></b></font></div>
  <div class="others">Payment Processors:</div>
    <div class="paysystems"><?php echo "
                   ".(($pm == 1) ? '
                            <img src="templates/images/getways/1.png" width="20" height="20" title="perfectmoney">' : '')
                        .(($btc == 1) ? '
                            <img src="templates/images/getways/2.png" width="20" height="20" title="bitcoin">' : '')
                         .(($payeer == 1) ? '
                            <img src="templates/images/getways/3.png" width="20" height="20" title="payeer">' : '')
                         .(($adv == 1) ? '
                            <img src="templates/images/getways/4.png" width="20" height="20" title="adv cash">' : '')
                         .(($pp == 1) ? '
                            <img src="templates/images/getways/5.png" width="20" height="20" title="paypal">' : '')
                         .(($payza == 1) ? '
                            <img src="templates/images/getways/6.png" width="20" height="20" title="payza">' : '')
                         .(($neteller == 1) ? '
                            <img src="templates/images/getways/7.png" width="20" height="20" title="neteller">' : '')
                         .(($skrill == 1) ? '
                            <img src="templates/images/getways/8.png" width="20" height="20" title="skrill">' : '')
                         .(($ltc == 1) ? '
                            <img src="templates/images/getways/9.png" width="20" height="20" title="litecoin">' : '')
                         .(($btccash == 1) ? '
                            <img src="templates/images/getways/10.png" width="20" height="20" title="btc cash">' : '')
                         .(($doge == 1) ? '
                            <img src="templates/images/getways/11.png" width="20" height="20" title="doge coin">' : '')
                         .(($eth == 1) ? '
                            <img src="templates/images/getways/12.png" width="20" height="20" title="Etherium">' : '')
                         .(($comodo_ssl == 1) ? '
                            <img src="templates/images/getways/13.png" width="20" height="20" title="ssl Protected">' : '')
                         .(($evssl == 1) ? '
                            <img src="templates/images/getways/14.png" width="20" height="20" title="Evssl Protected">' : '')
                         .(($ddos == 1) ? '
                            <img src="templates/images/getways/15.png" width="20" height="20" title="Ddos Protected">' : '')
                         ." "; ?>  </div>
    
    
  </div>





 
 
  <!--div class="clearall"></div-->
  <div class="clearall"></div>

     <?php echo "
               
                <div  ".(($pro_status == "PAYING") ? ' class = "status" ' : 'class = "status_waiting"').">$pro_status</div>
                "; ?>
   
    <div class="added" style="margin-top: 1px;">Added: <b><?php echo  $added; ?></b></div><br>
    <div class="lastpayout" style="margin-top: 1px;">Last Payout: <b style="color:#F75D1B"><?php echo  $last_payout; ?></b></div><br>
  <div class="monitored" style="margin-top: 1px;"><b>Monitoring :</b> </font>
    <div class="detail_monitored"> <b><?php echo  $added_days; ?></b>days</div>
 <br><br><br>
<?php include ("monitors.php"); ?>  
                    <div class="options"></div> 

    </div>


</div>
<div class="description"></div>


</div>
</div>

<?php
}
?>





</div>

<?php
include ("footer.php");

?>