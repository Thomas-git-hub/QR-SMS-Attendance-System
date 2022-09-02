<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="css/home.css">



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
                  <button type="button" class="btn btn-primary">Update Password</button>
            </div>
          
			</form>
	   </div>


</div>

</div>
</body>



<script>
	$(document).ready(function () {
    $('#datatable').DataTable();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/sidebar.js"></script>

 

</html>