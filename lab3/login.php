<style type="text/css">
.form {
	padding:10px;
}

.form input{
	display:block;
	width:250px;
}
.form a {
	display:block;
}
.legend{
	font-size:32px;
	font-decoration:bold;
}
.twocolumn .columnLeft{
	width:400px;
	float:left;
	border-right:1px solid black;
}
.twocolumn .columnRight{
	width:400px;
	float:right;
}
.input {
	padding:10px;
}
.error{
	width:15px;
	color:red !important;
}
.nonValid{
	bordor-color:red !important;
}

</style>
	<?php
		include('header.php'); 

		include('mainContentBoxHeader.php'); 
		include('contentBoxHeader.php'); 

	?>
		<div class="twoColumn">
			<div class="register form columnLeft">
				<form name="register" action="" method="post" id="signUpForm">
					<legend class="legend">Sign up</legend>
					<div class="input">
						<label for="txt_username">Username:</label>
						<span class="error"></span>
						<input name="txt_username" id="txt_username" type="text" value="" />
					</div>
					<div class="input">
						<label for="txt_email">Email:</label>
						<span class="error"></span>
						<input name="txt_email" id="txt_email" type="text" value="" />
					</div>
					<div class="input">
						<label for="txt_password" >Password:</label>
						<span class="error"></span>
						<input name="txt_password" id="txt_password" type="password" value="" />
					</div>
					<div class="input">
						<label for="txt_passwordConfirm">Confirm Password:</label>
						<span class="error"></span>
						<input name="txt_passwordConfirm" id="txt_passwordConfirm" type="password" value="" />
					</div>
					<div class="smallButton" onclick="signup(document.getElementById('signUpForm'));">Sign up</div>
				</form>
			</div>
			<div class="login form columnRight">
				<form name="login" action="" id="loginForm" method="post">
					<legend class="legend">Login</legend>
					<div class="input">
						<label for="txt_username">Username:</label>
						<span class="error"></span>
						<input name="txt_username" type="text" value="" />
						<a href="#" alt="forgot_username">Forgot username?</a>
					</div>
					<div class="input">
						<label for="txt_password">Password:</label>
						<span class="error"></span>
						<input name="txt_password" type="password" value="" />
						<a href="#" alt="forgot_password">Forgot password?</a>
					<div class="smallButton" onclick="signup(document.getElementById('loginForm'));">Login</div>
				</form>
			</div>
			<div style="clear:both;"></div>
		</div>
	<?php
		include('contentBoxFooter.php'); 
		include('mainContentBoxFooter.php'); 
		include('footer.php'); 
	?>
