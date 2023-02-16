<?php
require '../../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Data Kamar
                        <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $id_kamar = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM kamars WHERE id_kamar='$id_kamar' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $kamar = mysqli_fetch_array($query_run);
                            ?>
                                <div class="mb-3">
                                    <label>Tipe Kamar</label>
                                    <p class="form-control">
                                        <?= $kamar['tipe'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Kamar A/N</label>
                                    <p class="form-control">
                                        <?= $kamar['an'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>No Kamar</label>
                                    <p class="form-control">
                                        <?= $kamar['no'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Lantai</label>
                                    <p class="form-control">
                                        <?= $kamar['lantai'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Status</label>
                                    <p class="form-control">
                                        <?= $kamar['status'];?>
                                    </p>
                                </div>

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