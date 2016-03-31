<!DOCTYPE HTML
PUBLIC:"-//W3C/DTD XHTML 1.0 STRICT//EN"
"http://www.w3.org/trl/xhtml/DTD/xhtml/-fraeset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="card.css"/>
</head>
<body>
<div class="pay" >
<form action="ccard.php" name="aa" method="post">
		<table id="1" cellspacing:"30" cellpadding:"20">
		<tr>
	<td>Card no</td>
	<td><input type="text" placeholder="Enter card no" name="acc" onblur="return(val1());" /></td>
	</tr>
	<tr>
		<td>CVV</td><td><input type="text" placeholder="Enter 3 digits cvv no"name="cvv" onblur="return(val2());"/></td>
		</tr>
		<tr>
		<td>Expire date</td><td> <input type="date" placeholder="Enter expiry date" name="exp1" onblur="return(vald());"></td>
		</tr>
		<tr>
		<td></td>
		<td>
		<input type="submit" name="pay" value="pay" class="btn" />
	
	  </td>
	  </table>
	  </form>
	</div>

<script>
function val1()
{

var b=document.aa.acc.value;
if(isNaN(b)||b==""||document.aa.acc.value.length!=16)
{
alert("provide a valid card no number");
document.aa.acc.focus();
return false;
}
return true;
}
function val2()
{

var b=document.aa.cvv.value;
if(isNaN(b)||b==""||document.aa.cvv.value.length!=3)
{
alert("provide a valid cvv number");
document.aa.cvv.focus();
return false;
}
return true;
}
function vald(){
var val = document.aa.exp1.value;
	var today = new Date();
	var v = val.split("-");
	var d = today.getDate();
	var m = today.getMonth()+1;
	var y = today.getFullYear();
	alert("date"+d+"month"+m+"year"+y);
	alert(v[1]+v[2]+v[0]);
    	if(d <=v[1]||m <=v[0]||y<=v[2] ){
		alert("The card has  not expired");
             return true;
		}
	else{
	       alert("card is expired");
		document.aa.exp1.focus();
		return false;
		} 
}
</script>
</html>