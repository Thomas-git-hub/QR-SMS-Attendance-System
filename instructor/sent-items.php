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
    <link rel="stylesheet" href="css/index.css">
    

	<title>Manage Attendance</title>
</head>
<body>



<?php
include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">  

    <div class="row mt-3 mb-5">
        <div class="col">
            <div class="card card-title-banner">
                  <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h1 class="h1-card-title">Sent Items</h1>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    
    <div class="row table">
      <table id="datatable" class="table display" >
        <thead>
            <tr>
                <th>Guardian Phone No.</th>
                <th>Sender</th>
                <th>Message</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>09123456789</td>
                <td>SMS Provider</td>
                <td>Mr. John Doe has <small>&nbsp;ENTERED&nbsp;</small> the class at <small>&nbsp;8:30am&nbsp;</small></td>
                <td>09/11/2022</td>
                <td>8:30am</td>
            </tr>
            <tr>
                <td>09123456789</td>
                <td>SMS Provider</td>
                <td>Mr. Philip Doe <small>&nbsp;LEAVE&nbsp;</small> the class at <small>&nbsp;10:30am&nbsp;</small></td>
                <td>09/11/2022</td>
                <td>8:30am</td>
            </tr>
            <tr>
                <td>09123456789</td>
                <td>SMS Provider</td>
                <td>Ms. Aly Doe was <small>&nbsp;EXCUSED&nbsp;</small>, QR Scanned at<small>&nbsp;10:30am&nbsp;</small></td>
                <td>09/11/2022</td>
                <td>8:30am</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Attendance Log</th>
                <th>TimeIn/TimeOut</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
    </div>
	
</div>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/sidebar.js"></script>
<script src="../js/bootstrap.min.js"></script>

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