<?php
include ("db.php");

                 


         
         
             
include ("header.php");
?>


<div class="post_cat">
    <div class="cat_bg"> Banner Reset  Successful</div>
    <br><br>
  your banner was Reset successful you can add  or edit go back by clicking bellow<br><br>
<div class="wrap2">

<?php


if (isset($_GET['bid'])){
          	    $id =$_GET['bid'];
          	    $type =$_GET['type'];
         $banner_url = '';
         $target_url = '';
         $ref_url = '';
         $email = '';
         $status = 'notpaid';
$q1= "update banners set banner_url='$banner_url', target_url='$target_url', ref_url='$ref_url', status='$status', email='$email'  where banner_id='$id' ";
                         $run1=mysqli_query($con,$q1);
                 
          	 
$back =$_GET['type'];
if ($back==1 ){
    
    $back = 'banner1.php' ;
    
}
if ($back==2 ){
    
    $back = 'banner2.php' ;
    
}
if ($back==3 ){
    
    $back = 'banner3.php' ;
    
}
if ($back==4 ){
    
    $back = 'banner4.php' ;
    
}
if ($back==5 ){
    
    $back = 'banner5.php' ;
    
}
if ($back==6 ){
    
    $back = 'banner6.php' ;
    
}
if ($back==7 ){
    
    $back = 'banner7.php' ;
    
}
if ($back==8 ){
    
    $back = 'banner8.php' ;
    
}
echo "	<a href='$back' class='cat_bg2' style='color:white;'> ADD Return Back</a>";

}
?>
<br><br>
</div></div>

<?php
include ("footer.php");
?>