<?php
session_start();
require("dbconnect.php");
?>
<?php
$sname=mysqli_real_escape_string($conn,$_POST['sname']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$mname=mysqli_real_escape_string($conn,$_POST['mname']);

if ($sname) {    //if title is not empty
	$sql = "insert into studentlist (Name,ID,dadName,momName) values ('$sname', '$number','$fname','$mname');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$meg="Message added";
} else {
	$meg="Message title cannot be empty";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<h1>導師 </h1>

<h3>導師訪視說明</h3>
<tr><td><input name="talk" type="text" id="talk" /></td></tr>

<h3>導師簽章</h3>
<tr><td><a href="">Yes</a> <a href="">No</a> </td></tr>

</body>
</html>
