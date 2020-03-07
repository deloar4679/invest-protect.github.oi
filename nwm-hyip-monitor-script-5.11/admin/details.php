<?php
include ("header.php");
?>




<div class="post_cat">
    <div class="cat_bg"> PROGRAM DETAILS</div>
<?php
if (isset($_GET['pro'])){
 $pro=$_GET['pro'];

$que = "SELECT * from programs where p_id=$pro    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
    $pro_id= $result ['p_id'];
    $pro_name= $result ['p_name'];
    $pro_url= $result ['p_url'];
   $input = $pro_url;

// in case scheme relative URI is passed, e.g., //www.google.com/
$input = trim($input, '/');

// If scheme not included, prepend it
if (!preg_match('#^http(s)?://#', $input)) {
    $input = 'http://' . $input;
}

$urlParts = parse_url($input);

// remove www
$pro_url = preg_replace('/^www\./', '', $urlParts['host']);
    $pro_status= $result ['status'];
    $pro_plans= $result ['plans'];
    $ref_com= $result ['ref_com'];
    $min_deposit= $result ['min_deposit'];
    $max_deposit= $result ['max_deposit'];
    $min_withdraw= $result ['min_withdraw'];
    $withdraw_type= $result ['withdraw_type'];
    $desc= $result ['details'];
    $started_date= $result ['started_date'];
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

    $added_date= $result ['added_date'];
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
    $pro_status = "Paying";


}

if ($pro_status=="2"){
    $pro_status = "Waiting";

    
}
if ($pro_status=="3"){
    $pro_status = "Problem";

    
}
  if ($pro_status=="4"){
    $pro_status = "Not Paying";

    
}
if ($pro_status=="5"){
    $pro_status = "Not Monitoring";

    
}
  echo "
<div style='margin-bottom:10px'>
	<div class='frm-title'>
<div class='title1'>
        <div class='title_left'> <a href='open.php?link' target='_blank'>$pro_name</a></div>
        <div class='title_right'>
     <ul>
     <li><a href='edit_pro.php?pro=$pro_id'>Edit</a></li>
     <li><a href='delete_program.php?pro=$pro_id'>Delete</a></li>
     <li><a href='payouts.php?pro=$pro_id'>Add Payout</a></li>
     <li><a href='details.php?pro=$pro_id'>Add Vote</a></li>
        <li><a href='details.php?pro=$pro_id'>Details</a></li>
        <li><a href='image.php?img=$pro_id' target='_blank'>Monitor Button</a></li>
        
        
    </ul>
</div>
</div>
       


</div>

    <div class='frm-content'>
        <div class='forum-tblc'>
        <table width='100%' class='frm-tbl'>
                        <tr>
            <td width='100' align='center'>
                        <a ><img src='https://blinky.nemui.org/shot/larg?http://$pro_url/' width='100' height='100' /></a>
                         <td td width='310' align='left' valign='top'>
                <div class='frm_title'><a>INVESTMENT PLANS</a></div>
                <strong>$pro_plans</strong><br>
                
                
                 
                          ".(($pm == 1) ? '
                            <img src="templates/images/getways/1.png" width="25" height="25" title="perfectmoney">' : '')
                        .(($btc == 1) ? '
                            <img src="templates/images/getways/2.png" width="25" height="25" title="bitcoin">' : '')
                         .(($payeer == 1) ? '
                            <img src="templates/images/getways/3.png" width="25" height="25" title="payeer">' : '')
                         .(($adv == 1) ? '
                            <img src="templates/images/getways/4.png" width="25" height="25" title="adv cash">' : '')
                         .(($pp == 1) ? '
                            <img src="templates/images/getways/5.png" width="25" height="25" title="paypal">' : '')
                         .(($payza == 1) ? '
                            <img src="templates/images/getways/6.png" width="25" height="25" title="payza">' : '')
                         .(($neteller == 1) ? '
                            <img src="templates/images/getways/7.png" width="25" height="25" title="neteller">' : '')
                         .(($skrill == 1) ? '
                            <img src="templates/images/getways/8.png" width="25" height="25" title="skrill">' : '')
                         .(($ltc == 1) ? '
                            <img src="templates/images/getways/9.png" width="25" height="25" title="litecoin">' : '')
                         .(($btccash == 1) ? '
                            <img src="templates/images/getways/10.png" width="25" height="25" title="btc cash">' : '')
                         .(($doge == 1) ? '
                            <img src="templates/images/getways/11.png" width="25" height="25" title="doge coin">' : '')
                         .(($eth == 1) ? '
                            <img src="templates/images/getways/12.png" width="25" height="25" title="Etherium">' : '')
                         .(($comodo_ssl == 1) ? '
                            <img src="templates/images/getways/13.png" width="25" height="25" title="ssl Protected">' : '')
                         .(($evssl == 1) ? '
                            <img src="templates/images/getways/14.png" width="25" height="25" title="Evssl Protected">' : '')
                         .(($ddos == 1) ? '
                            <img src="templates/images/getways/15.png" width="25" height="25" title="Ddos Protected">' : '')
                         ."

            </td>
                        </td>
           
            
            <td align='left' width='335' >
                <div class='plan_details'>
            Min Deposit : <strong>$min_deposit $</strong> <br />
            Max Deposit : <strong>$max_deposit $</strong> <br />
            Min Withdraw : <strong>$min_withdraw $</strong> <br />
            Withdraw Type : <strong>$withdraw_type</strong> <br />
            Ref Commission : <strong>$ref_com </strong> <br />
            </div>
            </td>
            <td width='300' align='left' valign='top'>
            <div class='frm_last_post'>
            
                <div  ".(($pro_status == "Paying") ? ' class = "status" ' : 'class = "status_scam"').">$pro_status</div>
                <div>Monitoring Days: <strong>$added_days</strong></div>
                <div>Total Days: <strong>$total_days</strong></div>
                <span>
                        	Added Date :  $added_date <br>
                        	</span>
                          
                         <a href='https://www.EarnUpdates.com/?key=$pro_url&lid=$pro_id&ref=investlister.com' target='_blank'><img src='templates/images/am_s.jpg' alt='EarnUpdates.com' title='EarnUpdates.com' /></a>
                            
                             <a href='https://allmonitors24.com/index/search?search=$pro_url' target='_blank'><img src='templates/images/logotop.gif' border='0' width='18' height='18' /></a>
                             
                             <a target='_blank' href='https://allhyipmon.ru/monitor/$pro_url' ahmdis='pro_id'><img src='templates/images/ru.png'></a>
                            
                               
                             <a target='_blank' href='http://allmonitors.net/hyip/$pro_url/fav1129'><img align='top' src='templates/images/allmonitors.gif' width='18' height='18' ></a>
                             
                             <a href='http://www.allhyipmonitors.com/search/?keyword=$pro_url&status=$status&lid=$pro_id&ref=investlister.com' target='_blank'><img align='top' src='templates/images/ahmlogo18x18.png' width='18' height='18' ></a>
                             
                                </div>
            </td>
        </tr>
      
     
    
       
         
        </table><div class='desc'>$desc</div>
        </div>
        <img src='/image.php?img=$pro_id'>
        <textarea cols='30' rows='6'>
        <a href='https://investlister.com/details.php?pro=$pro_id'><img src='https://investlister.com/image.php?img=$pro_id' border='0'></a> 
        </textarea>
    </div>
           

</div>";
}
}
?>
</div>


<?php
include ("footer.php");
?>