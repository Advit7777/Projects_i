<?php
$r = new mysqli("localhost","root","");
$cr = "CREATE DATABASE user";
$r->query($cr);
$rn = new mysqli("localhost","root","","user");
$tab = "CREATE TABLE customer(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
pass VARCHAR(50),
product VARCHAR(100),
usertype VARCHAR(50))";

$rn->query($tab);

?>