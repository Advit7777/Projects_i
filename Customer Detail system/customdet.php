<?php
$s = "localhost";
$u = "root";
$p = "";
$db = "user";

$conn = new mysqli($s,$u,$p,$db);
?>
<html>
<head>
<style>
body{background-color:rgb(200,100,244);}
div{border:2px solid;background-color:rgb(100,200,100);margin-left:500px;margin-right:500px;border-style:inset;border-radius:5px;}
form{padding:30px;}
.fo{border-radius:3px;display:inline-block;width:50%;padding:5px;}
.sub{background-color:red;color:white;}
.sub:hover{background-color:darkred;}
</style>
</head>
<center>
<br><br>
<body>
<div>
<form action="" method = "POST"><br>
<marquee><h1>Welcome to our website</h1></marquee><br>
<h2> Sign Up Here </h2><br><br>
<input type="" name="name"placeholder = "Enter your name" class="fo" required><br><br>
<input type="email" name="email"placeholder = "Enter your email"class="fo" required><br><br>
<input type="password" name="psd"placeholder = "Enter password"class="fo" required><br><br>
<input type="text" name="product"placeholder = "Enter your product you want to buy"class="fo"><br><br>
<input type="text" name="usert"placeholder = "Enter your user type"class="fo"><br><br>
<h>already have an account?<a href="customlogin.php">login </a><br><br>
<input type="submit" value="SIGN UP"name="reg" class="sub">
</form>
</div>
</body>
</center>
</html>
<?php




if(isset($_POST['reg'])){
$user = $_POST['name'];
$em = $_POST['email'];
$pass = $_POST['psd'];
$prd = $_POST['product'];
$ut = $_POST['usert'];
$qr = "INSERT INTO `customer` (`name`,`email`,`pass`,`product`,`usertype`) VALUES ('$user','$em','$pass','$prd','$ut')";
$conn->query($qr);

}



?>