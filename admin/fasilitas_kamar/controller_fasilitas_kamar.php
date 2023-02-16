<?php
session_start();
require '../../koneksi.php';

if(isset($_POST['hapus_fasilitas_kamar']))
{
    $no_fasilitas = mysqli_real_escape_string($con, $_POST['hapus_fasilitas_kamar']);

    $query = "DELETE FROM fasilitas_kamar WHERE no_fasilitas='$no_fasilitas' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Fasilitas Kamar Berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Fasilitas Kamar Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['ubah_fasilitas_kamar']))
{
    $no_fasilitas = mysqli_real_escape_string($con, $_POST['no_fasilitas']);
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);


    $query = "UPDATE fasilitas_kamar SET fasilitas='$faskm' WHERE no_fasilitas='$no_fasilitas' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Fasilitas Kamar Berhasil Diubah";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Fasilitas Kamar Gagal Diubah";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['simpan']))
{
    $faskm = mysqli_real_escape_string($con, $_POST['faskm']);



    $query = "INSERT INTO fasilitas_kamar (fasilitas) VALUES
    ('$faskm')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Fasilitas kamar Berhasil Disimpan";
        header("Location: tambah_fasilitas_kamar.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Fasilitas kamar Gagal Disimpan";
        header("Location: tambah_fasilitas_kamar.php");
        exit(0);
    }
}
?>