<!DOCTYPE HTML
PUBLIC:"-//W3C/DTD XHTML 1.0 STRICT//EN"
"http://www.w3.org/trl/xhtml/DTD/xhtml/-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login Form</title>
<link rel="stylesheet" href="log.css">
</head>
<?php
include_once("db.php");
echo "hello";
$name=$_POST["name"];
$picker=$_POST["picker"];
$uname=$_POST["uname"];
$password=$_POST["password"];
$sno=$_POST["sno"];
$tno=$_POST["tno"];
$mobno=$_POST["mno"];
$fname=$_POST["fname"];
$sql="INSERT INTO user(name,picker,uname,password,sno,tno,mobno,fname)VALUES('$name','$picker','$uname','$password','$sno','$tno','$mobno','$fname')";
if (mysql_query($sql,$con)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($con);
	}
	mysql_close($con);
?>
<body>
  <section class="container">
    <div class="login">
      <h1>Login to Utility Bill Payment</h1>
      <form method="post" action="frr.php" name="myform" onsubmit="return validateform()" >
        <p><input type="text" name="login" value="" placeholder="Username or Email" ></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="check.html">Click here to reset it</a></p>
    </div>
	<div class="newuser">
	<p>New User? <a href="signup.php">Click here to register</a></p>
	</div>
  </section>
  <script>
	function validateform()
	{
	var x=document.forms["myform"]["login"].value;
	var y=document.forms["myform"]["password"].value;
	if (x == null || x == "") {
        alert("UserName must be filled out");
        return false;
    }
	if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
}
</script>
</body>
</html>
