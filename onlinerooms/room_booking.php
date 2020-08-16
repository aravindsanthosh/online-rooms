<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body><?php
session_start();
$username=$_SESSION['username'];
$login_id=$_SESSION['login_id'];
echo $username;
echo $login_id;
?>
<form action="room_booking_action.php" method="post">
  <table width="364" height="206" border="1">
    <tr>
      <td width="126">Room Type</td>
      <td width="222"><input name="r1" type="radio" value="single" checked="checked">
        Single
          <input name="r1" type="radio" value="family">
        Family
		<input name="r1" type="radio" value="luxury">
        Luxury</td>
    </tr>
	 <tr>
      <td>No. of Person</td>
      <td><input type="text" name="nop"></td>
    </tr>
    <tr>
      <td>Check In Date</td>
      <td><input type="date" name="checkindate"></td>
    </tr>
    <tr>
      <td>Check Out Date</td>
      <td><input type="date" name="checkoutdate"></td>
    </tr>
    <tr>
	 <tr>
      <td>Current Date</td>
      <td><input type="text" name="currentdate" value="<?php echo date("Y/m/d"); ?>" disabled="true"></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="Submit" value="Check Availability"></td>
      
    </tr>
  </table>
  </form>
</body>
</html>
