<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ethicaldood</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <body>
	<div class="box">
	<span class="borderline"></span>
	<form method="POST" enctype="multipart/form-data">
	<h2>File</h2>
	<div class="inputbox">
	<input type="text" required="required" name="t1">
	<span>Filename</span>
	<i></i>
    </div>
    <div class="inputbox">
	<input type="text" required="required" name="tb2" value="pdf2/">
	<span>Path</span>
	<i></i>
	</div>
	<div class="inputbox2">
	<label for="uploadbtn">Upload File<input type="file" id="pdf" class="uploadbtn" name="myfile"></label>
	<i></i>
	</div>
	
    <input type="submit" name="submit" value="Insert" class="show-modal">
	</form>
	</div>
	</body>
	</html>
	<?php 
	
$path=$_POST['tb2'];

$conn=mysqli_connect("localhost","root","","files");
if($conn){
$filename=$_FILES['myfile']['name'];
$destination='pdf2/'.$filename;
$extension=pathinfo($filename,PATHINFO_EXTENSION);
$file=$_FILES['myfile']['tmp_name'];
if(isset($_POST['submit'])){
if(!in_array($extension,['zip','txt','pdf','png','docx'])){
echo"<script>alert('Your file extension must be .zip, .pdf, .png, .txt..!');</script>";
}
elseif($_FILES['myfile']['size']> 10000000){
echo"file is too large..!";
}
else{
if(move_uploaded_file($file,$destination)){
$sql= "insert into files_upload(name,path)
values('$filename','$path')";
if(mysqli_query($conn,$sql)){
echo"<script>window.location='alert true.php';</script>";
}else{
	echo"<script>window.location='alert false.php';</script>";
}
}
}

}}
?>