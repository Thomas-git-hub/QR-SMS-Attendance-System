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

	<div class="container-fluid">

		<div class="row d-flex justify-content-center mt-5">
				<div class="card text-center">
				  <div class="card-header">
				    <h6 class="h6-system-title mt-3">QR Code Attendance Monitoring System</h6>
				    <h6 class="h6-system-title">w/ SMS Notification</h6>
				  </div>
				  <div class="card-body">
				    <form>
					  <div class="form-group mb-3">
					  	<i class='bx bxs-user-circle d-flex justify-content-center mx-4 mb-1 mt-2'></i>
					    <!-- <label for="exampleInputEmail1">Email address</label> -->
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email Address">
					  </div>
					  <div class="form-group mb-3">
					  	<i class='bx bxs-lock-open	wq d-flex justify-content-center mx-4 mb-1'></i>
					    <!-- <label for="exampleInputPassword1">Password</label> -->
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary btn-submit">Login</button>
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


	<!-- <div class="container-fluid">

	<div class="row" style="background-color: #f6f8fd;">
		<div class="col d-flex justify-content-center mt-2">
			<h6 class="h6-system-title">QR Code Attendance Monitor System With SMS Notification</h6>		
		</div>
	</div>
	<div class="row" style="background-color: #f6f8fd;">
		<div class="col d-flex justify-content-center">
			<h6 class="h6-system-title">of</h6>		
		</div>
	</div>
	<div class="row" style="background-color: #f6f8fd;">
		<div class="col d-flex justify-content-center">
			<h6 class="h6-system-title">Bacong National High School</h6>		
		</div>
	</div>

	<div class="row">
		<div class="col d-flex justify-content-center">

			<div class="card mt-4" style="width: 50rem;">

				<div class="row">
					<div class="col-3 col-img">
						<div class="d-flex justify-content-center mt-5">
							<img src="assets/svg/secure-login.svg" style="width: 70%;">
						</div>

						<div class="row">
							<div class="col-4 d-flex justify-content-center mt-5">
								<i class="bi bi-facebook"></i>
							</div>
							<div class="col-4 d-flex justify-content-center mt-5">
								<i class="bi bi-instagram"></i>
							</div>
							<div class="col-4 d-flex justify-content-center mt-5">
								<i class="bi bi-youtube"></i>
							</div>
						</div>
					</div>

					<div class="col-9">	
					  <div class="card-header d-flex justify-content-center">
					    <h3 class="h3-login-title mt-3">L O G I N</h3>
					  </div>

					  <div class="card-body">

					    <form>
						  <div class="form-group">
						    <label class="text-label" for="exampleInputEmail1">Username</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username or Email">
						  </div>

						  <div class="form-group  mt-3">
						    <label class="text-label" for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>

						  <div class="d-flex justify-content-center">
						  	<button type="submit" class="btn btn-primary btn-submit mt-3">
						  		Submit
						  	</button>
						  </div>
						</form>

					  </div>

					</div>

				</div>
			</div>

	  	</div>
	 </div>

	 <div class="row mt-5">
		 <div class="col-12 d-flex justify-content-center mt-5">
			 <p class="p-footer">Bicol University Polangui Campus</p>
			 <p class="p-footer">@2022/2023</p>
		 </div>
	 </div>

</div> -->

</div>

  
</body>
</html>