<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("sample",$con);
$qry="insert into tbl_sample(sname,mark) values('meenu','88')";	
	mysql_query($qry,$con);
	
	
?>

</body>
</html>
