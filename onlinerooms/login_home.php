<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<style>
body{
margin:0;}
.navigation{
width:100%;
background-color:#00CC66;
overflow:auto;}
ul{
padding:0;
margin:0;
list-style:none;}
li{
float:left;}
a:link{
width:130px;
display:block;
padding:15px;
text-decoration:none;
color:white;
font-size:20px;
text-align:center;
border-right:1px solid white;
text-transform:uppercase;
border-radius:10px;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFCC66">


<div class="navigation">
<ul>
<li><a href="login_home.php">Login</a></li>
<li><a href="user_register.php">New User</a></li></ul>

</div>



<form action="login_home_action.php" method="post">
<table width="269" height="140" border="1" align="center">
<tr><td width="105">User Name</td>
<td width="148"><input type="text" name="username" placeholder="Enter Username"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" placeholder="Enter Password"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="login" value="Login"></tr>
</table>
<br><br>
<br>
<br>
<br>
<br>
</form>
</body>
</html>
