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



	<title>Activities</title>
</head>
<body>


<?php include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">

<div class="title">
	<h3> Activities </h3>
</div>
	
	
		<div class="row table">
			<table id="datatable" class="table display" >
        <thead>
            <tr>
                <th>Professor</th>
                <th>Subject</th>
                <th>Activity Title</th>
                <th>Date Uploaded</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            	
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
             <tr>
                
                <td>Professor 1</td>
                <td>Math</td>
                <td>Activity  1</td>
                <td>2011-04-25</td>
                <td><button type="button" class="btn btn-primary"><i class='bx bxs-download'></i> Download</button></td>
              
            </tr>
            
        </tfoot>
    </table>
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