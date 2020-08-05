<!DOCTYPE html>
<html lang="en" >

<head>
<script type="text/javascript">
function checkPassword(str)
{
	var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;
	return re.test(str);
}
function checkPhone(ph)
{
	var r = /^[6-9][0-9]{9}$/;
	return r.test(ph);
}
function checkForm(form)
{
	if(form.roll.value == "")
	{
		alert("ID cannot be blank!");
		form.roll.focus();
		return false;
	}
	if(form.fname.value == "")
	{
	alert("Name cannot be blank!");
	form.fname.focus();
	return false;
	}
	if(form.addr.value == "")
	{
		alert("Address cannot be blank!");
		form.addr.focus();
		return false;
	}
	if(form.contact.value == "")
	{
		alert("Contact cannot be blank!");
		form.contact.focus();
		return false;
	}
	if(form.contact.value.length != 10)
	{
		alert("Contact must have only 10 digits!");
		form.contact.focus();
		return false;
	}
	if(!checkPhone(form.contact.value))
	{
		alert("Phone number is invalid!");
		form.contact.focus();
		return false;
	}
	if(form.dept.value == "")
	{
		alert("Department cannot be blank!");
		form.dept.focus();
		return false;
	}
	if(form.usn.value == "")
	{
		alert("Username cannot be blank!");
		form.usn.focus();
		return false;
	}
	if(form.usn.value.length < 6)
	{
		alert("Username must contain minimum 6 characters!");
		form.usn.focus();
		return false;
	}
	re = /^\w+$/;
	if(!re.test(form.usn.value))
	{
		alert("Username can only contain letters,numbers and underscores!");
		form.usn.focus();
		return false;
	}
	if(form.pass.value == "" )
	{
		alert("Password cannot be blank!");
		form.pass.focus();
		return false;
	}
	else
	{
		if(!checkPassword(form.pass.value))
		{
			alert("Password must contain at least 6 charcters, one lowercase letter, one uppercase letter, and may have only numbers or underscores!");
			form.pass.focus();
			return false;
		}
	}
	return true;
}
</script>
  <meta charset="UTF-8">
  <title>SET UP NEW ACCOUNT</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>
<body>
<form method="post" action="details.php"  onsubmit="return checkForm(this);">
	  <div class="login-wrap">
					<div class="login-html">
				<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">SIGN UP- STEP 1</label>
			<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Teacher ID</label>
					<input name="roll" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Name</label>
					<input  name="fname" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Address</label>
					<input  name="addr" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Contact</label>
					<input  name="contact" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Department</label>
					<input  name="dept" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Username</label>
					<input  name="usn" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input  name="pass" type="password" class="input">
				</div>
				<div class="group">
                                                      <label for="pass" class="button">
                                                       <center><input type="submit" value="Submit"></center>
				</div>
				<div class="hr">
				</div>
				</div>
			</div>
		</div>
	</div>
</form>
</body>
</html>
