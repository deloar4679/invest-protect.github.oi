<?php

include ('config/db.php');
if (isset($_GET['img'])){
 $pro=$_GET['img'];

$que = "SELECT * from hl_listings where id=$pro    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
    $pro_id= $result ['id'];
    $pro_name= $result ['name'];
    $pro_url= $result ['url'];
    $pro_status= $result ['hyip_status'];
   $last_payout= $result ['last_payout'];
    $added_date= $result ['started_date'];
//* monitor days  days
$now = time(); // or your date as well
$your_date = strtotime("$added_date");
$datediff = $now - $your_date;

$added_days = round($datediff / (60 * 60 * 24));
$add_days = "ADDED DAYS  : " . $added_days ;
// total days

$now = time(); // or your date as well
$your_date = strtotime("$started_date");
$datediff = $now - $your_date;

$total_days = round($datediff / (60 * 60 * 24));

$latpaid = "LAST Paid : " . $last_payout ;


 
}
}




header("Content-type: image/png");
$status1 =$statuts_not_monitor;
$status2 =$statuts_waiting;
$status3 =$statuts_paying;
$status4 =$statuts_problem;
$status5 =$statuts_not_paying;

$life_time='Monitored From: '.$days ;
$monitors= 'Total Monitors:  ' .$total_monitoes;


if ($pro_status=="1"){
    $img_png ="templates/images/button/1.png";
    
}

if ($pro_status=="2"){
    $img_png ="templates/images/button/2.png";
    
}
if ($pro_status=="3"){
    $img_png ="templates/images/button/3.png";
    
}

if ($pro_status=="4"){
    $img_png ="templates/images/button/4.png";
    
}
if ($pro_status=="5"){
    $img_png ="templates/images/button/5.png";
    
}




$date_now = date('Y-M-d');


$image = imagecreatefrompng($img_png);
$color = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);
$green = imagecolorallocate($image,49,218,0);
$half_blue = imagecolorallocate($image,4, 222, 208);
$yellow = imagecolorallocate($image,249, 186, 11);
$brown = imagecolorallocate($image,237, 84, 11);
$red = imagecolorallocate($image,255,0,0);
$blue = imagecolorallocate($image,255, 255, 255);
$gray= imagecolorallocate($image,188, 185, 189);
$white= imagecolorallocate($image,255, 255, 255);

$font = "templates/fonts/arial.ttf";



imagettftext($image,10,0,30,110,$yellow,$font,$pro_name);
imagettftext($image,10.3,0,19,185,$white,$font,$add_days);

imagettftext($image,8,0,20,213,$blue,$font,$latpaid);
imagettftext($image,12.5,0,36,265,$black,$font,$date_now);

imagepng($image);
        
        

?>



