<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- online lng gumagana yung box icon -->
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/sidebar.css">
   <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

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


<script src="../js/sidebar.js"></script>
<script src="../js/jquery.min.js"></script>

<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/jszip.min.js"></script>
<script type="application/json" src="../js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="../js/pdfmake.min.js"></script>

<script type="text/javascript" src="../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function () {
        $('#datatable').DataTable();
    });
</script>


</body>
</html>