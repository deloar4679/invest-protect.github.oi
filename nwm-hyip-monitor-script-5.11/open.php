<?php
include ("config/db.php");


    
    $get_id = $_GET['link'];
   
$que = "select * from hl_listings where id=$get_id";
$run = mysqli_query($con,$que);
while ($result = mysqli_fetch_array($run)){
     $ref_url = $result['ref_url'];
     
    
    $pro_url = $result['url'];
    
    
 


      if($ref_url==""){
        header("Location: $pro_url");
        exit();
        

    }
      if($ref_url=="0"){
        header("Location: $pro_url");
        exit();
        

    }
    
    else{
        header("Location: $ref_url");
    }
   
       
       
    
    
}
    


?>