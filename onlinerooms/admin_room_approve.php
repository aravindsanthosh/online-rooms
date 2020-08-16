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
//$r_bookid=$_SESSION['rbookid'];
//$login_id=$_SESSION['login_id'];
//echo $username;

?>
<form method="post" action="approve.php">
Room ID <input type="text" name="roomid">
Room Book ID <input type="text" name="rbookid" value="<?php echo $rbookid ?>">
<input type="submit" value="APPROVE">
</form>

</body>
</html>
