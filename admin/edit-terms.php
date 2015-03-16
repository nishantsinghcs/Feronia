<?php
$privacy=$_POST['privacy'];
include_once('config.php');
$sql ="UPDATE termsconditions SET  terms =  '$privacy' ";
mysql_query($sql);
header("location:./terms-condition.php?doneit")



?>


