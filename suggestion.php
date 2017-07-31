<?php
$host="localhost"; 
$username="root";  
$password="mindfire";
$db_name="AJAXDemo"; 
$con=mysql_connect("$host", "$username", "$password");
mysql_select_db("$db_name");
$name = $_POST['name'];
$sql = "SELECT name FROM Persons WHERE name LIKE '%$name%'";
if (!empty($name)) {
	$result = mysql_query($sql);	
}
while($row=mysql_fetch_array($result))
{
echo "<p>".$row['name']."</p>";
}
?>
