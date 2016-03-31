<!DOCTYPE HTML
PUBLIC:"-//W3C/DTD XHTML 1.0 STRICT//EN"
"http://www.w3.org/trl/xhtml/DTD/xhtml/-fraeset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="dispu.css"/> 
<title>DISPLAY DETAILS.HTML</title>
</head>
<body>
<?php
 include_once("db.php");
$sql_statemanet = "select name,address,serno,phno from cdetails";
 
$rec_select = mysql_query( $sql_statemanet,$con);
 
if(! $rec_select )
 
{
 
  die('Could not retrieve data: ' . mysql_error());
 
}
 
//Displaying fetched records to HTML table
 
echo "<table border='1'>";
 
echo "<tr> <th>NAME</th> <th>ADDRESS</th> <th>SERVICE NO</th><th>PHONE NO</th></tr>";
 
// Using mysql_fetch_array() to get the next row until end of table rows
 
while($row = mysql_fetch_array( $rec_select )) {
 
                // Print out the contents of each row into a table
 
                echo "<tr><td>";
 
                echo $row['name'];
 
                echo "</td><td>";
 
                echo $row['address'];
				 echo "</td><td>";
				  echo $row['serno'];
				  echo "</td><td>";
				  echo $row['phno'];
 
                echo "</td></tr>";

 
}
 
mysql_close($con);
?>
</body>
</html>