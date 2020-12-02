<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<style>
	forms {
	 width: 300px;
	 border: 1px solid green;
	 padding: 20px;
	 margin: 0 auto;
	 font-weight: 700px;
	}
	.form input {
	 width: 100%;
	 padding: 10px 0;
	}
</style>
<body>
  
<form method="post" action="register.php" class="form" >
  
<h2>Đăng ký thành viên</h2>
  
Username: <input type="text" name="" value="" required>
  
Password: <input type="text" name="password" value="" required/>
  
Email: <input type="email" name="email" value="" required/>
  
Phone: <input type="text" name="phone" value="" required/>
  
<input type="submit" name="dangky" value="Đăng Ký"/>
<?php require 'xuly.php';?>
</form>
  
</body>
</html>