<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name && $email && $password){

mysql_connect("localhost","root","") or die("We couldn't connect to database");
mysql_select_db("testmail");
mysql_query("INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");
$reg = mysql_affected_rows();
echo "$reg rows inserted into database";

}
else {

echo "Please insert all values";

}

mysql_close();



?>