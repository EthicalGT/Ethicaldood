<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="swiper-bundle.min.css">
    </head>
    <body>
        <section class="sub-header">
            <nav>
                <a href="title.html"><img src="images/ethic.png"></a>
                <div id="nav">
	            <ul>
	         	    <li><a href="title.html">Home</a></li>
		            <li><a href="html.html">HTML</a></li>
	           	    <li><a href="php.html">PHP</a></li>
					<li><a href="insert.php">FILES</a></li>
	         	    <li><a href="">Question Papers</a></li>
	             	<li><a href="about.html">About Us</a></li>
	            </ul>
                </div>
            </nav>
            <h1>Files</h1>
        </section>
        <!------about us content-------->
        <section class="about-us">
            <div class="row">
                <div class="about-col">
                   </div>
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












    <!--footer-->
    <section class="footer">
        <h4> About Us</h4>
				<div class="footer_col">

                    <div class="social">

                        <a href="#"><img src="images/facebook.png"></a>
                        <a href="#"><img src="images/Googlell.png"></a>
                        <a href="#"><img src="images/twitter.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="images/instagram.png"></a>

                    </div>

					</div>
        <p>
            We're from a poor family background. and wanna help students by providing source codes of web development programming languages
            such as PHP, HTML etc.
        </p>
        <p>Made With ♥ by GT</p>
    </section>
    <!--------swiper js--
    <script src="swiper-bundle.min.js"></script>
    <!---javascript--
    <script src="script.js">

    </script>
    <!---------javascript toggle menu--------
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }

        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
--->
    </body>
    </html>
