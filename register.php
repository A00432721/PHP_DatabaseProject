html>
<head>
<title>
Sign-up
</title>
</head>
<body>

<h3> Welcome to Customer Registration</h3>

<form action="register_dbInsert.php" method="POST">
 <br/>
 <label for ="lname"> Enter your First Name : </label>
 <input type="text" name="lname" required>

 <br/>
 <label for ="fname"> Enter your Last Name : </label>
 <input type="text" name="fname" required>
 
<br/>
 <label for ="email">Enter your Email : </label>
 <input type="email" name="email">

<br/>
<label for= "num">Enter your Phone Number : </label>
<input type="text" name="num" required>

<br/>
//password is being inpit wrong
<label for ="pass">Enter your Password : </label>
<input type="password" name="pass">
	
<input type="submit" value="Register">
</form>

<a href="index_proj.htm"> back to MAIN menu</a>

</body>
</html>