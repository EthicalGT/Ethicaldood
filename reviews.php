<?php
include_once('db.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="stylesheet" href="review.css">
        <link rel="stylesheet" href="swiper-bundle.min.css">
    </head>
    <body>
        <section class="sub-header">
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
          </section>
<footer class="feedback-info">
        <div class="main">
            <div class="row">
                <h1>Re<span>views</span></h1><br>
                </div>
              </div>
            </footer>
  <section>
    <table class="tbl">
        <thead>
          <tr>
          <th>Name</th>
          <th>Feedback</th>
        </tr>
      </thead>
    </body>
      </html>
      <?php
      while($r=mysqli_fetch_array($op)){
        echo"
    <tbody>
        <tr>
          <td>".$r['name']."</td>
          <td>".$r['feedback_col']."</td>
        </tr>
      </tbody>";
  }
  echo"</table>";
    ?>
    <html><body>
</section>
</body>
</html>
