

<?php

session_start();

if (isset($_SESSION['username'])){
    
      
    
    include ("dashboard.php"); exit();
    
    
    
    }
    
if (!isset($_SESSION['username'])){
    
      
    
    include ("login.php");
    
    
    
    }








?>