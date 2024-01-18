<html>
<head>
<style>
.ho{
background-color:lightgreen;
color:white;

}
.ho:hover{background-color:green;}

table,th,td{border:1px solid black;background-color:dodgerblue;}
body{background-color:rgb(234,200,255);}
.ho{border:1px solid;}
.ho{border-radius:10px;padding:10px;}
</style>
</head>
<center>
<body>
<form method="post">
<table>
<tr>
<br>
<th>id</th>
<th>name</th>
<th>book</th>
<th>author</th>
<th>publication</th>
</tr>
<br>
<input type="submit" name="tab" value="click here to view all the books information" class="ho">
<br>
</form>
</center>
<?php
$con = new mysqli("localhost","root","","user");
//include("updplib.php");
if(isset($_POST['tab']))
{

$sel = "SELECT * FROM book";
$v = $con->query($sel);
while($r = $v->fetch_array())
{
?>
<br>
<tr>
<td><?php echo $r['id']?></td>
<td><?php echo $r['name']?></td>
<td><?php echo $r['bookn']?></td>
<td><?php echo $r['author']?></td>
<td><?php echo $r['publication']?></td>
</tr>
<?php
}
}
?>
</body>
</html>