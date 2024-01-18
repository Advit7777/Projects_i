<?php
// first run libdatabase.php file to create database and table
?>
<html>
<head>
<style>
input[type=text], select {
  width: 100%;
  padding: 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type=password], select {
  width: 100%;
  padding: 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
}

input[type=submit]:hover {
  background-color: #45a049;
div{margin-left:400px;margin-right:400px;border-radius:10px;padding:50px;border-style:inset;}
body{background-color:rgb(234,200,255);}
</style>
</head>
<body>
<marquee><h1> Welcome to our library </h1><br></marquee>
<div>
<form method="POST">
<center><h2> Register the book here  </h2></center>
<input type="text" name="name" placeholder="Enter your name"/required>
<input type="password" name="pass" placeholder="Enter the password"/required>
<input type="text" name="book" placeholder="Enter the book name"/required>
<input type="text" name="au" placeholder="Enter the author name"/required>
<input type="text" name="pu" placeholder="Enter the publication"/required>
<h1>already have an account? <a href="liblogin.php">login</a></h1><br>
<h1>Want to check the book in our library<a href="tablelib.php">book stock</a></h1><br>
<input type="submit" name="sub" value="sign up">
</form>
</div>
<br>
</body>
</html>
<?php
$conn = new mysqli("localhost","root","","user");
if(isset($_POST['sub']))
{
$name = $_POST['name'];
$psd = $_POST['pass'];
$bn = $_POST['book'];
$auth = $_POST['au'];
$pub = $_POST['pu'];
$inst = "INSERT INTO book (name,password,bookn,author,publication) VALUES ('$name','$psd','$bn ','$auth','$pub')";
$conn->query($inst);
}
include("libform.php");
//include("tablelib.php");
include("updplib.php");
?>
