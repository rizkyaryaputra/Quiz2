<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

?>

<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
    <style>
    .kelas{
        align-items: center;
    }
    .word{
        color: black;
        font-size: 40px;
        align-content: center;
        font-family: serif;
        margin: 300px 380px 5px 380px;
        background-color: #ADD8E6;
        border-radius: 20px;
    }
    .weird{
        color: white;
        font-size: 23px;
        align-content: center;
        font-family: serif;
        margin: 0px 540px 0px 540px;
        border-radius: 8px;
    }
    </style>
<body>
        <body background="12.jpg">
            <p class="word" align="center">SORRY! WE'RE UNDER MAINTENANCE</p>
            <p class="weird" align="center">PLEASE COME BACK LATER</p><br>
            <div class= "input" align="center">
                <input type="button" class="btn btn-danger" onclick='top.location="logout.php"' value="Logout" style="width: 7%; font-size:25px; border-radius:10px; padding:0px 0px 0px 0px;">
            </div>
</body>
