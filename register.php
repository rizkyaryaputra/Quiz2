<?php

session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

include('index.php');

if( isset($_POST["Register"]) ) {

    if( register($_POST) > 0 ) {
        echo "<script>
                alert('Berhasil Mendaftar! Silahkan masuk menu Login.');
              </script>";
    } else {
        echo mysqli_error($db);
    }

}

?>

<br>
<head>
    <title>REGISTER</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<style>
	body{
		padding-top: 5%;;
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
		padding: 10px 20px 26px;
		border-radius: 30px;
	}
	.form-label{
		font-size: 19px;
		font-family: serif;
		color: black;
	}
</style>
<body>
<body background="12.jpg">
		<form action="" method="post">
			<div class="box">
				<h1 align="center" style=" font-size : 37px; font-family: segoe-script; color :black;">Register.</h1>
				<div align="center">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Name" required/>
                    </div>
					<div>
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username" required>
					</div><br>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email" required/>
                    </div><br>
					<div>
						<label for="password" class="form-label" >Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>            
					<br>
					<div align="center" border="1">
						<input type="submit" class="btn btn-warning" name="Register" value="Register" style="font-size: 19px; width:100px; border-radius:12px ">
					</div><br>
					<p align="center" style="font-size: 15px; color:black;">Already have an Account?</p>
					<div align="center">
						<a href="start.php" class="btn btn-primary" style="font-size: 19px; width:90px; border-radius:12px">Back</a>
					</div>
				</div>	
			</div>
		</form>
</body>