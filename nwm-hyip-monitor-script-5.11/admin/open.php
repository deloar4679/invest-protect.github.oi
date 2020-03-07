<?php
include ("db.php");


    
    $get_id = $_GET['link'];
   
$que = "select * from programs where p_id=$get_id";
$run = mysqli_query($con,$que);
while ($result = mysqli_fetch_array($run)){
     $ref_url = $result['ref_url'];
     
    
    $pro_url = $result['p_url'];
    
    
 


      if($ref_url==""){
        header("Location: http://$pro_url");
        exit();
        

    }
      if($ref_url=="0"){
        header("Location: http://$pro_url");
        exit();
        

    }
    
    else{
        header("Location: $ref_url");
    }
   
       
       
    
    
}
    


?>