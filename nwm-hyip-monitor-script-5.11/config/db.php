<?php


include('connect.php');
$con = mysqli_connect ("$dbhost","$dbuser","$dbpassword","$dbname");

if($con){
    
}
else{
	header('location: install/install.php ');
}

session_start();



 $que = "select * from settings  " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $site_url=$result ['site_url'];
     $site_title=$result ['site_title'];
     $site_name=$result ['site_name'];
     $keywords=$result ['keywords'];
     $description=$result ['description'];
     $support_email=$result ['support_email'];
     $skype=$result ['skype'];


}


?>