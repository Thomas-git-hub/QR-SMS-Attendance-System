<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Qr Attendance System</title>
	

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	

	<!-- online lng gumagana yung box icon -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
</head>
<body>
	<?php include_once('includes/nav.php') ?>

	<div class="container-fluid">

		<div class="row d-flex justify-content-center mt-1">
				<div class="card card-login text-center">
				  <div class="card-header">
				  	<img src="assets/png/bnhs.png" alt="website logo" style="width: 10%;">
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

</div>

  
</body>
</html>