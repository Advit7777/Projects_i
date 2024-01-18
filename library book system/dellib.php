<?php
//include("updplib.php");
$con = new mysqli("localhost","root","","user");
$k = $_POST['id'];
$qu = "DELETE FROM book WHERE bookn = '$k'";
$ru = $con->query($qu);

?>