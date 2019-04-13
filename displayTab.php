<html>
<head>
<title>
print_table.php
</title>
</head>
<body>

<?Php

$name=$_POST["tbname"];

function prtable($table) {
	print "<table border=1>\n";
	while ($a_row = mysqli_fetch_row($table)) {
		print "<tr>";
		foreach ($a_row as $field) print "<td>$field</td>";
		print "</tr>";
	}
	print "</table>";
}

require("/home/student_2019_winter/s_jain/public_html/dbguest.php");

$link = mysqli_connect($host, $user, $pass);
if (!$link) die("Couldn't connect to MySQL");
print "Successfully connected to server<p>";
print "1";

mysqli_select_db($link, $db)
	or die("Couldn't open $db: ".mysqli_error($link));
print "Successfully selected database \"$db\"<p>";

$result = mysqli_query($link, "select * from $name");

if (!$result) print("ERROR: ".mysqli_error($link)." SOLVE");
else {
    $num_rows = mysqli_num_rows($result);
    print "There are $num_rows rows in the table<p>";
    prtable($result);
}

mysqli_close($link);

print "<p><p>Connection closed. Bye..."
?>

<p>


</body>
</html>


