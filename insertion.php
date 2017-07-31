<?php
$host="localhost"; 
$username="root";  
$password="mindfire";
$db_name="AJAXDemo"; 
$con=mysqli_connect("$host", "$username", "$password", "$db_name");
//mysql_select_db("$db_name");
$nameSub = $_POST['nameSub'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$city = $_POST['city'];



mysqli_query($con,"INSERT INTO Persons (name, age, gender, city)  VALUES ('$nameSub','$age','$gender', '$city')");
?>
