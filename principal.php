<?php
session_start();
require("dbconnect.php");
$sql ="select * from form;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<h1>校長簽章</h1> 
<form method="post" action="principaldecide.php">
<table>

<tr><td><input name="Pcheck" type="text" id="Pcheck" /></td></tr>

</table>
<input type="submit" name="Submit" value="送出" />
</form>
</body>
</html>