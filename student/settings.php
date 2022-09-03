<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- online lng gumagana yung box icon -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
	<link rel="stylesheet" href="../css/sidebar.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<title>Student</title>
</head>
<body>


<?php include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">

<div class="title">
	<h3> Settings </h3>
</div>
	
	
		<div class="row settings">
            <form method="">
            <div class="row">
                <h5 class="update"> Update Password </h5>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Old Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="old password">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">New Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="new password">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Confirm password">
            </div>
            <div class="mb-3">
                  <button type="button" class="btn btn-primary">Update Password</button>
            </div>
          
			</form>
	   </div>


</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/sidebar.js"></script>
</body>
</html>