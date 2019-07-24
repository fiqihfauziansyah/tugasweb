<?php
  include('koneksi.php'); // menghubungkan php dengan koneksi database
  session_start(); // mengaktifkan session

  $username = $_POST['username'];
  $password = $_POST['password'];

  
  // menyeleksi data user dengan username dan password yang sesuai
  $query = "SELECT * FROM user WHERE username='$username' and password='$password'";

  // mengecek kembali koneksi database kemudian menjalankan perintah query
  $penghubung = mysqli_query($db_connect, $query);
  // cek apakah username dan password di temukan pada database
  if(mysqli_num_rows($penghubung) > 0){
    $data = mysqli_fetch_assoc($penghubung);

    // cek jika user login sebagai admin
    if($data['level']=="admin")
    {

        // buat session login dan username
  		$_SESSION['username'] = $username;
  		$_SESSION['level'] = "admin";
  		header ('location: http://localhost/scripts/web/loginadmin.php');
  		
    }
    elseif ($data['level']=="user"){
    // buat session login dan username
    $_SESSION['akses'] = TRUE;
    $_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
  
		header ('location: http://localhost/scripts/web/index.php');
    }
    else {
    // alihkan ke halaman login kembali
    header ('location: login/login.php');
    }
  } 
?>