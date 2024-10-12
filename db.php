<?php
$conn=mysqli_connect('localhost','root','','feedback') or die('connection failed'.mysqli_error($conn));
$op=mysqli_query($conn,"select name,feedback_col from feedback_info");
?>