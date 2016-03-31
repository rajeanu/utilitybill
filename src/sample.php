<?php
 
$dbhostname = 'localhost';
 
$dbusername = 'testuser';
 
$dbpassword = 'testpassword';
 
$conn = mysql_connect($dbhostname, $dbusername, $dbpassword);
 
if(! $conn )
 
{
 
  die('Could not connect: ' . mysql_error());
 
}
 
echo 'MySQL Connected successfully'."<BR>";
 
mysql_select_db("testdb") or die(mysql_error());
 
echo "Connected to Database"."<BR>";
 
$sql_statemanet = 'INSERT INTO tblstaff '.
 
       '(employee_name,employee_add, employee_joined, employee_sal) '.
 
       'VALUES ( "Mike", "dummy address", NOW() ,5000  )';
 
//mysql_select_db('test_db');
 
$rec_insert = mysql_query( $sql_statemanet);
 
if(! $rec_insert )
 
{
 
  die('Could not enter data: ' . mysql_error());
 
}
 
echo "Entered data successfully\n";
 
mysql_close($conn);
 
?>
---------------------------------------------------------------------------
<?php
 
$dbhostname = 'localhost';
 
$dbusername = 'testuser';
 
$dbpassword = 'testpassword';
 
$conn = mysql_connect($dbhostname, $dbusername, $dbpassword);
 
if(! $conn )
 
{
 
  die('Could not connect: ' . mysql_error());
 
}
 
echo 'MySQL Connected successfully'."<BR>";
 
mysql_select_db("testdb") or die(mysql_error());
 
echo "Connected to Database"."<BR>";
 
$emp_salary = 7000;
 
$emp_id = 3;
 
$sql_statemanet = "UPDATE tblstaff ".
 
       "SET employee_sal = $emp_salary ".
 
       "WHERE ID = $emp_id" ;
 
//mysql_select_db('test_db');
 
$rec_update = mysql_query( $sql_statemanet);
 
if(! $rec_update )
 
{
 
  die('Could not update data: ' . mysql_error());
 
}
 
echo "Record updated successfully\n";
 
mysql_close($conn);
 
?>
----------------------------------------------------------------------------
<?php
 
$dbhostname = 'localhost';
 
$dbusername = 'testuser';
 
$dbpassword = 'testpassword';
 
$conn = mysql_connect($dbhostname, $dbusername, $dbpassword);
 
if(! $conn )
 
{
 
  die('Could not connect: ' . mysql_error());
 
}
 
mysql_select_db("testdb") or die(mysql_error());
 
$emp_salary = 7000;
 
$emp_id = 3;
 
$sql_statemanet = "select * from tblstaff";
 
$rec_select = mysql_query( $sql_statemanet);
 
if(! $rec_select )
 
{
 
  die('Could not retrieve data: ' . mysql_error());
 
}
 
//Displaying fetched records to HTML table
 
echo "<table border='1'>";
 
echo "<tr> <th>Employee Name</th> <th>Employee Salary</th> </tr>";
 
// Using mysql_fetch_array() to get the next row until end of table rows
 
while($row = mysql_fetch_array( $rec_select )) {
 
                // Print out the contents of each row into a table
 
                echo "<tr><td>";
 
                echo $row['employee_name'];
 
                echo "</td><td>";
 
                echo $row['employee_sal'];
 
                echo "</td></tr>";
 
}
 
mysql_close($conn);
 
?>

