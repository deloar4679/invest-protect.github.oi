 <?php 
                    include ("db.php");
$today= date("Y/m/d");

 $q5= "select * from banners where end='$today' ";
            $run5 = mysqli_query($con,$q5);
            while ($ban5=mysqli_fetch_array($run5)){
            $banner_id5 = $ban5['banner_id'];
         
         
            }      
              

 $payment = '0';
 $status='notpaid';
       $q6= "update banners set payment='$payment' , status='$status' where banner_id='$banner_id5' ";
                         $run6=mysqli_query($con,$q6);

              
                
                
                
                
   
              ?>
              
              
              
              
              



