<?php

session_start();
echo "<br>";
echo "<br>";
echo "<center>";
echo "<h1>";
if($_SESSION['user_t'] == 'admin'){echo "welcome ".$_SESSION['use_r']." your user type is ".$_SESSION['user_t']." YOUR EMAIL ID IS ".$_SESSION['ema_l'];}
else if($_SESSION['user_t'] == 'manager'){echo "welcome ".$_SESSION['use_r']." your user type is ".$_SESSION['user_t']." YOUR EMAIL ID IS ".$_SESSION['ema_l'];}
else{
echo "<center>"."welcome"." ".$_SESSION['use_r']." "."YOUR EMAIL ID IS ".$_SESSION['ema_l']." you have ordered  ".$_SESSION['PRO'] ;

echo "<table>"."<br>"." your user type is ".$_SESSION['user_t']."<br>";

//echo "<td><tr>".$_SESSION['use_r'] ."</td></tr><BR>"; 
echo "<td><tr>".$_SESSION['ema_l'] ."</td></tr><BR>"; 
echo "<td><tr>".$_SESSION['PRO'] ."</td></tr><br>"; 
echo "<td><tr>".$_SESSION['user_t'] ."</td></tr> "; 

echo "</table>";
echo "</center>";}

?>
<html>
<br><br>
<head>
<style>
a{text-decoration:none;}
a{border: 3px solid black;}
a{background-color:red;}
a{color:white;}
a:hover{background-color:darkred;}
body{background-color:rgb(100,200,100);}
</style>
</head>
<center>
<body>
<a href="customlogout.php">logout</a>
</body>
</center>
</html>