<html>
<head>
<style>
    body{
        margin:0;
        padding:0;
        background:url(./images/coffee.jpg);
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
    }

    .loginbox{
        width: 320px;
        height: 420px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%;
        box-sizing: border-box;
        padding: 70px 30px;
        box-shadow: 5px 5px 5px #000000;
    }

    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }
    .loginbox p{
        margin: 0;
        padding: 0;
        font-weight: bold;
    }

    .loginbox input{
        width: 100%;
        margin-bottom: 20px;
    }

    .loginbox input[type="text"], input[type="password"]{
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    .loginbox input[type="submit"]{
        border: none;
        outline: none;
        height: 40px;
        background: #fb2525;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }
    .loginbox input[type="submit"]:hover{
        cursor: pointer;
        background: #ffc107;
        color: #000;
    }
    .loginbox a{
        text-decoration: none;
        font-size: 12px;
        line-height: 20px;
        color: darkgrey;
    }

    .loginbox a:hover{
        color: #ffc107;
    }


</style>


<?php
function postIndex($index, $value="")
{
	if (!isset($_POST[$index]))	return $value;
	return trim($_POST[$index]);
}

function checkUserName($string)
{
	if (preg_match("/^[a-zA-Z0-9._-]*$/",$string)) 
	  return true;
	return false;
}


/* function checkEmail($string)
{  echo $string;
	if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
	 return true;
	return false;
	
} */

$sm = postIndex("submit");
$username = postIndex("username");
$password = postIndex("pass");
/* $email = postIndex("email"); */

?>

<title>User Login</title>
<body>
    <div class="loginbox">
    <img src="https://cdn.iconscout.com/icon/free/png-256/avatar-372-456324.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
    </div>
</body>
</head>
</html>


<?php

if ($sm !="")
{
	?>
    <div class="info">Lỗi<br />
    	<?php 
		
		if (checkUserName($username)==false) 
			echo "Username: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và - <br>";
		/* if (checkEmail($email)==false) 
			echo "Định dạng email sai!<br>"; */
		?>
		
    </div>
    <?php

}
?>