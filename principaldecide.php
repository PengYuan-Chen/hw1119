<?php
session_start();
require("dbconnect.php");
$Pcheck=mysqli_real_escape_string($conn,$_POST['Pcheck']);

if ($Pcheck) {    //if title is not empty
	$sql = "insert into form (comment_p) values ('$Pcheck');";
	mysqli_query($conn, $sql) or die("Insert failed, SQL query error"); //執行SQL
	$meg="Message added";
} else {
	$meg="Message title cannot be empty";
}
?>
<?php

$sql1 = "select * from form where 1;";
$result=mysqli_query($conn,$sql1) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<h1>表單狀況</h1>
<hr />
<table width="250" border="1">
  <tr>
    <td>表單編號</td>
    <td>學生學號</td>
    <td>狀況</td>
    <td>導師</td>
    <td>秘書</td>
    <td>校長</td>
    <td>補助金額</td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['ListID'] . "</td>";
	echo "<td>{$rs['stuID']}</td>";
	echo "<td>" , htmlspecialchars($rs['status']), "</td>";
	echo "<td>{$rs['comment_t']}</td>" ;
	echo "<td>{$rs['comment_s']}</td>";
	echo "<td>{$rs['comment_p']}</td></td>";
    echo "<td>" . $rs['give_u_money'] . "</td></tr>";
}
?>
</table>
</body>
</html>