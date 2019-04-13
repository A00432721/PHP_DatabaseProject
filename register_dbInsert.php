<html>
<head>
<title>
Registeration Customer Entry
</title>
</head>
<body>
<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$num = $_POST["num"];
$pass = $_POST["pass"];

require("/home/student_2019_winter/s_jain/public_html/dbguest.php");

$link = mysqli_connect($host, $user, $pass);
if (!$link) die("Couldn't connect to MySQL");
print "Successfully connected to server<p>";

mysqli_select_db($link, $db)
	or die("Couldn't open $db: ".mysqli_error($link));
print "Successfully selected database \"$db\"<p>";

$result = mysqli_query($link, "insert into customer (lname,fname,email,phone,pass) values('$fname','$lname','$email',$num,'$pass')");

if (!$result) print("ERROR: ".mysqli_error($link));
?>

</body>
</html>

