<?php

echo $domain = $_SERVER['SERVER_NAME'];
 

 $site_url=$_POST ['site_url'];
     $site_title=$_POST ['site_title'];
     $site_name=$_POST ['site_name'];
     $keywords=$_POST ['keywords'];
     $description=$_POST ['description'];
     $support_email=$_POST ['support_email'];
     $skype=$_POST ['skype'];

   
   
    
	

       

  
       
           
       $q1= "update settings set site_url='$site_url',
       site_title='$site_title',site_name='$site_name',
       keywords='$keywords', description='$description',support_email='$support_email', skype='$skype' where id='1' ";
                         $run1=mysqli_query($con,$q1); 

?>