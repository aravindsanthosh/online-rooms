<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form action="user_register_action.php" method="post">
<table width="502" height="323" >
    <tr>
      <td width="193" height="40">&nbsp;First Name</td>
      <td width="297"><input type="text" name="firstname" placeholder="Enter First Name" ></td>
    </tr>
	<tr>
      <td width="193">Last Name</td>
      <td width="297"><input type="text" name="lastname" placeholder="Enter Last Name"></td>
    </tr>
    
    <tr>
      <td>Address</td>
      <td><input type="textarea" name="address" placeholder="Enter Address"></td>
    </tr>
   <tr>
      <td height="34">Phone Number </p></td>
      <td><input type="text" name="phno" placeholder="Enter Phone Number"></td>
    </tr>
	 <tr>
      <td height="34">E mail </p></td>
      <td><input type="text" name="email" placeholder="Enter E-mail ID"></td>
    </tr>
    <tr>
      <td>
     User Name</td>
      <td><input type="text" name="username" placeholder="Enter User Name"></td>
    </tr>
    <tr>
      <td height="41">Password</td>
      <td><input type="password" name="password" placeholder="Enter Password"></td>
    </tr>
    <tr>
      <td height="42">
      Confirm Password</td>
      <td><input type="password" name="confirmpassword" placeholder="Confirm Password"></td>
    </tr>
    <tr>
      <td height="64"><p>
        <input type="submit" name="register" value="Register">
        </p>
      <p>&nbsp;      </p></td>
      <td><p>
        <input type="reset" name="cancel" value="Cancel">
        </p>
        <p>&nbsp;        </p></td>
    </tr>
  </table>
<a href="login_home.php">Login</a>  
</form>
</body>
</html>
