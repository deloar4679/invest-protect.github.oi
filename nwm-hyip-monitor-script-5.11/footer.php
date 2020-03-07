<?php

            $q= "select * from banners WHERE type = '8' AND status = 'paid' ORDER BY RAND() LIMIT 1"; 
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

</div>

<!-- start FOOTER -->
		<div id="footer">
		
			<!-- start LINKS -->
			<ul class="links">
			
				<li><a href="../contact.php">Contact Us</a></li>
				<li><a href="../advertise.php">Add Site</a></li>
				<li><a href="../ads.php">add Banner</a></li>
						<li><a href="../faq.php">FAQ</a></li>
			</ul>
			<!-- end LINKS -->
			
			<!-- start RIGHT -->
			<div class="right">
			
				<p class="copy">&copy; 2015 - 2018 <?php echo $site_name;?> All rights reserved.</p>
				<p class="designer">&bull; &nbsp; &nbsp; Design by <a href="https://www.newwebmaker.com/" target="_blank">NEW WEB MAKER</a>.</p>
				<div class="script">Software Developed By <a href="http://newwebmaker.com/" target="_blank">NewWebMaker</a></div>
				
				<div class="clr"></div>
			
			</div>
			<!-- end RIGHT -->
			
			<div class="clr"></div>
		
		</div>
		<!-- end FOOTER -->
	
	</div>
	<!-- end MAIN -->

</div>
<!-- end WRAP -->

</body>
    </html>
