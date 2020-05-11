<?php
	
	require_once("db.php");
	require_once("includes/header.php");
?>

	<div class="container content mb-5">
		<h4 class="text-center mt-3 welcome-text">Welcome to Our Resume Generator This Generator Get your input and Make your resume easily..!</h4>

		<form method="POST" action="StorePersonalData.php" id="form-container" enctype="multipart/form-data">
			<p class="mt-4 side-heading"><b>Personal Information :</b></p>
			<div class="row mt-4">
					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="name" class="text-center">Image</label>
								</div>
								<div class="col-lg-6">
									<input type="file" name="employeeimage" class="form-control-file" id="fruit_image">
								</div>
							</div>
						</div>		
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">Name</label>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name" required>
								</div>
							</div>
						</div>		
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">Phone Number</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="pnumber" pattern="[0-9]{10}" class="form-control" id="pnumber"  placeholder="Enter Phone Number" required>
								</div>
							</div>
						</div>		
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">E-mail</label>
								</div>
								<div class="col-lg-6">
									<input type="email" class="form-control" name="email" id="pnumber"  placeholder="Enter E-mail" required>
								</div>
							</div>
						</div>		
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">Address</label>
								</div>
								<div class="col-lg-6">
									<input type="text" name="address" class="form-control" id="address"  placeholder="Enter Address" required>
								</div>
							</div>
						</div>		
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">Date Of Birth</label>
								</div>
								<div class="col-lg-6">
									<input type="date" class="form-control" name="dob" id="dob"  placeholder="Enter Address" required>
								</div>
							</div>
						</div>		
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">Designation</label>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" name="designation" id="designation"  placeholder="Enter Your Designation" required>
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="email" class="text-center">Website (optional)</label>
								</div>
								<div class="col-lg-6">
									<input type="text" class="form-control" id="website" name="website"  placeholder="Enter Your Website">
								</div>
							</div>
						</div>

					</div>


					<div class="col-lg-12  mt-3"><hr></div>
					
			
			<button type="submit" name="submit" class="btn btn-primary m-auto d-block submit-btn">Next</button>
		</form>
	</div>

</div>
	<?php
		require_once('includes/footer.php')
	?>