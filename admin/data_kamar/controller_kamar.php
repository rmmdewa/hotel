<?php
session_start();
require '../../koneksi.php';

if(isset($_POST['hapus_data_kamar']))
{
    $id_kamar = mysqli_real_escape_string($con, $_POST['hapus_data_kamar']);

    $query = "DELETE FROM kamars WHERE id_kamar='$id_kamar' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Kamar Berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Kamar Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['ubah_data_kamar']))
{
    $id_kamar = mysqli_real_escape_string($con, $_POST['id_kamar']);
    $tipe = mysqli_real_escape_string($con, $_POST['tipe']);
    $an = mysqli_real_escape_string($con, $_POST['an']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $lantai = mysqli_real_escape_string($con, $_POST['lantai']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $no_fasilitas = mysqli_real_escape_string($con, $_POST['no_fasilitas']);

    $query = "UPDATE kamars SET tipe='$tipe', an='$an', no='$no', lantai='$lantai', status='$status', no_fasilitas='$no_fasilitas' WHERE id_kamar='$id_kamar' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Kamar Berhasil Diubah";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Kamar Gagal Diubah";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['simpan']))
{
    $tipe = mysqli_real_escape_string($con, $_POST['tipe']);
    $an = mysqli_real_escape_string($con, $_POST['an']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $lantai = mysqli_real_escape_string($con, $_POST['lantai']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $no_fasilitas = mysqli_real_escape_string($con, $_POST['no_fasilitas']);


    $query = "INSERT INTO kamars (tipe,an,no,lantai,status,no_fasilitas) VALUES
    ('$tipe', '$an', '$no', '$lantai', '$status','$no_fasilitas')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data kamar Berhasil Disimpan";
        header("Location: tambah_kamar.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data kamar Gagal Disimpan";
        header("Location: tambah_kamar.php");
        exit(0);
    }
}
?>