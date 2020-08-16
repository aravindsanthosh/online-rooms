<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

session_start();
$rbookid=$_GET['id'];
//$login_id=$_GET['lid'];
//$room_id=$_GET['rid'];
//$room_type=$_GET['rtype'];
//$check_in=$_GET['cin'];
//$check_out=$_GET['cout'];
//$c_date=$_GET['cdate'];
//$nop=$_GET['nop'];

$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
$qry3="delete from tbl_room_booking where rbook_id='$rbookid'";
		mysql_query($qry3,$con);

}
header("cancellation.php");
?>
</body>
</html>
