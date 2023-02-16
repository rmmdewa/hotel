<?php
session_start();
require '../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="container mt-5">

        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card_header">
                        <h4>Edit Fasilitas Kamar
                            <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        <?php
                        if(isset($_GET['id']))
                        {
                            $no_fasilitas = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM fasilitas_kamar WHERE no_fasilitas='$no_fasilitas' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $faskamar = mysqli_fetch_array($query_run);
                                ?>
                                <form action="controller_fasilitas_kamar.php" method="post">
                                    <input type="hidden" name="no_fasilitas" value="<?= $faskamar['no_fasilitas']; ?>">
                                    <div class="mb-3">
                                        <label>Fasilitas Kamar</label>
                                        <input type="text" name="faskm" value="<?= $faskamar['fasilitas'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="ubah_fasilitas_kamar" class="btn btn-primary">
                                            Ubah Fasilitas Kamar
                                        </button>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Data Kamar Tidak Ditemukan</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>