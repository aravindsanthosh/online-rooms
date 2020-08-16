<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$rtype=$_POST['r1'];
$rname=$_POST['rname'];
$rdescription=$_POST['rdescription'];
$rate=$_POST['rate'];
//echo $rtype;
$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
$qry="insert into tbl_room(room_type,room_name,room_descr,room_price) values('$rtype','$rname','$rdescription','$rate')";
mysql_query($qry,$con);
//echo "success";
}

echo "<div>";
$qry="select * from tbl_room";
$g=mysql_query($qry,$con);
$r=mysql_num_rows($g);
if($r>0)
{
echo "<table border='1' ><tr><th>Room Type</th><th>Room Name</th><th>Room Description</th><th>Rate/Day</th></tr>";
	while($row=mysql_fetch_array($g))
	{
		echo "<tr><td>",$row[1],"</td>";
		echo "<td>",$row[2],"</td>";
		echo "<td>",$row[3],"</td>";
		echo "<td>",$row[4],"</td></tr>";
	}
echo "</table>";
}
else
{
	echo "Record not found!!";
}
echo "</div>";
//header("location:add_room.php");

?>
<br>
<div align="center">
<button><a href="add_room.php">BACK</a></button>
</div>

</body>
</html>
