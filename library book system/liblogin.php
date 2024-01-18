<?php
session_start();
$s = "localhost";
$u = "root";
$p = "";
$db = "user";

$conn = new mysqli($s,$u,$p,$db);
?>
<style>
body{background-color:rgb(234,200,255);}
div{margin-left:400px;margin-right:400px;border-radius:10px;padding:50px;border-style:inset;}
input{border:1px solid;}
input{border-radius:10px;padding:8px}
.bt{background-color:lightgreen;}
.bt:hover{background-color:green;color:white;}
</style>
<center>
<br>
<br>
<div>
<body>
<br>
<h1> LOGIN HERE </h1>
<form method= "post">
<input type="text" name = "user" placeholder="Enter your name"><br><br>
<input type="password" name = "passw" placeholder=" Enter password"/required><br><br>
<input type="submit" name="sub" value="log in"/required class="bt">
</body>
</div>
</center>
<?php
if(isset($_POST['sub'])){
$user = $_POST['user'];
$ps = $_POST['passw'];
$sql = "SELECT * FROM `book` WHERE `name`= '$user' AND `password` = '$ps'";
$sq = $conn->prepare("SELECT * FROM `book` WHERE `name`= ? AND `password` = ? ");
$sq->bind_param("ss",$user,$ps);
$sq->execute();
$res = $sq->get_result()->fetch_all(MYSQLI_ASSOC);
if(count($res)>0){
session_start();
$_SESSION['user_r'] = $res[0]['name'];
$_SESSION['book'] = $res[0]['bookn'];
header("location:wellib.php");
}
else{echo"Unable to login continue to <a href='reglibform.php'>SIGN UP</a>";} echo"</form>";
}
//$ps or '='
?>