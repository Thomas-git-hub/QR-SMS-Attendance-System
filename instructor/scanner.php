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

    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/instructor-card.css">

    <!-- testing lang ini na cdn -->
    <script src="../js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    

	<title>Scanner</title>
</head>
<body>

<?php
include 'includes/topnav.php';
?>

<body>
    <!-- <button id="btn">Click me!</button> -->
    <div class="row">
        <div class="col my-3">
            <a href="index.php"><i class='bx bx-arrow-back mx-3'></i></a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert">
              S U C C E S F U L
            </div>
            <div class="alert alert-danger" role="alert">
              F A I L E D
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center mt-5">
            <div class="card" style="width: 18rem;">
              <div class="card-body d-flex justify-content-center">
                <i class='bx bxs-camera' style="font-size: 150px;"></i>
              </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 p-5">
        <div class="col">
            <select class="form-select mb-3" id="grade"  name="grade"  required>
                    <option selected="true" disabled="disabled">TimeIn/TimeOut</option>
                    <option value="Time In">Time In</option>
                    <option value="Time Out">Time Out</option>
            </select>
        </div>
        <div class="col">
            <!-- magshoshow lang to kapag sa pinindot lang ang Time In -->
            <select class="form-select mb-3" id="grade"  name="grade"  required>
                    <option selected="true" disabled="disabled">Select Type</option>
                    <option value="On Time">On Time</option>
                    <option value="Late">Late</option>
                    <option value="Excuse">Excuse</option>
            </select>
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
            $("#btn").click(function () {
                $.alert("This is an alert message!");
            });
        });

    </script>

</body>
</html>