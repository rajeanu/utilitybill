<!DOCTYPE HTML
PUBLIC:"-//W3C/DTD XHTML 1.0 STRICT//EN"
"http://www.w3.org/trl/xhtml/DTD/xhtml/-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Signup Form</title>
<link rel="stylesheet" href="log1.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1 align="center">SignUp to Utility Bill Payment</h1>
      <form method="post" action="l.php" name="myform" onsubmit="return validateform()">
        Name:<p><input type="text" name="name" value="" placeholder="Name" required="required"></p>
		<p>DOB:</p>
        <p><input type="date" name="picker"></p>
		<p>Email:</p>
		<p><input type="text" name="email" value="" placeholder="email" required="required" id="txtEmail"></p>
		<p>UserName:</p>
		<p><input type="text" name="uname" value="" placeholder="username or email" required="required"></p>
		<p>Password:</p>
		<p><input type="password" name="password" value="" placeholder="password" required="required"></p>
		<p>Confirm-Password:</p>
		<p><input type="password" name="cpassword" value="" placeholder="confirm-password" required="required"></p>
		<p>Door-no:</p>
		<p><input type="text" name="doorno" value="" placeholder="doorno" required="required"></p>
		<p>Street:</p>
		<p><input type="text" name="street" value="" placeholder="street" required="required"></p>
		<p>City:</p>
		<p><input type="text" name="city" value="" placeholder="city" required="required"></p>
		<p>PinCode:</p>
		<p><input type="text" name="pin" value="" placeholder="pin" required="required"></p>
		<p>Service-number:</p>
		<p><input type="text" name="sno" value="" placeholder="sno" required="required"></p>
		<p>Telephone-no:</p>
		<p><input type="text" name="tno" value="" placeholder="telephoneno" required="required"></p>
		<p>Mobile-no:</p>
		<p><input type="text" name="mno" value="" placeholder="mobileno" required="required"></p>
		<p>Who is your best childhood friend?</p>
		<p><input type="text" name="fname" value="" placeholder="Friend's Name" required="required"></p>
		<p class="rem">
          <label>
            <input type="checkbox" name="rem" id="rem" required="required">
            I accept to the terms and conditions of utility bill payment system
          </label>
		 </p>
        <p class="submit"><input type="submit" name="commit" value="Register"></p>
      </form>
	  </div>
	   <div class="login-help">
      <p>Completed Registration?<a href="l.php">Click here for Login Page</a></p>
    </div>
  </section>
  </body>
</html>