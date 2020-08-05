<!DOCTYPE html>
<html lang="en" >

<head>
<script type="text/javascript">
function checkPassword(str)
{
	var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;
	return re.test(str);
}
function checkForm(form)
{
if(form.user.value == "")
	{
		alert("Username cannot be blank!");
		form.user.focus();
		return false;
	}
	if(form.user.value.length < 6)
	{
		alert("Username must contain minimum 6 characters!");
		form.user.focus();
		return false;
	}
	re = /^\w+$/;
	if(!re.test(form.user.value))
	{
		alert("Username can only contain letters,numbers and underscores!");
		form.user.focus();
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
  <title>SIGN IN TO CONTINUE</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>
<body>
<form method="post" action="lists/dropdown.php" onsubmit="return checkForm(this);">
	  <div class="login-wrap">
					<div class="login-html">
				<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">SIGN IN</label>
			<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user"  name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input  name="pass" type="password" class="input">
				</div>
				<div class="group">
				<a class="button">
					 <center><input type="submit" value="Sign in"></center>
				</a>
				<br>
				<a href="signup.php" class="button">
					 <center>Sign up</center>
				</a>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>			
			</form>

</body>
</html>
