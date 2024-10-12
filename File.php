<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="files-style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div role="button">
  <span class="glow"></span>
  <div>
    <?php
$username="root";
$servername="localhost";
$password="";
$database="files";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from files_upload";
$result2=mysqli_query($conn,$sql);
echo"result<br>";
	while($row=mysqli_fetch_array($result2)){
    ?>

  <a href="<?php echo $row["path"]; ?>"><br>Go</a>
  <?php
}
  ?>

    
  </div>

</div>
<!-- partial -->
  <script  src="./files-script.js"></script>

    </body>
    </html>