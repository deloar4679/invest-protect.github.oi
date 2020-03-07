<?php
include ("header.php");
?>




<div class="post_cat">
    <div class="cat_bg"> PROGRAM DETAILS</div>
    
    
     <form action="delete_program.php?pro=<?php echo $_GET['pro']; ?>" method="post">

        <table >
        	 <tr>
          
              <?php 
              $pro=$_GET['pro'];

$que = "SELECT * from hl_listings where id=$pro    " ;
$run = mysqli_query($con,$que);
while ($result=mysqli_fetch_array($run)){
    $p_name=$result['name'];
   
     

                echo "<tr>
          <td><font color='red'>You Really want to delete ? </font></td>
          <td><h2> $p_name </h2></td>
         </tr>	";
}
              ?>
      
            
           
       	
     
          
         <tr align="center"><td colspan="2"><input type="submit" name="delete"   value="Delete Now"></td> </tr>

        
        </table> 	

     </form>

</div>
<?php 
if (isset($_POST['delete'])){
   
    $pro= $_GET['pro'];
    
	


	

$q1= "delete from hl_listings  where id=$pro ";
                         $run1=mysqli_query($con,$q1);

 if($run1){
    
   $pro= $_GET['pro'];
  
   	echo "<script>alert('Program Deleted Successful')</script>";
		  echo "<script>window.open('all_programs.php','_self') </script>";
	  }
	 else {
	 	echo "<script>alert('error')</script>";
	 } 
}

?>

<?php
include ("footer.php");
?>