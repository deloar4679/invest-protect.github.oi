 <?php 
                   
           
include ("header.php");
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['url']);
unset($_SESSION['percents']);
unset($_SESSION['ref_com']);
unset($_SESSION['min_spend']);
unset($_SESSION['max_spend']);
unset($_SESSION['min_withdraw']);
unset($_SESSION['withdraw_type']);
unset($_SESSION['details']);
unset($_SESSION['started_date']);
unset($_SESSION['msp']);
unset($_SESSION['pm']);
unset($_SESSION['btc']);
unset($_SESSION['payeer']);
unset($_SESSION['adv']);
unset($_SESSION['pp']);
unset($_SESSION['payza']);
unset($_SESSION['net']);
unset($_SESSION['skrill']);
unset($_SESSION['ltc']);
unset($_SESSION['btccash']);
unset($_SESSION['doge']);
unset($_SESSION['eth']);
unset($_SESSION['ssl']);
unset($_SESSION['evssl']);
unset($_SESSION['ddos']);

?>


<div class="post_cat">
    <div class="cat_bg"> Program Added  Successful</div>
    <br><br>
  New Program was added successful you can check all programs by click bellow<br><br>
<div class="wrap2">

<?php

echo "	<a href='all_programs.php' class='cat_bg2' style='color:white;'> CHECK PROGRAMS</a>";
?>
<br><br>
</div></div>

<?php
include ("footer.php");
?>