<?php

session_start();
session_destroy();

 echo "<script>window.open('/admin','_self')</script>"; exit();
?>