<html>
<head>
    <title>START PAGE</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<style>
    h1{
        font-family: serif;
        font-size: 120px;
        color: black;
        background-color:#ADD8E6;
        margin: 260px 500px 0px 500px;
        border-radius: 30px;
    }
    .input{
        display: flexbox;
    }
</style>
<body>
    <body background="12.jpg">
    <h1 align="center">Welcome.</h1><br>
    <div class= "input" align="center">
        <input type="button" class="btn btn-warning" onclick='top.location="login.php"' value="LOGIN" style="width: 9%; font-size:25px; border-radius:10px; padding:0px 0px 0px 0px;">
        <input type="button" class="btn btn-warning" onclick='top.location="register.php"' value="REGISTER" style="width: 10%; font-size:25px; border-radius:10px; padding:0px 0px 0px 0px;">
    </div>
</body>
</html>