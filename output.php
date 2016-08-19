<?php
mysql_connect("localhost","root","") or die("Unable to connect");
mysql_select_db("testmail");

$result = mysql_query("SELECT * FROM users");

while($row =mysql_fetch_array($result)){
echo $row['name']." ".$row['email']." ".$row['password'];
echo "<br />";

}

mysql_close();

?>
<center><?php
 include("links.php");
 ?>
</center>