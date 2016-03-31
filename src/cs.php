<html>
<body>
<?php 
	$u=$_POST["uname"];
	$p=$_POST["pswd"];
	echo $u;
	include_once("db.php");
	$sql="select * from login where uname=$u;
	$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["uname"];
        echo $row["pswd"];
    }
} else {
    echo "0 results";
}
	?>
	</body> 
</html>