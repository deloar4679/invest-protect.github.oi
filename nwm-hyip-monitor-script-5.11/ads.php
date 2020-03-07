<?php
include ("header.php");
?>
<div class="post_cat2">
    <div class="cat_bg2"> ADD BANNER</div>
<h4>
<p>Add your banners  with low price     </p>
<p>In order to add your banner on our site, please click on Buy Now
</p>

 </h4>
 
 

<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
      << Top Left Side Ads (468x60) ( static on all pages )
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=1 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
      <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Not Available<br>
      EXPIRY DATE :  $end<br>
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>
    
<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
      Top Right Side Ads (468x60) ( 5 Rotating on all pages ) >>
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=2 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
      <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
      
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>


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
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
<a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
     
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>
<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
      ^ Top on all pages Ads (728x90) (5 Rotating on all pages )
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=5 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
     <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
     
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>



<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
      << Left Side Ads (125x125) ( static on all pages )
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=3 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $end = $ban ['end'];
            $type = $ban ['type'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
     <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
     
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>



<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
       Right Side Ads (125x125) ( static on all pages ) >>
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=4 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
     <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
     
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>





<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
     Right Side Ads (160x60) ( static on all pages ) >>
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=7 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
      <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
     
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>




<table cellpadding="5" cellspacing="1"  style="  width: 100%; background-color: #a91919; border: 1px solid #bbb;" > 
 <tr>
  <td>
      Bottom Footer on all pages Ads (728x90) (5 Rotating on all pages )
 </td> 
 
 </tr>
 
 
 
  
       <?php

            $q= "select * from banners where type=8 order by price desc";
            $run = mysqli_query($con,$q);
            while ($ban=mysqli_fetch_array($run)){
            $banner_id = $ban['banner_id'];
            $price = $ban ['price'];
            $status = $ban ['status'];
            $type = $ban ['type'];
            $end = $ban ['end'];
         if ($status==notpaid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #61d24c; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      Available<br>
      <a href='banner.php?type=$type&bid=$banner_id'>Buy Now</a>
      
    
  
          </td>
  
 </tr>
         ";
         } 
              if ($status==paid){
                        echo "
          <tr>
  <td  style='text-align: center;  background-color: #babdb9; border: 1px solid #fff; color:black;'>
          
      <h3>$$price/week</h3>
      not Available<br>
      EXPIRY DATE :  $end<br>
      
      
    
  
          </td>
  
 </tr>
         ";
         } 


         }
         ?>

 
</table>
</div>




<?php


include ("footer.php");
?>