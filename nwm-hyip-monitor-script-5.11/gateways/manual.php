 <?php
 
 $que = "select * from gateways where id=1 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $msp_account_id=$result ['r_account'];
    


}

 $que = "select * from gateways where id=2 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $pm_account_id=$result ['r_account'];
    


}

 $que = "select * from gateways where id=3 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $payeer_account_id=$result ['r_account'];
    


}
 $que = "select * from gateways where id=4 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $btc_account_id=$result ['r_account'];
    


}
 $que = "select * from gateways where id=5 " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
   
     $adv_account_id=$result ['r_account'];
    


}
 
?>




<div class="site_content">
	<div align="center"><h1 style="color:green;"><span style="color:red;">Manual</span> payment</h1></div>
	<div align="center" class="member_sidebar" style="width:700px;margin: auto;margin-bottom:15px;">
		<table width="100%" syle="">
			<tr>
															<td width="33%">
							<table width="70%" class="widget-tbl">
								<tr>
									
										<tr class="titles">
											<td  align="center"><img src="/images/msp.png"></td>
											<td align="left"><?php echo $msp_account_id;?></td>
										
										</tr>
										<tr class="titles">
											<td  align="center"><img src="/images/p-money.png"></td>
											<td align="left"><?php echo $pm_account_id;?></td>
										
										</tr>
											<tr class="titles">
											<td  align="center"><img src="images/payeer.png"></td>
											<td align="left"><?php echo $payeer_account_id;?></td>
										
										</tr>
											<tr class="titles">
											<td  align="center"><img src="images/bitcoin.png"></td>
											<td align="left"><?php echo $btc_account_id;?></td>
										
										</tr>
											<tr class="titles">
											<td  align="center"><img src="images/adv.png"></td>
											<td align="left"><?php echo $adv_account_id;?></td>
										
										</tr>
									
										
									
									
									
									
									
									
									
									
														
													
								</tr>
							</table>
						</td>
																				
							</table>
					
												</tr>
		</table>
	</div></div>