<?php
    session_start();
    require '../../koneksi.php';

?>

<?php include('../layout/header.php') ?>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="car-header">
                        <h4>Data Fasilitas Kamar
                            <a href="tambah_fasilitas_kamar.php" class="btn btn-primary float-end">Tambah Fasilitas Kamar</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped" id = "table">
                            <thead>
                                <tr>
                                    <th>No Fasilitas</th>
                                    <th>Fasilitas Kamar</th>
                                    <!-- <th>Hobi</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                    $query = "SELECT * FROM fasilitas_kamar";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $faskamar)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $faskamar['no_fasilitas']?></td>
                                                <td><?= $faskamar['fasilitas']?></td>

                                                <td>
                                                    <a href="detail_fasilitas_kamar.php?id=<?= $faskamar['no_fasilitas']; ?>" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="edit_fasilitas_kamar.php?id=<?= $faskamar['no_fasilitas']; ?>" class="btn btn-success btn-sm">Ubah Data</a>
                                                    <form action="config/controller_kamar.php" method="POST" class="d-inline">
                                                        <button type="submit" name="hapus_fasilitas_kamar" value="<?=$faskamar['no_fasilitas'];?>" class="btn btn-danger btn-sm">Hapus Data</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Belum Ada Data kamar </h5>";
                                    }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('../layout/footer.php') ?>
