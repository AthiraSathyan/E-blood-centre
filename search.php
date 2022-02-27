<?php
include 'config.php';
$blood = $_POST['blood_group'];
$Loc = $_POST['location'];

echo"<script>window.location='view_result.php?blood=$blood&&loc=$Loc'</script>";

?>