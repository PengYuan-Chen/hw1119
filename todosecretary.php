<?php
session_start();
require("dbconnect.php");
if (isset($_GET['m'])){
	$msg="<font color='red'>" . $_GET['m'] . "</font>";
} else {
	$msg="Good morning";
}
$sql = "select * from todo where status = 0;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<h1>秘書審核</h1> 

<h3>審核結果</h3>
<table>

<tr><td><input type="checkbox" name="check">准許補助 <input name="money" type="money" id="money"> 元</td></tr>
<tr><td><input type="checkbox" name="check">未符合補助條件</td></tr>

</table>

<h3>審查意見</h3>
<input name="opinion" type="opinion" id="opinion">

<p><a href="">遞交</a></p>
</body>
</html>
