<?php
include ("header.php");

?>


<!-- start ACCOUNTBOX -->
			<div class="accountBox">
			
			
				
<div class="post_cat">
    <div class="cat_bg"> NWM HYIP MONITOR</div>
			
				
			
				
				<!-- start BOX -->
				<div class="box" id="summary">
				
				<a href="paying.php">	<p class="balance"><?php $que = "SELECT * from hl_listings where hyip_status='1'   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?><span>Paying Programs</span></p></a>
				<a href="waiting_programs.php">	<p class="balance"><?php $que = "SELECT * from hl_listings where hyip_status='2'   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?><span>Waiting Programs</span></p></a>
				<a href="pending_programs.php">	<p class="balance"><?php $que = "SELECT * from hl_listings where status=0  " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?><span>Pending Orders</span></p></a>
			
					
					
					
					<!-- start STATS -->
					<div class="stats left">
					
						<p class="title"> Stats and basic informations</p>
						
						<table cellpadding="0" cellspacing="0">
						    
						    
							<tr>
								<td>Total Programs:</td>
								<td class="value"><?php $que = "SELECT * from hl_listings   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?></td>



	<tr>
								<td>Paying Programs:</td>
								<td class="value"><?php $que = "SELECT * from hl_listings where hyip_status='1'   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?></td>
							</tr>
								<tr>
								<td>Waiting Programs:</td>
								<td class="value"><?php $que = "SELECT * from hl_listings where hyip_status='2'   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?></td>
							</tr>
							
								<tr>
								<td>Scam Programs:</td>
								<td class="value"><?php $que = "SELECT * from hl_listings where hyip_status='3' || hyip_status='4'   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?></td>
							</tr>
							</tr>
														<tr>
								<td>Total Banners:</td>
								<td class="value"><?php $que = "SELECT * from banners   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?></td>
							</tr>
																					<tr>
								<td>Active Banners:</td>
								<td class="value"><?php $que = "SELECT * from banners where status='paid'   " ;
$run = mysqli_query($con,$que);
echo $num = mysqli_num_rows($run);
?></td>
							</tr>
																				
													</table>
					
					</div>
					<!-- end STATS -->
					
				
					<!-- start STATS -->
					<div class="stats right">
					
						<p class="title">SOFTWARE INFORMATIONS</p>
						
						<table cellpadding="0" cellspacing="0">
							 	 
							<tr>
								<td>Script Name : </td>
								<td class="value">NWM HYIP MONITOR SCRIPT</td>
							</tr>
							<tr>
								<td>Script version</td>
								<td class="value">5.11</td>
							</tr>
							<tr>
								<td>Script created By :</td>
								<td class="value">www.newwebmaker.com</td>
							</tr>
								
													</table>
					
					</div>
					<div class="clr"></div>
					
					<!-- end STATS -->
					
					<div class="clr"></div>
					
					
				
					
				
			
			</div></div>
			<!-- end ACCOUNTBOX -->
</div>
<?php


include ("footer.php");


?>