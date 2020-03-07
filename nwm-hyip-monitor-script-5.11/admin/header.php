

<?php
include ("db.php");
session_start();
if (!isset($_SESSION['username'])){
    echo "<script>window.open('/admin','_self')</script>"; exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/icons/favicon.png" />
<title>NWM Hyip LISTER - ADMIN PANEL.</title>
<meta name="description" content="hyip lister from nwm new web maker." />
<meta name="keywords" content="nwm hyip monitor, hyips rating scripit, hyip lister nwm," />

<link href="./templates//css/global.css" rel="stylesheet" type="text/css" />
<link href="./templates/css/site.css" rel="stylesheet" type="text/css" />
<link href="./templates/css/style.css" rel="stylesheet" type="text/css" />
<link href="./templates/css/animations.css" rel="stylesheet" type="text/css" />
<link href="./templates/css/programs.css" rel="stylesheet" type="text/css" />





	
</head>
<body>

<!-- start BG -->
<div id="bg"></div>
<!-- end BG -->

<!-- start WRAP -->
<div id="wrap">
	<!-- start HEADER -->
	<div id="header">
		<!--<a href="index.php?view=home" class="logo-top"></a>-->
		<a href="/index.php" class="logo"></a>
		
	</div>
	<!-- end HEADER -->
	
	
	<div class="clear"></div>
	<!-- start MAIN -->
	<div id="main">
	
		<!-- start NAVIGATION -->
		<ul id="navigation">
		
			<li><a href="dashboard.php" class="home"><span></span></a></li>
			<li class="devider"></li>
			
				
			<li><a href="#0">ALL PROGRAMS</a>
				<ul>
				    <li><a href="all_programs.php">All Programs</a></li>
			<?php

          	$q= "select * from categories";
          	$run = mysqli_query($con,$q);
          	while ($cat=mysqli_fetch_array($run)){
          	$cat_id = $cat['cat_id'];
          	$cat_name = $cat ['cat_name'];

           echo "
          
          
<li><a href='program.php?view=$cat_id'>$cat_name</a></li>
          
         ";
         }
         ?>
			


				</ul>
			</li>
				
				
			<li class="devider"></li>
			
				
			<li><a href="pending_programs.php" class="current">Pending programs ( <?php $que = "SELECT * from hl_listings where status=0  " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?> )</a></li>
		
		
			<li class="devider"></li>
	
	<li><a href="pending_banners.php" >Pending Banners ( <?php $que = "SELECT * from banners where payment=1 || payment=2" ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?> )</a></li>
			<li class="devider"></li>
			<li>
			    <div class="search_box">
<form action="search.php" method="get" enctype="multipart/form-data">
    <table>
        <tr><td>
    <input type="text" name="search_box" placeholder="search Hyip"></td>
    <td>
        <div id="search_submit">
    <input type="submit" name="search" value="Search">
    </div></td>
    </tr>
    </table>
</form>
</div></li>
						
			<li class="right"><a href="add_program.php" class="openRegister">Add Site</a></li>
			<li class="devider right"></li>
					
		</ul>
		<!-- end NAVIGATION -->

                 <div class="left_banner">
               <!-- start ACCOUNTMENU -->
			<div class="adminmenue">
			
               <ul>
                <li><a href="settings.php" >Settings</a></li>
				<li><a href="category.php" >EDIT CATEGORIES & PRICE</a></li>
				<li><a href="banner1.php" >Top Left Banner (468x60) </a></li>
				<li><a href="banner2.php" >Top Right Banner (468x60) </a></li>
				<li><a href="banner6.php" >Top Static Banner (728x90) </a></li>
				<li><a href="banner5.php" >Top Rotating Banner (728x90) </a></li>
				
				<li><a href="banner3.php" >Left Banner (125x125) </a></li>
				<li><a href="banner4.php" >Right Banner (125x125) </a></li>
				<li><a href="banner7.php" >Right Side Banner (160x60) </a></li>
				<li><a href="banner8.php" >Bottom Footer Rotating Banner (728x90) </a></li>
				
				
				
				
				
				
				<li><a href="logout.php" >Logout </a></li>
             </ul>
				
			
			</div>
			<!-- end ACCOUNTMENU -->
                  
                
            </div>

				<!-- start HOLDER -->
		<div id="holder">

		



