

<?php
include ("config/db.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/templates/images/favicon.png" />
<title><?php echo $site_title ;?></title>
<meta name="description" content="<?php echo $description ;?>" />
<meta name="keywords" content="<?php echo $keywords ;?>" />
<script src='https://www.google.com/recaptcha/api.js'></script>
<link href="../templates//css/global.css" rel="stylesheet" type="text/css" />
<link href="../templates/css/site.css" rel="stylesheet" type="text/css" />
<link href="../templates/css/style.css" rel="stylesheet" type="text/css" />
<link href="../templates/css/animations.css" rel="stylesheet" type="text/css" />
<link href="../templates/css/programs.css" rel="stylesheet" type="text/css" />





	
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
		<a href="/" class="logo"></a>
		
	</div>
	<!-- end HEADER -->
	<div class="clear"></div>
		<div id="banners" style="height:62px;padding:2px;margin:1px;">
	<div style="float:left; width:468px;height:60px;">
	
<center>
	<div>
	        <?php

            $q= "select * from banners WHERE type = '1' AND status = 'paid' "; 
            $run = mysqli_query($con,$q);
            $num=mysqli_num_rows($run);
        
        if ($num==true){
            
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<a href='go.php?link=$banner_id' target='_blank'><img src='$banner_url' style='overflow:hidden;width:468px;height:60px;' frameborder='0'></a>";
        }
        }
                
                else {
             
            echo "<a href='/ads.php' ><img src='images/banners/468.gif' style='overflow:hidden;width:468px;height:60px;' frameborder='0'></a>"; 
         }
            
         
         ?>
	    
	    
	    <center>
	         <a href="ads.php" style="color:white;">(ADVERTISE HERE)</a> </center>
		
	</div>
	<div style="text-align:center;">
		
	</div>
</center>
	</div>
	
	<div style="float:right;">
<?php

            $q= "select * from banners WHERE type = '2' AND status = 'paid' ORDER BY RAND() LIMIT 1"; 
            $run = mysqli_query($con,$q);
            $num=mysqli_num_rows($run);
            
             if ($num==true){
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<a href='go.php?link=$banner_id' target='_blank'><img src='$banner_url' style='overflow:hidden;width:468px;height:60px;' frameborder='0'></a>";
        
            }
         }
                else {
             
            echo "<a href='/ads.php' ><img src='images/banners/468.gif' style='overflow:hidden;width:468px;height:60px;' frameborder='0'></a>"; 
         }
           
         ?>
<center>
	         <a href="ads.php" style="color:white;">(ADVERTISE HERE)</a> </center>
	</div>
	</div>
	<div class="clear"></div><br>
	<!-- start MAIN -->
	<div id="main">
	
		<!-- start NAVIGATION -->
		<ul id="navigation">
		
			<li><a href="/" class="home"><span></span></a></li>
			<li class="devider"></li>
			
				
			<li><a href="#0">CATEGORIES</a>
				<ul>
				         <?php

          	$q= "select * from categories";
          	$run = mysqli_query($con,$q);
          	while ($cat=mysqli_fetch_array($run)){
          	$cat_id = $cat['cat_id'];
          	$cat_name = $cat ['cat_name'];

           echo "
          
          
<li><a href='index.php?view=$cat_id'>$cat_name</a></li>
          
         ";
         }
         ?>
			
				


				</ul>
			</li>
				
				
			<li><a href="../scam_programs.php">SCAM  &nbsp; Programs</a>
			
			<li class="devider"></li>
		
		
			<li>
			    <div class="search_box">
<form action="search.php" method="get" enctype="multipart/form-data">
    <table>
        <tr><td>
    <input type="text" name="search_box" placeholder="SEARCH HYIP"></td>
    <td>
        <div id="search_submit">
    <input type="submit" name="search" value="Search">
    </div></td>
    </tr>
    </table>
</form>
</div></li>

	<li><a href="#0">Advertise</a>
				<ul>
				    	<li class="right"><a href="../advertise.php" class="openRegister">Add Site</a></li>
				    	<li class="right"><a href="../ads.php" class="openLogin" class="last">Add banner</a></li>
				    	
				    	
				    </ul>
					
			<li><a href="../contact.php" class="current">Contact Us</a></li>
			
			<li class="devider"></li>
				<li><a href="skype:<?php echo $skype;?>?chat"><img src="templates/images/skype.png" width="20" height="20" style="margin-top:10px;"></a>
			</li>
				<li class="devider right"></li>
		</ul>
		<!-- end NAVIGATION -->

                 <div class="left_banner">
                     <div class="banner_title">LAST PAYOUTS</div>
                     <div class="payouts">
                         <?php 
                         
                         $q="select * from hl_statistics order by id desc limit 4";
                         $run = mysqli_query($con,$q);
                    while ($result =mysqli_fetch_array($run)){
                        
                        $amount = $result['amount'];
                        $p_name= $result['name'];
                        $p_url= $result['url'];
                        $transaction= $result['details'];
                        $date= $result['simple_date'];
                        ?>
                        <div class="transaction"><b>Amount : <?php echo $amount; ?> $</b>  <p><?php echo $date; ?> </p><p> <a href="<?php echo $p_url; ?>" target="_blank"><?php echo $p_name; ?> </a> </p>  </div> 
                    
                    <?php } ?>
                         
                         
                     </div>
                 <div class="banner_title">ADVERTISING </div>
                  <?php

            $q= "select * from banners where type='3' and status = 'paid' order by price desc";
            $run = mysqli_query($con,$q);
            $num=mysqli_num_rows($run);
               if ($num==true){
            
            
            
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<a href='go.php?link=$banner_id' target='blank'><img src='$banner_url'></a>";
        
        
         }}
         
                 else {
             
            echo "<a href='ads.php'><img src='images/banners/125.gif'></a>";
         }
            
            
            
            
            
            
            
            
         ?>
                
                   <br>
                 <b><a href="ads.php">ADVERTISE HERE</a></b>
            </div> 
            
            
            
            
            
          <div class="right_banner">
                     
              
                 <div class="banner_title">ADVERTISING </div>
                  <?php

            $q= "select * from banners where type='4' and status = 'paid' order by price desc";
            $run = mysqli_query($con,$q);
            $num=mysqli_num_rows($run);
               if ($num==true){
            
            
            
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<a href='go.php?link=$banner_id' target='blank'><img src='$banner_url'></a>";
        
        
         }}
         
                 else {
             
            echo "<a href='ads.php'><img src='images/banners/125.gif'></a>";
         }
            
            
            
            
            
            
            
            
         ?>
         
         
         
         
         
         
         
         
         
         <hr>
                  <?php

            $q= "select * from banners where type='7' and status = 'paid' order by price desc";
            $run = mysqli_query($con,$q);
            $num=mysqli_num_rows($run);
               if ($num==true){
            
            
            
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<a href='go.php?link=$banner_id' target='blank'><img src='$banner_url'></a>";
        
        
         }}
         
                 else {
             
            echo "<a href='ads.php'><img src='images/banners/160.gif'></a>";
         }
            
            
            
            
            
            
            
            
         ?>
                
                   <br>
                 <b><a href="ads.php">ADVERTISE HERE</a></b>
            </div> 
            
            
            

				<!-- start HOLDER -->
		<div id="holder">
	<?php

            $q= "select * from banners WHERE type = '6' AND status = 'paid' "; 
            $run = mysqli_query($con,$q);
              $num=mysqli_num_rows($run);
        
        if ($num==true){
            
            
            
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<center><a href='go.php?link=$banner_id' target='blank'><img src='$banner_url' border='0' width='575' height='90' /></a></center>";
        
        
         }}
         
                 else {
             
            echo "<center><a href='ads.php'><img src='images/banners/728.gif' border='0' width='575' height='90' /></a></center>";
         }
         ?>
         <br>
		<?php

            $q= "select * from banners WHERE type = '5' AND status = 'paid' ORDER BY RAND() LIMIT 1"; 
            $run = mysqli_query($con,$q);
              $num=mysqli_num_rows($run);
        
        if ($num==true){
            
            
            
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $banner_url = $ban['banner_url'];
            $target_url = $ban['target_url'];
          
        
        echo "<center><a href='go.php?link=$banner_id' target='blank'><img src='$banner_url' border='0' width='575' height='90' /></a></center>";
        
        
         }}
         
                 else {
             
            echo "<center><a href='ads.php'><img src='images/banners/728.gif' border='0' width='575' height='90' /></a></center>";
         }
         ?>


<center>
	         <a href="ads.php" style="color:white;">(ADVERTISE HERE)</a> </center>
<br>

