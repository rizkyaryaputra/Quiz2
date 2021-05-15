<?php 
session_start();
include('index.php');

if( isset($_COOKIE["key"]) && isset($_COOKIE["key2"]) ) {
    $key = $_COOKIE["key"];
    $key2 = $_COOKIE["key2"];

    $result = mysqli_query($db, "SELECT username FROM users WHERE id = $key");
    $ambil = mysqli_fetch_assoc($result);

    if( $key2 === hash("sha256", $ambil["username"]) ) {
        $_SESSION["login"] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["Login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hasil = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_num_rows($hasil) === 1) {

        $ambil = mysqli_fetch_assoc($hasil);

        if (password_verify($password, $ambil["password"])) {

            $_SESSION["login"] = true;

            if( isset($_POST["remember"]) ) {
                setcookie("key", $ambil["id"], time() + 60);
                setcookie("key2", hash("sha256", $ambil["username"]), time() + 60);
            }

            header("Location: web.php");
            exit;
        }
    }

    $error = true;
}
?>

<head>
	<title>LOGIN</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<style>
	body{
		padding-top: 10%;
	}
	.form-control{
		border-radius: 12px;
		box-sizing : border-box;
		width: 80%;
		padding: 10px;
		font-size: 9pt;
		margin-bottom: 2px;
	}
	.container{
		width: fit-content;
	}
	.box{
		width: 350px;
		background: #ADD8E6;
		margin: auto;
		padding: 15px 20px 26px;
		border-radius: 30px;
	}
	.form-label{
		font-size: 19px;
		font-family: serif;
		color: black;
	}
</style>
<body>
	<?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic;">username/password salah</p>
    <?php endif; ?>
<body background="12.jpg">
<form action="" method="POST">
	<div class="box">
		<h1 align="center" style=" font-size : 37px; font-family: segoe-script; color :black;">Login.</h1>
			<div align="center">
				<div class="mb-3">
					<label for="username" class="form-label" >Username</label>
					<input type="text" class="form-control" name="username" id=username placeholder="Username or E-mail" required>
				</div><br>
				<div>
					<label for="password" class="form-label" >Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
				</div>
				<div>
                	<input type="checkbox" name="remember" id="remember">
                	<label for="remember">Remember Me</label>
				</div>            
				<br>
				<div align="center" border="1">
					<input type="submit" class="btn btn-warning" name="submit" value="Login" style="font-size: 19px; width:90px; border-radius:12px ">
				</div><br>
					<p align="center" style="font-size: 15px; color:black;">Don't have an Account?</p>
				<div align="center">
					<a href="start.php" class="btn btn-primary" style="font-size: 19px; width:90px; border-radius:12px">Back</a>
				</div>
			</div>	
	</div>
</form>
</body>