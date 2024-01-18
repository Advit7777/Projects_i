<?php
$r = new mysqli("localhost","root","");
$cr = "CREATE DATABASE user";
$r->query($cr);
$rn = new mysqli("localhost","root","","user");
$tab = "CREATE TABLE book(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
tc INT(20) NOT NULL,
date VARCHAR(40) NOT NULL,
itemco INT(20) NOT NULL,
author VARCHAR(100),
publication VARCHAR(50))";

$rn->query($tab);

?>