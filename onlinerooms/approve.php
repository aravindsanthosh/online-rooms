<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
$roomid=$_POST['roomid'];
$rbookid=$_POST['rbookid'];
//echo $rbookid;
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
$qry="update tbl_room_booking set room_id='$roomid' where rbook_id='$rbookid'";	
mysql_query($qry,$con);

}
?>

</body>
</html>
