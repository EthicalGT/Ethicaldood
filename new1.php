<?php
$conn=mysqli_connect('localhost','root','','feedback');
$sql="select name,feedback_col from feedback_info";
$result=mysqli_query($conn,$sql);
while($r=mysqli_fetch_array($result)){
echo"name: ".$r['name'];
echo"feedback :".$r['feedback_col'];
}
?>