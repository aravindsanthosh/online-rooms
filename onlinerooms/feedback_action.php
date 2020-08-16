<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

session_start();
$username=$_SESSION['username'];
$login_id=$_SESSION['login_id'];
$feedback=$_POST['feedback'];
$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
$qry="insert into tbl_feedback(login_id,feedback) values('$login_id','$feedback')";
mysql_query($qry,$con);
}

echo "<div>";
header("location:feedback.php");

?>
<br>
<div align="center">
<button><a href="user_home.php">BACK</a></button>
</div>

</body>
</html>
