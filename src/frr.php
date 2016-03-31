<!DOCTYPE HTML
PUBLIC:"-//W3C/DTD XHTML 1.0 STRICT//EN"
"http://www.w3.org/trl/xhtml/DTD/xhtml/-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<frameset rows="8%,*">
<frame src="navigation.php" id="c5" name="c5">
</frame>
<frame src="frr3.php"id="c4" name="c4">
</frame>
</frameset>
</head>
<?php
include_once("db.php");
$uname=$_POST["login"];
$password=$_POST["password"];
$sql="select password from user where uname=$uname";
if (mysql_query($sql,$con)) {
	if($sql==$password)
    echo "successful login";
} else {
    echo "Error: " . $sql . "<br>" . mysql_error($con);
	echo "login failed,try again";
	die("error");
	}
	mysql_close($con);
?>
</html>