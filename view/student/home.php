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
	<h3> Attendance Status </h3>
</div>
	
	
		<div class="row table">
			<table id="datatable" class="table display" >
        <thead>
            <tr>
                <th>Date</th>
                <th>Professor</th>
                <th>Subject</th>
                <th>Attendance Log</th>
                <th>Time In/Out</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            	<td>2011-04-25</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>8:00 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2011-04-25</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>8:30 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-danger">Late</span>
				</td>
            </tr>
             <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				 <span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2011-04-26</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>8:00 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2011-04-26</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>8:30 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-danger">Late</span>
				</td>
            </tr>
             <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
           
           <tr>
            	<td>2011-04-27</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>8:00 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2011-04-27</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>8:30 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-danger">Late</span>
				</td>
            </tr>
             <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				 <span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2011-04-25</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>8:00 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2011-04-25</td>
                <td>Tiger Nixon</td>
                <td>Math</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
            <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>8:30 am</td>
                <td>Time In</td>
                <td>
				<span class="badge rounded-pill text-bg-danger">Late</span>
				</td>
            </tr>
             <tr>
            	<td>2022-05-26</td>
                <td>Karen Karen</td>
                <td>English</td>
                <td>3:00 pm</td>
                <td>Time Out</td>
                <td>
				<span class="badge rounded-pill text-bg-primary">On Time</span>
				</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                 <th>Date</th>
                <th>Professor</th>
                <th>Subject</th>
                <th>Attendance Log</th>
                <th>Time In/Out</th>
                <th>Status</th>
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