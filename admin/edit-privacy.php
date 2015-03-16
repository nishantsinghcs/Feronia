<?php
$privacy=$_POST['privacy'];
include_once('config.php');
$sql ="UPDATE privacypolicy SET  privacy =  '$privacy' ";
mysql_query($sql);
header("location:./privacypolicy.php?doneit")



?>


