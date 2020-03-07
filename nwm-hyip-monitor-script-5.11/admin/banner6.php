<?php
include ("header.php");
?>


<div class="post_cat">
    <div class="cat_bg"> ADD OR REMOVE BANNERS</div>


<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
      
^ Top on all pages Ads (728x90) (static on all pages )
 </td> 
 
 </tr>
 
 
 
  
       <?php

          	$q= "select * from banners where type=6 order by price desc";
          	$run = mysqli_query($con,$q);
          	while ($ban=mysqli_fetch_array($run)){
          	$banner_id = $ban['banner_id'];
          	$banner_url = $ban['banner_url'];
          	$target_url = $ban['target_url'];
          	$price = $ban ['price'];
          	$status = $ban ['status'];
          	$type = $ban ['type'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
			Space Available<br>
			<a href='add_banner.php?type=$type&bid=$banner_id'>Add Banner</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='edit_banner.php?type=$type&bid=$banner_id'>Edit</a>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='delete_banner.php?bid=$banner_id&type=$type'>Delete</a>
			
		
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
			Space Not Available<br>
			<a href='edit_banner.php?type=$type&bid=$banner_id'>Edit</a>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='delete_banner.php?bid=$banner_id&type=$type'>Delete</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='reset_banner.php?bid=$banner_id&type=$type'>Reset</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='$banner_url' target='_blank'>view banner</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href='$target_url' target='_blank'>Target Url</a>
			
			
		
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>



        
       	<br>

    <a href="new_banner.php?type=6" class="cat_bg2" style="color:white;"> ADD NEW BANNER SPACE</a>
    <br><br>
</div>

<?php
include ("footer.php");
?>