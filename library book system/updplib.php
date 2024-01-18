<?php
$con = new mysqli("localhost","root","","user");

//$sel = "SELECT * FROM book";
//$fe = $con->query($sel);
$sele = "SELECT * FROM book";
$que = $con->query($sele);
$num = $que->num_rows;

if($num > 0){
while($fetc = $que->fetch_assoc()){

//echo "<br>";
//echo $fetc['bookn']."<br>";
//echo $fetc['id'];
}



}

?>
<center><br>
<div class="for">
<br>
<h1> UPADTE BOOKS HERE </h1>
<br>
<form method="post">
<input type="text" name = "id" placeholder="Enter the book id"/required><br><br>
<input type="text" name = "bookk" placeholder="Enter the book name"/required><br><br>
<input type="text" name = "a" placeholder="Enter the author name"/required><br><br>
<input type="text" name = "p" placeholder="Enter the publication"/required><br><br>
<input type="submit" name = "update" value="update"class="btn"><br>
</form>
<form method="post">
<input type="text" name = "idb" placeholder="ENTER THE BOOK NAME YOU WANT TO DELETE"class="dele">
<input type="submit" name = "del" value="delete"class="btn">
</form>
</div>
<style>
.for{margin-left:400px;margin-right:400px;border-radius:10px;padding:50px;border-style:inset;}
input{border:1px solid;}
input{border-radius:10px;padding:8px}
body{background-color:rgb(234,200,255);}
.dele{border:1px solid;border-radius:10px;padding:10px;width:70%;}
.btn{background-color:lightgreen;}
.btn:hover{background-color:green;color:white;}
</style>
</center>
<?php
if(isset($_POST['update'])){
$id = $_POST['id'];
$n = $_POST['bookk'];
$au = $_POST['a'];
$pu = $_POST['p'];
$q = "UPDATE book SET bookn = '$n', author ='$au', publication = '$pu'  WHERE id = '$id'";
$con->query($q);
}
if(isset($_POST['del'])){
$mn = $_POST['idb'];
//$b = $_POST['bookk'];
$c = "DELETE FROM book WHERE bookn = '$mn'";
$con->query($c);
}


?>