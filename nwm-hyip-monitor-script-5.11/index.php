

<?php
include ("header.php");

if (isset($_GET['view'])){
    $cat_id=$_GET['view'];
    if ($cat_id==1){
      include ("hot.php");  
    }
}
else {include ("hot.php");}
?>




<br>

<?php
if (isset($_GET['view'])){
    $cat_id=$_GET['view'];
    if ($cat_id==2){
      include ("trusted.php");  
    }
}
else {include ("trusted.php");}
?>

<br>
<?php
if (isset($_GET['view'])){
    $cat_id=$_GET['view'];
    if ($cat_id==3){
      include ("normal.php");  
    }
}
else {include ("normal.php");}
?>

<?php
if (isset($_GET['view'])){
    $cat_id=$_GET['view'];
    if ($cat_id==6){
      include ("scam.php");  
    }
}
else {}










include ("footer.php");
?>