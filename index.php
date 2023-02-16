<?php include 'includes/header.php';?>

	<main id="main">
		<div class="container">

			<div class="row section topspace">
				<div class="col-md-12">
					<h2 class="section-title"><span>HOTEL HEBAT</span></h2>
					<div class=" text-center">

						    <div class="row mb-5" >
								<div class="">
									<div class="card mb-5" style="">
										<img src="assets/images/eas.jpg" data-aos="fade-down" class="card-img-top">
									</div>
								</div>

								
								
								<form action="" method="post">
									<div class="row">
										<div class="col"  id="about">
											<label>Tanggal Check in</label><br>
											<input type="date" name="cekin">
										</div>
										<div class="col">
											<label>Tanggal Check out</label><br>
											<input type="date" name="cekout">
										</div>
										<div class="col">
											<label>Jumlah Kamar</label><br>
											<input type="text" name="jumlah">
											<button type="button" data-bs-toggle="modal" data-bs-target="#modalpemesanan">Pesan</button>
										</div >
									</div>
								</form>	
							</div>
  					</div>
				</div>
			</div> 
								<!-- Modal -->
								<div class="modal fade" id="modalpemesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">

										<div class=" text-center">
											<div class="row mb-5 card" >
												<form method="post" action="ceklogin.php" class="mb-5">
													<h1 class="mb-4">Pemesanan Hotel</h1>
													<div class="mb-3 text-center">
														<label class="form-label">Nama Pemesan</label>
														<input type="text" class="form-control" name="nama_pemesan">
													</div>
													<div class="mb-3 text-center">
														<label class="form-label">Email Pemesan</label>
														<input type="email" class="form-control" name="email_pemesan">
													</div>
													<div class="mb-3 text-center">
														<label class="form-label">No Hp Pemesan</label>
														<input type="text" class="form-control" name="hp_pemesan">
													</div>
													<div class="mb-3 text-center">
														<label class="form-label">Nama Tamu</label>
														<input type="text" class="form-control" name="nama_tamu">
													</div>
													<div>
														<label>No. Kamar</label>
														<select name="id_kamar" class="form-control">
															<option value="">Pilih Kamar</option>
															<?php 
															include 'koneksi.php';
															$data = mysqli_query($con, "select * from kamars");
															while($d = mysqli_fetch_array($data)) {
																?>
																<option value="<?php echo $d['id_kamar']; ?>"> <?php echo $d['no']; ?></option>
																<?php 
															}
															?>
														</select>
													</div>
													
												</form>												
											</div>
										</div>

									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
									</div>
								</div>
								</div>
	
			<h2 class="section-title mt-4"><span>About Us</span></h2>

			<div class="d-flex">

				<div class="row mb-5" >
					<div class="col-sm-12 font-monospace">
						<p class="lead text-center" >
							Lepaskan diri Anda ke Hotel Hebat, dikelilingin oleh keindahan pegunungan yang indah, danau, dan sawah menghijau.
							Nikmati sore yang hangat dengan berenang di kolam renang dengan pemandangan matahari terbenam yang memukau. Kid's Club yang
							luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center 
							kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 300 delegasi.
							Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.
						</p>
					</div>
				</div>
				
			</div>

			<h2 class="section-title" id="kamar"><span>Kamar</span></h2>

			<div class="d-flex">
				<div class="row mb-5" >
					<div class="col-sm-12 font-monospace">

							<div class="row row-cols-4 row-cols-md-2 g-4 container">
							<div class="col">
									<div class="card">
									<h5 class="section-title mt-3">Tipe Standard</h5>
									<img src="assets/images/bas.jpg" class="card-img-top" alt="Skyscrapers"/>
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">
										This is a longer card with supporting text below as a natural lead-in to
										additional content. This content is a little bit longer.
										</p>
										<a href="#!" class="btn btn-success">Button</a>
									</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
									<h5 class="section-title mt-3">Tipe Reguler</h5>
									<img src="assets/images/bas.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">
										This is a longer card with supporting text below as a natural lead-in to
										additional content. This content is a little bit longer.
										</p>
										<a href="#!" class="btn btn-success">Button</a>
									</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
									<h5 class="section-title mt-3">Tipe Deluxe</h5>
									<img src="assets/images/bas.jpg" class="card-img-top" alt="Palm Springs Road"/>
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">
										This is a longer card with supporting text below as a natural lead-in to
										additional content. This content is a little bit longer.
										</p>
										<a href="#!" class="btn btn-success">Button</a>
									</div>
									</div>
								</div>
								<div class="col">
									<div class="card">
									<h5 class="section-title mt-3">Tipe Superior</h5>
									<img src="assets/images/bas.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">
										This is a longer card with supporting text below as a natural lead-in to additional content.
										</p>
										<a href="#!" class="btn btn-success">Button</a>
									</div>
									</div>
								</div>								
							</div>

							
					</div>					
				</div>
			</div>

		</div>	
	</main>

	<?php include 'includes/footer.php';?>