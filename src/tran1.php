<!DOCTYPE html
PUBLIC '-//w3c/DTD XHTML 1.0 strict //EN"
"http://www.w3.org/TR/XHTML1/DTD/xtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xtml">
<head>
<style>
body{
background-color:pink;
font-size:25px;

background-image:url("rs2.png");
}
td{
	font-size:25px;
	
}
</style>
<script language="javascript" type="text/javascript"> 
 function verify(){ 
 a=document.tr.am.value;
 b=document.tr.pwr.value;
 var decil= /^[A-Za-z]\w{7,14}$/;
 if((a=="")||(b==""))
 {
 alert("please enter the all values");
 return false;
 }
 else{
 
 if(isNaN(a))
{
alert("invalid account number");

 return false;
 }
 else{

 
  if(!(b.match(decil)))
 {
 alert("wrong!!!!");
 return false;
 }
 else{
 return true;
 }
 }
 }
 }  
 </script> 
 </head>
<body>
<?php
			$flag=0;
			$accno=$_POST["ac"];
			$pwd=$_POST["pw"];
		
					
			
			include_once("db.php");
	
			$sql="SELECT * FROM login where acno=$accno and pswd='$pwd'";
			$res=mysql_query($sql,$con);
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{ 	if($accno==$row["acno"]){
					$flag=1;
					echo "<h1> WELCOME !!!!!</h1>";
					
				}			
			}
			if($flag==0)
			{
				die ("Invalid user");
			}
		?><br>

<h1 style="color:white"><center>NET BANKING</center></h1>

<form name="tr" action="rec1.php" onsubmit="return verify()" method="POST">
<img src="veri.png" align="left" width="50%" height="100%">
<table>
<tr>
<td>
Enter bank name:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
<td>
<input type="text" name="bn" size="20">
</td><br>
</br>
</tr>
<tr>
<td>
Enter the amount to transfer:</td><td>
<input type="text" name="am" size="20"></td>
<br>
</br>
</tr>
<tr>
<td>
Enter the transaction password:</td><td><input type="password" name="pwr" size="20">(length must be between 8 to 15 which consists of only characters)</td>
<br>
</br>
</tr>
<tr>
<td>
<input type="submit" name="sub" value="submit">
</td>
<td>
<input type="reset" name="sub1" value="reset">
</td>
</tr>
</table>
<br>
<?php
setcookie("pasw",$pwd,time()+86400,"/");
setcookie("accc",$accno,time()+86400,"/");

echo "<a href=tfr1.php>Forget password</a>";
 ?>

</form>
</body>
 </html>