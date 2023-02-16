<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <h4>Tambahkan Kamar
                            <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="controller_kamar.php" method="post">
                            <div class="mb-3">
                                <label>Tipe Kamar</label> <br>
                                <select id="type" name="tipe" class="form-control">
                                    <option value="Reguler">Reguler</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Superior">Superior</option>
                                </select>
                            </div>
                            <!-- <div class="mb-3">
                                <label >Tipe Kamar</label>
                                <input type="text" name="tipe" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <label >Kamar A/N</label>
                                <input type="text" name="an" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label >No Kamar</label>
                                <input type="text" name="no" class="form-control">
                            </div>
                            <!-- <div class="mb-3">
                                <label >Lantai Kamar</label>
                                <input type="text" name="lantai" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <label>Lantai Kamar</label> <br>
                                <select id="lt" name="lantai" class="form-control">
			                        <option value="2">2</option>
			                        <option value="3">3</option>
			                        <option value="4">4</option>
			                        <option value="5">5</option>
			                        <option value="6">6</option>
			                        <option value="7">7</option>
		                        </select>
                            </div>
                            <div class="mb-3">
                                <label>Status Kamar</label> <br>
                                <select id="st" name="status" class="form-control">
			                        <option value="Kosong">Kosong</option>
			                        <option value="Terisi">Terisi</option>
			                        <option value="Maintance">Maintance</option>
		                        </select>
                            </div>
                            <div class="mb-3">
                                <label>Fasilitas No</label> <br>
                                <select name="no_fasilitas" class="form-control">
                                    <option value="">Fasilitas No</option>
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
                            
                            <!-- <div class="mb-3">
                                <label >Hobi</label>
                                <input type="text" name="hobi" class="form-control">
                            </div> -->
                            <div class="mb-3">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>