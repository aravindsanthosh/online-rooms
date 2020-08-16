<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$status=$_POST['status'];

$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
	if($status=='approve')
	{
		$qry="select * from tbl_room_booking where room_id=0";
		$g=mysql_query($qry,$con);
		$r=mysql_num_rows($g);
		if($r>0)
		{
			echo "<table border='1' ><tr><th>Room Book ID</th><th>Login ID</th><th>Room ID</th><th>Room Type</th><th>Check In</th><th>Check Out</th><th>Booking Date</th><th>No.of Person</th><th>Status</th></tr>";
			while($row=mysql_fetch_array($g))
			{
				echo "<tr><td>",$row[0],"</td>";
				echo "<td>",$row[1],"</td>";
				echo "<td>",$row[2],"</td>";
				echo "<td>",$row[3],"</td>";
				echo "<td>",$row[4],"</td>";
				echo "<td>",$row[5],"</td>";
				echo "<td>",$row[6],"</td>";
				echo "<td>",$row[7],"</td>";
				echo "<td>"?> <button><a href="admin_room_approve.php ?id=<?php echo $row[0]; ?>">approve</a></button><?php "</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "Record not found!!";
		}

	}
	else
	{
		$qry="select * from tbl_room_booking a inner join tbl_room b on a.room_id=b.room_id";
		$g=mysql_query($qry,$con);
		$r=mysql_num_rows($g);
		if($r>0)
		{
			echo "<table border='1' ><tr><th>Room Book ID</th><th>Login ID</th><th>Room ID</th><th>Room Type</th><th>Check In</th><th>Check Out</th><th>Booking Date</th><th>No.of Person</th><th>Rate/Day</th></tr>";
			while($row=mysql_fetch_array($g))
			{
				echo "<tr><td>",$row[0],"</td>";
				echo "<td>",$row[1],"</td>";
				echo "<td>",$row[2],"</td>";
				echo "<td>",$row[3],"</td>";
				echo "<td>",$row[4],"</td>";
				echo "<td>",$row[5],"</td>";
				echo "<td>",$row[6],"</td>";
				echo "<td>",$row[7],"</td>";
				echo "<td>",$row[12],"</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "Record not found!!";
		}

	
	}
}
 ?>

</body>
</html>
