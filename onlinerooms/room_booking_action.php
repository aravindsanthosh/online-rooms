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
//echo $username;
//echo $login_id;
$rtype=$_POST['r1'];
$nop=$_POST['nop'];
$cindate=$_POST['checkindate'];
$coutdate=$_POST['checkoutdate'];
$cdate=date('Y/m/d');
$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
/*$r=mysql_num_rows($g);

	echo $row['username'];*/
	$qry="select count(room_type) as 'c1' from tbl_room where room_type='$rtype'";
	$result=mysql_query($qry,$con);
	$values=mysql_fetch_array($result);
	//echo $values['c1'];------>count of room type in tbl_room
	$cnt1=$values['c1'];
	//echo $cnt1;
	
	$qry2="select count(room_type) as 'c2' from tbl_room_booking where room_type='$rtype' and check_in between '$cindate' and '$coutdate' or check_out between '$cindate' and '$coutdate'";
	$result=mysql_query($qry2,$con);
	$values=mysql_fetch_array($result);
	//echo $values['c2'];//------>count of room type in tbl_room
	$cnt2=$values['c2'];
	//echo $cnt2;
	//$qry3="insert into tbl_room_booking values('','$login_id',0,'$rtype','$cindate','$coutdate','$cdate','$nop')";
		//mysql_query($qry3,$con);
	if($cnt2 < $cnt1)
	{
	//echo "lll";
	echo $login_id;
		$qry3="insert into tbl_room_booking values('','$login_id',0,'$rtype','$cindate','$coutdate','$cdate','$nop')";
		mysql_query($qry3,$con);

	}

}
header("cancellation.php");?>

</body>
</html>