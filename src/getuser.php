<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<p>hai</p>
<?php
echo "inside php";
$q = intval($_GET['q']);
$con = mysqli_connect("127.0.0.1","root","","customer");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"customer");
$sql="SELECT * FROM customer WHERE custid = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>customer id</th>
<th>Name</th>
<th>Age</th>
<th>ADDRESS</th>
<th>Occupation</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['custid'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['occupation'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>

