<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Qr Attendance System</title>
	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	

	<!-- online lng gumagana yung box icon -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
</head>
<body>
	<?php include_once('includes/nav.php') ?>

	<div class="container-fluid p-3">

		<div class="row d-flex justify-content-center mt-1">
				<div class="card card-registration text-center mb-5">
				  <div class="card-header">
				  	<img src="assets/png/bnhs.png" alt="website logo" style="width: 10%;">
				    <h6 class="h6-system-title mt-3">Student Registration Form</h6>
				  </div>
				  <div class="card-body">
				    <form>
				    	<div class="row row-reg-form">
				    		<div class="col form-group mb-3">
							    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Full Name</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First, Middle, Last name">
						   	</div>

						   	<div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Gender</label>
						    <select class="form-select mb-3"  name="Gender"  required>
				                    <option selected="true" disabled="disabled">Select Gender</option>
				                    <option value="Male">Male</option>
				                    <option value="Female">Female</option>
				                    <option value="Non-Binary">Non-Binary</option>
				            </select>
						  </div>
				    	</div>

				    	<div class="row row-reg-form">
				    	  <div class="col form-group mb-3">
							    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Address</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Current Address">
						  </div>

						  <div class="col form-group mb-3">
							    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Guardian Phone No.</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09-">
						  </div>
				    	</div>

				    	<div class="row row-reg-form">
				    	  <div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Select  Grade Level</label>
						    <select class="form-select mb-3"  name="Gender"  required>
				                    <option selected="true" disabled="disabled">Select Strand</option>
				                    <option value="11">11</option>
				                    <option value="12">12</option>
				            </select>
						  </div>

				    	  <div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Strand</label>
						    <select class="form-select mb-3"  name="Gender"  required>
				                    <option selected="true" disabled="disabled">Select Strand</option>
				                    <option value="ABM">ABM</option>
				                    <option value="STEM">STEM</option>
				                    <option value="HUMMS">HUMMS</option>
				            </select>
						  </div>

						  <div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Block</label>
						    <select class="form-select"  name="Gender"  required>
				                    <option selected="true" disabled="disabled">Select your Block</option>
				                    <option value="A">A</option>
				                    <option value="B">B</option>
				                    <option value="C">C</option>
				            </select>
						  </div>
				    	</div>

				    	<div class="row row-reg-form">
				    	  <div class="col form-group mb-3">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputPassword1">Email as Username</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="@sample.com">
						  </div>
						
						  <div class="col form-group mb-3">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>

						  <div class="col form-group mb-3">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputPassword1">Confirm Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Retype your Password">
						  </div>
				    	</div>

					  <button type="submit" class="btn btn-primary btn-submit">Submit</button>
					</form>
				  </div>
				  <div class="card-footer text-muted">
				  	<img src="assets/png/bupc.png" width="7%;">
				  	<img src="assets/png/bu.png" width="7%;">
				    <p class="p-footer mt-2">Bicol University Polangui Campus</p>
			 		<p class="p-footer">@2022/2023</p>
				  </div>
				</div>
			</div>
		</div>
	</div>

</div>

  
</body>
</html>