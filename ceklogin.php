<?php
// panggil koneksi database
include "koneksi.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);
 
$login = mysqli_query($con, "SELECT * FROM users WHERE username = '$user'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    
    if($data['password'] == $pass){

	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $pass;
    header("location:admin/data_kamar");
} else {
	echo "<script>alert('Maaf login gagal, Password anda tidak sesuai');
            document.location='login.php'</script>";
        } 
    }else{
    echo "<script>alert('Maaf login gagal, Username anda tidak terdaftar');
    document.location='login.php'</script>";
    }
 
?>