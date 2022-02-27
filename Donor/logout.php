<?php

session_start();
session_destroy();
 unset($_SESSION['log_id']);
 unset($_SESSION);
 
echo "<script>window.location='../index.php'</script>";

?>