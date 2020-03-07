<?php
include ("config/db.php");


    
    $get_id = $_GET['link'];
   
$que = "select * from banners where banner_id=$get_id";
$run = mysqli_query($con,$que);
while ($result = mysqli_fetch_array($run)){
     $ref_url = $result['ref_url'];
     
    
    $target_url = $result['target_url'];
    $ref_url = $result['ref_url'];
    
    
 


      if($ref_url==""){
        header("Location: $target_url");
        exit();
        

    }
      if($ref_url=="0"){
        header("Location: $target_url");
        exit();
        

    }
    
    else{
        header("Location: $ref_url");
    }
   
       
       
    
    
}
    


?>