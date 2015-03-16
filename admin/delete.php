<?php
include_once('./config.php');
$id=$_POST['id'];
$img_name=$_POST['img-name'];
mysql_query("DELETE FROM homepage_images WHERE id='$id'");

if(mysql_errno()){
    echo "MySQL error ".mysql_errno().": "
         .mysql_error()."\n<br>When executing <br>\n\n<br>";
}
unlink('../uploads/' . $img_name);
 header("location:index.php?ImageDeleted");
?>