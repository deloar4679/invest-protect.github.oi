<?php

$con = mysqli_connect ("localhost","investli_monitor","xg}-S!CV7LJX","investli_monitor");

if(mysqli_connect_error()){
	echo "Database Connection Error";
}

session_start();
?>