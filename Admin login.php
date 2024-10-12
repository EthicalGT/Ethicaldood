<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <div class="box">
        <div class="form">
		<form action="#" method="POST">
            <h2>
                Ethicaldood Admin
            </h2>
            <div class="inputBox">
                <input type="text" required="required" name="tb1">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required" id="pwd">
                <span>Password</span>
                <i></i>
            </div>
            <br><span>Show Pass</span>
            <div class="check-box">
            <input type="checkbox" onclick="showpwd()" value="1" id="checkboxbtn"/><label for="checkboxbtn"></label>
        </div>
            <div class="links">
                <a href="forgot_password/otp.php">Forgot password?</a>
                <a href="#">Want Help?</a>
            </div>
            <input type="submit" name="submit" value="Login">
        </div>
    </div>
    </form>
    <script>
        function showpwd(){
            var x=document.getElementById("pwd");
            if(x.type==="password"){
                x.type="text";
            }else{
                x.type="password";
            }
        }
    </script>
</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','','otp');
$query="select username, password from admin_login";
if(isset($_POST['submit'])){
    $result=mysqli_query($conn,$query);
    while($r=mysqli_fetch_array($result)){
if($_POST['tb1']==$r['username'] && $_POST['password']==$r['password']){

//echo"<audio src='music/welcome.mp3' autoplay='autoplay'>";

    header('location:Admin 2/index.php');
}
else{
echo"<audio src='music/access_denied.mp3' autoplay='autoplay'>";
}
}
}
?>
