<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!-- Kết nối DB -->
<?php
		include "./includes/connect.php";
?>

<!DOCTYPE html>
<html>

<head>
	<?php
		include "./includes/head.php";
	?>
</head>

<body>
	<!-- HEADER -->
	<div class="header">
		<?php
			include "./includes/header.php";
		?>
	</div>

	<!-- CONTENT -->
	<div class="container">

		<div class="account_grid">
			<div class=" login-right">
				<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
					<div>
						<span>Email Address<label>*</label></span>
						<input type="text">
					</div>
					<div>
						<span>Password<label>*</label></span>
						<input type="text">
					</div>
					<a class="forgot" href="#">Forgot Your Password?</a>
					<input type="submit" value="Login">
				</form>
			</div>
			<div class=" login-left">
				<h3>NEW CUSTOMERS</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster,
					store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="register.html">Create an Account</a>
			</div>
			<div class="clearfix"> </div>
		</div>

		<!-- Menu Trái -->
		<div class="sub-cate">
			<?php
				include "./includes/menuleft.php";
			?>
		</div>
		<div class="clearfix"> </div>
	</div>


	<!-- FOOTER -->
	<div class="footer">
		<?php
			include "./includes/footer.php";
		?>
	</div>
</body>

</html>