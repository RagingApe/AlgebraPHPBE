<?php
$DBconnect=mysqli_connect("localhost", "phpUser", "php", "testDB");
$result = mysqli_query($DBconnect, "SELECT * FROM breakfastMenu");
while($row = mysqli_fetch_array($result))
	print_r($row['food']);
mysqli_close($DBconnect);
?>
