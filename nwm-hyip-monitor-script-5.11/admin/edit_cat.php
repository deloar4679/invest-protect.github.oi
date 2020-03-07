<?php
include ("header.php");
?>


<div class="post_cat">
    <div class="cat_bg"> EDIT CATEGORY</div>

     <form action="edit_cat.php" method="post">

        <table >
        <?php
       $cat_id = $_GET['cat'];
$q= "select * from categories where cat_id='$cat_id' ";
$run=mysqli_query($con,$q);
while ($get=mysqli_fetch_array($run)){
     $cat_id = $_GET['cat'];
    $cat_name= $get['cat_name'];
    $cat_price= $get['cat_price'];
    
   echo "<tr>
          <td>Category Name: </td>
          <td><input type='text' name='cat_name' value='$cat_name' > </td>
         </tr>	
         <tr>
          <td>Category Price: </td>
          <td><input type='text' name='cat_price' value='$cat_price' > </td>
         </tr>
          <tr>
          <td>Category Price: </td>
          <td><input type='hidden' name='cat' value='$cat_id '> </td>
         </tr>";  
}
?>
        

 <tr align="center"><td colspan="2"><input type="submit" name="submit" value="SAVE" ></td> </tr>
        
        </table> 	

     </form>




<?php

if (isset($_POST['submit'])){
    $cat_id = $_POST['cat'];
    $cat_name= $_POST['cat_name'];
    $cat_price= $_POST['cat_price'];
    
$q = "update categories set cat_name='$cat_name', cat_price='$cat_price'
where cat_id='$cat_id' ";  
$run = mysqli_query($con,$q);
if ($run){
   $cat_id = $_POST['cat'];
    echo "<script>alert('updated successful!');</script>";
    echo "<script>window.open('edit_cat.php?cat=$cat_id','_self') </script>"; 
    
}
else {
    echo '<script>alert("Error");</script>';
   echo "<script>window.open('edit_cat.php?cat=$cat_id','_self') </script>";
    
}
    
}
?>
</div>

<?php
include ("footer.php");
?>