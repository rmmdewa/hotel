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
                        <h4>Edit Data Kamar
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
                                <form action="controller_kamar.php" method="post">
                                    <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']; ?>">
                                    <div class="mb-3">
                                        <label>Tipe Kamar</label>
                                        <select id="type" name="tipe" class="form-control">
                                            <?php $tipe = $kamar['tipe'];?>
                                            <option value="Reguler" <?= $tipe == 'Reguler' ? 'selected' : null; ?> >Reguler</option>
                                            <option value="Deluxe" <?= $tipe == 'Deluxe' ? 'selected' : null; ?> >Deluxe</option>
                                            <option value="Superior" <?= $tipe == 'Superior' ? 'selected' : null; ?> >Superior</option>
		                                </select>
                                    </div>
                                    <!-- <div class="mb-3">
                                        <label>Tipe Kamar</label>
                                        <input type="text" name="tipe" value="<?= $kamar['tipe'];?>" class="form-control">
                                    </div> -->
                                    <div class="mb-3">
                                        <label>Kamar A/N</label>
                                        <input type="text" name="an" value="<?= $kamar['an'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No Kamar</label>
                                        <input type="text" name="no" value="<?= $kamar['no'];?>" class="form-control">
                                    </div>                       
                                    <!-- <div class="mb-3">
                                        <label>Lantai Kamar</label>
                                        <input type="text" name="lantai" value="<?= $kamar['lantai'];?>" class="form-control">
                                    </div> -->
                                    <div class="mb-3">
                                        <label>Lantai Kamar</label>
                                        <select id="lt" name="lantai" class="form-control">
                                            <?php $lantai = $kamar['lantai'];?>
                                            <option value="2" <?= $lantai == '2' ? 'selected' : null; ?>>2</option>
                                            <option value="3" <?= $lantai == '3' ? 'selected' : null; ?>>3</option>
                                            <option value="4" <?= $lantai == '4' ? 'selected' : null; ?>>4</option>
                                            <option value="5" <?= $lantai == '5' ? 'selected' : null; ?>>5</option>
                                            <option value="6" <?= $lantai == '6' ? 'selected' : null; ?>>6</option>
                                            <option value="7" <?= $lantai == '7' ? 'selected' : null; ?>>7</option>
		                                </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Status Kamar</label>
                                        <select id="st" name="status" class="form-control">
                                            <?php $status = $kamar['status'];?>
                                            <option value="Kosong" <?= $status == 'Kosong' ? 'selected' : null; ?> >Kosong</option>
                                            <option value="Terisi" <?= $status == 'Terisi' ? 'selected' : null; ?>>Terisi</option>
                                            <option value="Maintance"> <?= $status == 'Maintance' ? 'selected' : null; ?>Maintance</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                    <label>No Fasilitas</label>
                                    <select name="no_fasilitas" class="form-control">
                                        <?php $no_fasilitas = $kamar['no_fasilitas'];?>
                                        <option value="">Pilih Fasilitas</option>
                                            <?php 
                                            include '../../koneksi.php';
                                            $data = mysqli_query($con, "select * from fasilitas_kamar");
                                            while($d = mysqli_fetch_array($data)) {
                                                ?>
                                                <option value="<?php echo $d['no_fasilitas']; ?>"> <?php echo $d['no_fasilitas']; ?></option>
                                                <?php 
                                            }
                                            ?>
                                    </select>
                            </div>
                                    <div class="mb-3">
                                        <button type="submit" name="ubah_data_kamar" class="btn btn-primary">
                                            Ubah Data Kamar
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