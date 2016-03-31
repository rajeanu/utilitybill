
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
 
    function Random() 
      {
        document.f1.uno.value= Math.floor(Math.random() * 100);
      } 
</script>   



</form>
 </script> 
 </head>
<body onload="Random()">

<h1><center>NET BANKING</center></h1>

<form name="f1" action="th.php" method="POST">
<img src="rpt.jpg" align="left" width="50%" height="100%">
<p>The following unique no has been sent to your mail !!!!!</p>
<table>


<tr>
<td>
Unique no:</td><td><input type="text" name="uno" id="uno" size="20"></td>
</tr>
<br>

<tr>
<td>
<input type="submit" value="ok">
</td>
</tr>
</table>
</form>
</body>
 </html>