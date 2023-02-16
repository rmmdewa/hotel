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
                        <h4>Data Kamar
                            <a href="tambah_kamar.php" class="btn btn-primary float-end">Tambah Data Kamar</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped" id = "table">
                            <thead>
                                <tr>
                                    <th>Id Kamar</th>
                                    <th>Tipe Kamar</th>
                                    <th>Kamar A/N</th>
                                    <th>No Kamar</th>
                                    <th>Lantai Kamar</th>
                                    <th>Status Kamar</th>
                                    <th>Fasilitas No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                    $query = "SELECT * FROM kamars";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $kamar)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $kamar['id_kamar']?></td>
                                                <td><?= $kamar['tipe']?></td>
                                                <td><?= $kamar['an']?></td>
                                                <td><?= $kamar['no']?></td>
                                                <td><?= $kamar['lantai']?></td>
                                                <td><?= $kamar['status']?></td>
                                                <td><?= $kamar['no_fasilitas']?></td>
                                                <td>
                                                    <a href="detail_data_kamar.php?id=<?= $kamar['id_kamar']; ?>" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="edit_data_kamar.php?id=<?= $kamar['id_kamar']; ?>" class="btn btn-success btn-sm">Ubah Data</a>
                                                    <form action="controller_kamar.php" method="POST" class="d-inline">
                                                        <button type="submit" name="hapus_data_kamar" value="<?=$kamar['id_kamar'];?>" class="btn btn-danger btn-sm">Hapus Data</button>
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
