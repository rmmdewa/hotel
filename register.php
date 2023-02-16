<?php 
include'includes/header.php'

?>
<main id="main">
		<div class="container">
			<div class="row section topspace">
				<div class="col-md-12">
					<h2 class="section-title"><span>HOTEL HEBAT</span></h2>
					<div class=" text-center">
						    <div class="row mb-5 card" >

								<form method="POST" action="#" class="mb-5">
                <!-- <img src="assets/images/letris1-removebg-preview.png" width="100%" alt=""> -->
                <h1 class="mb-4">Register</h1>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
                </div>
                <div class="mb-3">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-4">
                  <select name="level" id="">
                    <option value="Admin">Admin</option>
                    <option value="Guru">Ayam</option>
                    <option value="Siswa">Ikan</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" >Register</button>
              </form>
								
							</div>
  					</div>
        </div>
        
        
			</div> 

		</div>	
  </main>
  
<?php 
include'includes/footer.php'
?>