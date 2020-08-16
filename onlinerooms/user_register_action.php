<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$firstname=$_POST['firstname'];
//echo $name;
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$username=$_POST['username'];
$pwd=$_POST['password'];
$cpwd=$_POST['confirmpassword'];
$con=mysql_connect("localhost","root","");
if(!$con)
echo "connection failed";
else
{
mysql_select_db("onlinerooms",$con);
$qry="insert into tbl_login(usertype,username,password,confirmpassword) values('user','$username','$pwd','$cpwd')";	
	mysql_query($qry,$con);
	
	
	$qry="SELECT * FROM tbl_login order by login_id desc";
	$result=mysql_query($qry,$con);
	$row=mysql_fetch_array($result);
	$login_id=$row['login_id'];		



$qry="insert into tbl_user_register(login_id,firstname,lastname,address,phoneno,email_id) values('$login_id','$firstname','$lastname','$address','$phno','$email')";
mysql_query($qry,$con);
//echo "success";

}
header("location:user_register.php");
?>



</body>
</html>
