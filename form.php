<html>
<head>
<title>CRUD APPLICATION</title>
</head>
<body>
	<h2>Register Form</h2>
<form method ="post" action ="script.php">
	
<table border="0" width ="60%">
	<tr><td width = "10%">Name :</td><td><input type="text" name="name"></td></tr> <br />
	<tr><td width = "10%">Email :</td> <td><input type="text" name="email"></td></tr> <br />
	<tr><td width = "10%">Password : </td><td><input type="password" name="password"></td></tr> <br />
</table>	
<p>
<input type ="submit" value ="Register" > <input type ="reset" > 
	</p>
<center><?php
 include("links.php");
 ?>
</center>
</form>
</body>
</html>