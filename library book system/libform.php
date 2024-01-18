<html>
<style>
div{margin-left:400px;margin-right:400px;border-radius:10px;padding:50px;border-style:inset;}
body{background-color:rgb(234,200,255);}
input{border:1px solid;}
input{border-radius:10px;padding:8px}
.btnn{background-color:lightgreen;}
.btnn:hover{background-color:green;color:white;}
</style>
<center>
<?php
$con = new mysqli("localhost","root","","user");

$sel = "SELECT * FROM book";
$fe = $con->query($sel);


?>
<div>
<body>
<form method="post">
<h1> The list of books we have </h1>
<select name="nm">
<?php
$sn = "SELECT";
while($fet = $fe->fetch_array()){
?>
<option><?php echo $fet['bookn'];?></option>
<?php
}
?>
</select>
<input type="submit" name = "se" value="search"class="btnn">
</form>
<form method = "POST">
<input type="text" name = "id" placeholder = "Enter the book name">
<input type="submit" name = "search" value="search"class="btnn">
</form>
</body>
</div>
<?php
$con = new mysqli("localhost","root","","user");

if(isset($_POST['se'])){
$ser = $_POST['nm'];
$s = "SELECT * FROM `book` WHERE bookn  = '$ser' ";
$que = $con->query($s);
//$que = "SELECT * FROM `book`";
while($row = $que->fetch_array())
{
echo "<h1>"."The book you have selected is"." ".$row['bookn']." "."the author of the book is"." ".$row['author']." publication "." ".$row['publication']."</h1>";
}

echo "<br>";
}
if(isset($_POST['search'])){

$book = $_POST['id'];
$q = "SELECT * FROM book WHERE bookn = '$book'";
$run = $con->query($q);
while($na = $run->fetch_array()){

echo "<h2>"." The book you have selected is ".$na['bookn']." the author of the book is  ".$na['author']." publication ".$na['publication']."</h2>";
}



}
?>
</center>
</html>