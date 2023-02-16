<?php
    require 'koneksi.php';

    $tipefas = mysqli_real_escape_string($con, $_POST['tipefas']);
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);
    $tipefas = mysqli_real_escape_string($con, $_POST['tipefas']);
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);
    $tipefas = mysqli_real_escape_string($con, $_POST['tipefas']);
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);
    $tipefas = mysqli_real_escape_string($con, $_POST['tipefas']);
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);
    $tipefas = mysqli_real_escape_string($con, $_POST['tipefas']);
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);



    $query = "INSERT INTO fasilitas_kamar (tipe_fasilitas,fasilitas) VALUES
    ('$tipefas', '$faskm')";
    
    $query_run = mysqli_query($con, $query);
    header("Location: tambah_fasilitas_kamar.php");

?>