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

		<div class="register">
			<form>
				<div class="  register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					<div class="mation">
						<span>First Name<label>*</label></span>
						<input type="text">

						<span>Last Name<label>*</label></span>
						<input type="text">

						<span>Email Address<label>*</label></span>
						<input type="text">
					</div>
					<div class="clearfix"> </div>
					<a class="news-letter" href="#">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign
							Up</label>
					</a>
				</div>
				<div class="  register-bottom-grid">
					<h3>LOGIN INFORMATION</h3>
					<div class="mation">
						<span>Password<label>*</label></span>
						<input type="text">
						<span>Confirm Password<label>*</label></span>
						<input type="text">
					</div>
				</div>
			</form>
			<div class="clearfix"> </div>
			<div class="register-but">
				<form>
					<input class="sub" type="submit" value="submit">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>

		<!-- Menu trái -->
		<div class="sub-cate">
			<?php
				include "./includes/menuleft.php";
			?>
		</div>
	</div>

	<!-- FOOTER -->
	<div class="footer">
		<?php
			include "./includes/footer.php";
		?>
	</div>
</body>

</html>