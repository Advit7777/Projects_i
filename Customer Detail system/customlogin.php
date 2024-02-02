<?php
session_start();
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
                .in{border-radius:3px;display:inline-block;width:50%;padding:5px;}
.log{background-color:red;color:white;}
.log:hover{background-color:darkred;}
            </style>
        </head>
        <br>
        <body>
            <div>
<form method= "post">
    <center>
        <br>
        <h1>Login Here </h1><br>
user<input type="text" name = "user" class = "in"placeholder = "Enter your name" required><br><br>
pass<input type="password" name = "passw"class = "in"placeholder = "Enter your password" required><br><br>
    <input type="radio" name="ru" value="customer"required>&nbsp;customer
    <input type="radio" name="ru" value="manager"required>&nbsp;manager
    <input type="radio" name="ru" value="admin"required>&nbsp;admin<br><br>
    
<input type="submit" name="sub" value="log in" class="log">
</center>
</form>
<?php
if(isset($_POST['sub'])){
$user = $_POST['user'];
$ps = $_POST['passw'];
$usertype = $_POST['ru'];
$sql = "SELECT * FROM `customer` WHERE `name`= '$user' AND `pass` = '$ps' AND `usertype` = '$usertype'";
$sq = $conn->prepare("SELECT * FROM `customer` WHERE `name`= ? AND `pass` = ? AND `usertype` = ?");
$sq->bind_param("sss",$user,$ps,$usertype);
$sq->execute();
$res = $sq->get_result()->fetch_all(MYSQLI_ASSOC);

if(count($res)>0){
session_start();
$_SESSION['use_r'] = $res[0]['name'];
$_SESSION['ema_l'] = $res[0]['email'];
$_SESSION['PRO'] = $res[0]['product'];
$_SESSION['user_t'] = $res[0]['usertype'];
header("location:customwel.php");
}
else{echo"Unable to login continue to <a href='customdet.php'>SIGN UP</a>";}
}
?>
</div>
</body>
</html>