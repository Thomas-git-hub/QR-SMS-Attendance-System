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

<div class="container">

	<div class="row mt-5">
		<div class="col d-flex justify-content-center mt-3">
			<div class="d-flex flex-column">
				<h3 class="login-title d-flex justify-content-center">QR Code Attendance Monitoring System</h3>
				<h3 class="login-title d-flex justify-content-center">w/ SMS Notification</h3>
			</div>
		</div>
	</div>

	<div class="row row-login-card mt-5">
		<!-- start student login card -->
		<div class="col d-flex justify-content-center mb-5">
			<a href="./login.php?user=student" class="a-card">
			<div class="card card-type-login">
			  <div class="card-header card-header-login d-flex justify-content-center">
			    <i class='bx bx-user-circle' ></i>
			  </div>
			  <div class="card-body d-flex justify-content-center">
			    <h3 class="login-card-title">S T U D E N T L O G I N</h3>
			  </div>
			</div>
			</a>
		</div>
		<!-- card end -->

		<!-- start instructor login card -->
		<div class="col d-flex justify-content-center mb-5">
		  <a href="./login.php?user=instructor" class="a-card">
			<div class="card card-type-login">
			  <div class="card-header card-header-login d-flex justify-content-center">
			    <i class='bx bxs-graduation' ></i>
			  </div>
			  <div class="card-body d-flex justify-content-center">
			    <h3 class="login-card-title">I N S T R U C T O R L O G I N</h3>
			  </div>
			</div>
			</a>
		</div>
		<!-- card end -->

		<!-- start instructor login card -->
		<div class="col d-flex justify-content-center mb-5">
			<a href="./login.php?user=admin" class="a-card">
			<div class="card card-type-login">
			  <div class="card-header card-header-login d-flex justify-content-center">
			    <i class='bx bx-street-view'></i>
			  </div>
			  <div class="card-body d-flex justify-content-center">
			    <h3 class="login-card-title">A D M I N L O G I N</h3>
			  </div>
			</div>
			</a>
		</div>
		<!-- card end -->
	</div>

</div>

  
</body>
</html>