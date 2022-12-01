<!doctype html>
<html>
<head>
<title>information</title>
</head>
<body>
<?php
echo "username: " , $_POST['username'];
echo "<br>password: ", $_POST['pass'];

if ($_POST['c1'] == 1) {
echo "<br>city: tehran ";
} else if ($_POST['c1'] == 2) {
	$selected = $_POST['c1'];
echo "<br>city: karaj ";
} else if ($_POST['c1'] == 3) {
	$selected = $_POST['c1'];
echo "<br>city: ghazvin ";
} else if ($_POST['c1'] == 4) {
	$selected = $_POST['c1'];
echo "<br>city: mashhad";
} else 
	


?>
</body>
</html>