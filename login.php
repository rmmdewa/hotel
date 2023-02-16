<?php 
include'includes/header.php'

?>
<main id="main">
		<div class="container">
			<div class="row section topspace">
				<div class="col-md-3">
					<h2 class="section-title"><span>HOTEL HEBAT</span></h2>
					<div class=" text-center">
						    <div class="row mb-5 card" >

								<form method="post" action="ceklogin.php" class="mb-5">
                <!-- <img src="assets/images/letris1-removebg-preview.png" width="100%" alt=""> -->
                <h1 class="mb-4">Login</h1>
                <div class="mb-3 text-center">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp" name="username" Required>
                </div>
                <div class="mb-3 text-center">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" Required>
                </div>
                <button type="submit" class="btn btn-primary" >Login</button>
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