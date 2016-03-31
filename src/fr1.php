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
<form name="fr" onsubmit="return verify()" action="nb1.php" method="POST">
<img src="mob.jpg" align="top" width="50%" height="150%">
Enter the mobile no:<input type="text" name="mn" maxlength="10">
<input type="submit" name="ss" value="send new password">
</form>
</body>


</html>