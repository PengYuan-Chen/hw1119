<?php
session_start();
require("dbconnect.php");   //引入一個php檔案
$sql ="select * from studentlist;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");    //mysqli_
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<h2>貧困學生補助經費申請表</h2>
<form method="post" action="todoteacher.php">
申請人(學生)：<input type="text" id="sname" name="sname">
學號：<input type="text" id="number" name="number">
<h4>家庭狀況</h4>
<table border="1">
<tr>
<td>稱謂</td>
<td>姓名</td>
</tr>
<tr>
<td>父</td>
<td><input type="text" id="fname" name="fname"></td>
</tr>
<tr>
<td>母</td>
<td><input type="text" id="mname" name="mname"></td>
</tr>
</table>

<h4>申請補助種類</h4>
 
<input type="checkbox" value="1" name="c_1">低收入戶<br>
<input type="checkbox" value="2" name="c_2">中低收入戶<br>
<input type="checkbox" value="3" name="c_3">家庭突發狀況<br>
<input type="submit" name="Submit" value="送出" />
</form>
</body>
</html>