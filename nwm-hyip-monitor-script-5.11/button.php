<?php

include ('db.php');
if (isset($_GET['img'])){
 $pro=$_GET['img'];

$que = "SELECT * from programs where p_id=$pro    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
    $pro_id= $result ['p_id'];
    $pro_name= $result ['p_name'];
    $pro_url= $result ['p_url'];
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

if ($pro_status=="0"){
    $pro_status = "WAITING";


}

if ($pro_status=="1"){
    $pro_status = "PAYING";

    
}
if ($pro_status=="2"){
    $pro_status = "PROBLEM";

    
}
  if ($pro_status=="3"){
    $pro_status = "SCAM";

    
}
if ($pro_status=="4"){
    $pro_status = "CLOSED";

    
}
 
}
}




header("Content-type: image/png");
$status0 =$statuts_not_monitor;
$status1 =$statuts_waiting;
$status2 =$statuts_paying;
$status3 =$statuts_problem;
$status4 =$statuts_not_paying;
$status5 =$statuts_trusted;
$life_time='Monitored From: '.$days ;
$monitors= 'Total Monitors:  ' .$total_monitoes;





$img = "button.png";
$image = imagecreatefrompng($img);
$color = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);
$green = imagecolorallocate($image,49,218,0);
$half_blue = imagecolorallocate($image,4, 222, 208);
$yellow = imagecolorallocate($image,249, 186, 11);
$brown = imagecolorallocate($image,237, 84, 11);
$red = imagecolorallocate($image,255,0,0);
$blue = imagecolorallocate($image,255, 255, 255);
$gray= imagecolorallocate($image,188, 185, 189);

$font = "templates/fonts/arial.ttf";
imagettftext($image,13.5,0,30,74,$yellow,$font,$status0);
imagettftext($image,20.5,0,30,76,$gray,$font,$status1);
imagettftext($image,20.5,0,45,76,$green,$font,$status2);
imagettftext($image,18.5,0,35,76,$brown,$font,$status3);
imagettftext($image,18.5,0,18,76,$red,$font,$status4);
imagettftext($image,14.5,0,5,73,$half_blue,$font,$status5);
imagettftext($image,14,0,10,109,$black,$font,$pro_name);
imagettftext($image,10,0,14,180,$black,$font,$site);
imagettftext($image,10,0,37,200,$black,$font,$monitors);
imagettftext($image,12,0,40,230,$blue,$font,$today_date);

imagepng($image);
        
        

?>



