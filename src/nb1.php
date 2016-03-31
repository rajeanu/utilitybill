
<!DOCTYPE html
PUBLIC '-//w3c/DTD XHTML 1.0 strict //EN"
"http://www.w3.org/TR/XHTML1/DTD/xtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xtml">
<head>
<style>
body{
background-color:pink;
background-image:url("rs1.png");


 
}
</style>
<script language="javascript" type="text/javascript"> 
 function verify(){ 
 a=document.net.ac.value;
 b=document.net.pw.value;
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
<body >
<h1><center>NET BANKING</center></h1>
<img src="namm.jpg" height="100%" width="100%">
<form name="net" action="tran1.php" onsubmit="return verify()" method="POST">
<table>
<tr>
<td>
Enter the account no:
</td>
<td><input type="text" name="ac" size="20">
</td>
</tr>
<br>
<tr><td>
Enter the signon password:</td><td><input type="password" name="pw" size="20">(length must be 8 to 15 which consists of only character)</td>
</tr>
<br>
<tr>
<td>
<input type="submit" name="sub" value="submit">
</td>
<td>
<input type="reset" name="sub1" value="reset">
</td>
</tr>
<tr>
<td>
<a href="fr1.php" target="_blank">Forget Password</a>
</td>
</tr>
</table>
</form>
</body>

 </html>