<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="UF-style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<div class="icon">File</div>
			<div class="content">
	<nav>
		<ul>
				<li><a href="index.html">Home</a></li>
		<li><a href="html.php">HTML</a></li>
		<li><a href="php.php">PHP</a></li>
		<li><a href="UF.php">Files</a></li>
		<li><a href="Admin Login.php">Login</a></li>
    <li><a href="feedback/feedback.php">Feedback</a></li>
    <li><a href="compiler.html">Compiler</a></li>
    <li><a href="review.php">Review</a></li>
		<li><a href="about.php">About Us</a></li>
		</ul>
	</nav>
				<p>Here you can see newly uploaded notes and other type of study material which will help you in your study. </p>
				<hr>
				<p><?php
$username="root";
$servername="localhost";
$password="";
$database="files";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select name,path from files_upload";
$result2=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result2)){
    ?>
  <b><?php echo $row['name']; ?></b>
  <a href="<?php echo $row["path"]; ?>">Go</a>
  <?php
}
  ?>
				</p>
			
		</div>
</div>

<section class="footer">
        <h4> Follow Me On</h4>
		<div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="images/facebook.png"></a>
                        <a href="#"><img src="images/Googlell.png"></a>
                        <a href="#"><img src="images/twitter.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="images/instagram.png"></a>

                    </div>
                </div>
        <p>Made With ♥ by GT</p>

    <!---------javascript toggle menu-------- -->


                </div>



    <!--footer-->


</body>