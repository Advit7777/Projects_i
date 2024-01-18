<?php
session_start();
echo " WELCOME ".$_SESSION['user_r'];
echo " YOU HAVE REGISTERED  ".$_SESSION['book']." BOOK ";
include("tablelib.php");
include("updplib.php");
?>
<h1><a href="liblogout.php"> logout </a></h1>