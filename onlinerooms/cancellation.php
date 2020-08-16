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

$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
	
		$qry="select * from tbl_room_booking where login_id=$login_id";
		$g=mysql_query($qry,$con);
		$r=mysql_num_rows($g);
		if($r>0)
		{
			
			echo "<table border='1' ><tr><th>Room Type</th><th>Check In</th><th>Check Out</th><th>Booking Date</th><th>No.of Person</th><th>Status</th></tr>";
			while($row=mysql_fetch_array($g))
			{
			//$qry2="insert into tbl_room_cancellation('rbook_id','login_id','room_id','room_type','check_in','check_out','current_date','no_of_person')values('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]')";
			//$q=mysql_query($qry2,$con);
			
			//echo $qry2;
			
				echo "<tr><td>",$row[3],"</td>";
				echo "<td>",$row[4],"</td>";
				echo "<td>",$row[5],"</td>";
				echo "<td>",$row[6],"</td>";
				echo "<td>",$row[7],"</td>";
				echo "<td>"?> <button><a href="cancellation_action.php ?id=<?php echo $row[0];?>">Cancel</a></button><?php "</td></tr>";
			
			//echo $row[0];
		
			}
			echo "</table>";
		}
		else
		{
			echo "Record not found!!";
		}

	}

?>
</body>
</html>
