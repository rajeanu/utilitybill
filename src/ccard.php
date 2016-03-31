<html>
<body>
<form action="rec2.php" method="post">
hai
<?php
include_once("db.php");
echo "hello";
$cno=$_POST["acc"];
$cvv=$_POST["cvv"];
$exp=$_POST["exp1"];
echo $cno;
$sql_statemanet = "select cno,cvv from bank";
 
$rec_select = mysql_query( $sql_statemanet,$con);
 
if(! $rec_select )
 
{
 
  die('Could not retrieve data: ' . mysql_error());
 
}
 
//Displaying fetched records to HTML table
  
while($row = mysql_fetch_array( $rec_select )) {
 
 echo $row['cno'];
              if($row['cno']==$cno){
				  
				echo '<script type="text/javascript">alert(  " valid user" ); </script>';
			  
			  if($row['cvv']==$cvv)
				 {
					 echo '<script type="text/javascript">alert(  "cvv is valid" ); </script>';
				 }
				 else
				 {
			echo '<script type="text/javascript">alert( "$cvv is not valid" ); </script>';

				 }
			  }
			  else
			  {
					 echo '<script type="text/javascript">alert( "not a valid user" ); </script>';
				  
			  }
}
				  
 ?>
 </form>
</body>
</html>