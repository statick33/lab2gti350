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
	width:450px;
	float:left;
	border-right:1px solid black;
}
.twocolumn .columnRight{
	width:450px;
	float:right;
}
.input {
	padding:10px;
}
</style>
	<?php
		include('header.php'); 
	?>
		<div class="twoColumn">
			<div class="register form columnLeft">
				<form name="register" action="" method="post">
					<legend class="legend">Sign up</legend>
					<div class="input">
						<label for="txt_username">Username:</label>
						<input name="txt_username" type="text" value="" />
					</div>
					<div class="input">
						<label for="txt_email">Email:</label>
						<input name="txt_email" type="text" value="" />
					</div>
					<div class="input">
						<label for="txt_password" >Password:</label>
						<input name="txt_password" type="password" value="" />
					</div>
					<div class="input">
						<label for="txt_passwordConfirm">Confirm Password:</label>
						<input name="txt_passwordConfirm" type="password" value="" />
					</div>
					<button type="submit">Sign up</button>
				</form>
			</div>
			<div class="login form columnRight">
				<form name="login" action="" method="post">
					<legend class="legend">Login</legend>
					<div class="input">
						<label for="txt_username">Username:</label>
						<input name="txt_username" type="text" value="" />
						<a href="#" alt="forgot_username">Forgot username?</a>
					</div>
					<div class="input">
						<label for="txt_password">Password:</label>
						<input name="txt_password" type="password" value="" />
						<a href="#" alt="forgot_password">Forgot password?</a>
					<button type="submit">Login</button>
				</form>
			</div>
			<div style="clear:both;"></div>
		</div>
	<?php
		include('footer.php'); 
	?>
