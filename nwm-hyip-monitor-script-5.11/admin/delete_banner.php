 <?php 
                    include ("db.php");


         
         
                   
              $id =$_GET['bid'];

$q1= "delete from banners  where banner_id=$id ";
                         $run1=mysqli_query($con,$q1);

 if($run1){
   
     

               
}
              ?>
              
              
              
              
              
              <?php
include ("header.php");
?>


<div class="post_cat">
    <div class="cat_bg"> Banner Deleted  Successful</div>
    <br><br>
  your banner was deleted successful you can add more or go back by clicking bellow<br><br>
<div class="wrap2">

<?php
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
?>
<br><br>
</div></div>

<?php
include ("footer.php");
?>