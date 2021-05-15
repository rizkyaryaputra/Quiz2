<?php
$db = mysqli_connect("localhost", "root", "", "form");

function query($ambil){
  global $db;
  $result = mysqli_query($db, $ambil);

  if (!$result){
    echo mysqli_error ($db);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function register($data) {
    global $db;
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);

    $hasil = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($hasil) ) {
        echo "<script>
                alert('username sudah terdaftar, silahkan pilih yang lain');
              </script>";
        return false;
        
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($db, "INSERT INTO users (username, password)
                VALUES ('$username', '$password')");
    
    return mysqli_affected_rows($db);
}