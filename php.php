<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="sub-header-php">
            <nav>
                <a href="title.html"><img src="images/ethic.png"></a>
                <div id="nav">
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
                </div>
            </nav>
            <h1>PHP</h1>
        </section>
		<section class="key-features">
            <h2>PHP Topics</h2>
            <div class="row">
                <div class="new">
                    
                    <p>PHP Assignments covers all type of topics related to php language. It helps students to figure out the use of all concepts 
					of php. This Assignments contains questions which help students to use php concepts via solving assignments.             </p>
                    <a href="php 1.php" class="red-button">PHP</a>						
                </div>
                <div class="new">

                    <p>PHP subject university solved slips are provided by us for the students to help students. Slips are provided by savitribai phule pune
                       university to enhance student knowledge of php subject. Slips are 30 which are likewise to assignments.						   </p> 
	<a href="php 2.php" class="red-button">Advance PHP</a>
<html>
                </div>
                <div class="new">
                    
                    <p>PHP labbook consist of multiple topics and includes difficult to easy level of assignments for student by which they 
					are able to understand and complete all their power of understanding via implementing it in solving this assignments.
                    </p>
                    <?php
$username="root";
$servername="localhost";
$password="";
$database="php";
$conn=mysqli_connect($servername, $username, $password,$database);
$sql="select path from labbook";
$result2=mysqli_query($conn,$sql);
echo"<table>";
	while($row=mysqli_fetch_array($result2)){
 ?>
	<a href="<?php echo $row["path"]; ?>" class="red-button">Labbook</a>
	<?php 
	
	}
echo "</table>";
?>	

</html>
<html>					
                </div>
            </div>
        </section>
        


    <!--footer-->
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
        <p>
            We're from a poor family background. and wanna help students by providing source codes of web development programming languages
            such as PHP, HTML etc.
        </p>
        <p>Made With ♥ by GT</p>
    </section>


        </div>



    </section>

    <!---------javascript toggle menu-------- --
    <script>
        var navLinks = document.getElementById("navLinks");
        
        function showMenu(){
            navLinks.style.right = "0";
        }
        
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>-->

    </body>
    </html>