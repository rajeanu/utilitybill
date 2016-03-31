
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
<?php
			$flag=0;
			
			$pwd=$_POST["pwr"];
			$bna=$_POST["bn"];
						
			
			include_once("db.php");
		
										$sq="select bal from transfer where user='$pwd' and bank='$bna' ";
					$rs=mysql_query($sq,$con);
					while($r=mysql_fetch_array($rs,MYSQL_BOTH))
					{
						if(($pwd==$row["user"])&&($bna==$row["bank"]))
						{
							$flag=1;
						$b=$r["bal"];
			
					
						//echo "$b";
					
						if($b<1000)
						{
							die("sorry!!!!!you have low balance");
						}
		
			else
						{
							$e=$_POST["am"];
							$sq1="update transfer set bal=bal-$e where user='$pwd'";
$rss=mysql_query($sq1,$con);
							$sq2="select bal from transfer  where user='$pwd'";
							$rs2=mysql_query($sq2,$con);
							while($r2=mysql_fetch_array($rs2,MYSQL_BOTH))
							{
							$d=$r2["bal"];
							echo "The amount has been credited from your account!!! <br> Your balance is" .$d;
							}
						}
						
					}				
					}
			if($flag==0)
			{
				die ("Invalid user");
			}
		?><br>

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