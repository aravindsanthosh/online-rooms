<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
session_start();
$username=$_POST['username'];
$pwd=$_POST['password'];
$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
	
	$qry="SELECT * FROM tbl_login";
	$result=mysql_query($qry,$con);
$flg=0;
//$usertype='user';
	while($row=mysql_fetch_array($result))
	{
	echo $row['username'];
	echo $row['password'];
	echo $row['usertype'];

		if($username==$row['username'] && $pwd==$row['password'] && 'user'==$row['usertype'])
			{
				$flg=1;	
				$_SESSION['login_id']=$row['login_id'];
				$_SESSION['username']=$row['username'];
				break;
			}	
			if($username==$row['username'] && $pwd==$row['password'] && 'admin'==$row['usertype'])
			{
			$flg=2;	
				$_SESSION['login_id']=$row['login_id'];
				$_SESSION['username']=$row['username'];
				break;
			}
			
	}
	if($flg==1)
	{
		echo "valid ";
		header("location:user_home.php");
	}
	else if($flg==2)
	{
		echo "valid ";
		header("location:admin_home.php");
	}
	else
	{
		header("location:login_home.php?msg=*Invalid user");
	}
}	


?>
</body>
</html>