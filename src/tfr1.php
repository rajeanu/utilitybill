
<!DOCTYPE html
PUBLIC '-//w3c/DTD XHTML 1.0 strict //EN"
"http://www.w3.org/TR/XHTML1/DTD/xtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xtml">
<head>
<style>
body{
background-color:pink;
font-size:25px;
}
</style>
<script language="javascript" type="text/javascript"> 
 function verify(){ 
 a=document.fr.mn.value;
 if((a==""))
 {
 alert("please enter the all values");
 return false;
 }
 else if(isNaN(a))
{
alert("invalid mobile number");

 return false;
 } 
 else{
 return true;
 }
 return false;

 }
 </script>
 </head>
 <body>
<form name="fr" onsubmit="return verify()" action="tran1.php" method="POST">
<img src="mob.jpg" align="top" width="50%" height="150%">
Enter the mobile no:<input type="text" name="mn" maxlength="10">
<input type="submit" name="ss" value="send new password">
<?php
include_once("db.php");
$pw1=$_COOKIE['pasw'];
$ac1=$_COOKIE['accc'];
echo "$ac1";
echo "$pw1";
 echo "<input type=hidden name=ac value=$ac1>
 <input type=hidden name=pw value=$pw1>";
?>
</form>
</body>


</html>