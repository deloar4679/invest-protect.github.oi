<?php
if(isset($_POST['install'])){
     
    $dbhost= $_POST['dbhost'];
    $dbuser= $_POST['dbuser'];
    $dbpassword= $_POST['dbpassword'];
    $dbname= $_POST['dbname'];
    
    
   

$f=fopen("../config/connect.php","w");
				fwrite($f,"<?php \n");
				fwrite($f,"//***************** Do not Edit / Change anything in this file ********************// \n");
				
				fwrite($f,"$"."dbhost='".$dbhost."';\n");
				fwrite($f,"$"."dbuser='".$dbuser."';\n");
				fwrite($f,"$"."dbname='".$dbname."';\n");
				fwrite($f,"$"."dbpassword='".$dbpassword."';\n");
				
				
				fwrite($f,"?>");
				fclose($f);



    
// Name of the file
$filename = 'sql.sql';
// MySQL host
$mysql_host = $dbhost;
// MySQL username
$mysql_username = $dbuser;
// MySQL password
$mysql_password = $dbpassword;
// Database name
$mysql_database = $dbname;

// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {
// Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

// Add this line to the current segment
    $templine .= $line;
// If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Reset temp variable to empty
        $templine = '';
    }
}
}


$domain = $_SERVER['SERVER_NAME'];
 

       $q1= "update settings set site_url='http://$domain/',
       support_email='admin@$domain' where id='1' ";
                         $run1=mysqli_query($con,$q1); 
 include('install_suc.php');