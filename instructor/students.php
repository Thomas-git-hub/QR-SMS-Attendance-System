
<?php 
  
  require_once '../includes/conn.php';
  require_once '../includes/func.php';
 
  sessionSet();
  if(!isset($_SESSION['classId'])){
    header('location: index.php');
  }




?>


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

<?php   

 $students = $db->rawQuery('
            SELECT * FROM student_tbl as student 
              JOIN assign_student as a_s
                  ON a_s.student_ref_id = student.sdt_ref_id
                    WHERE block_ref_id = ?
 ', Array ($_SESSION['classId']));


 var_dump($students);

?>


<div class="container-fluid">
<div class="body-content">  

<p><?php echo  $_SESSION['classId'] ?></p>
    <div class="row mt-3 mb-5">
        <div class="col">
            <div class="card card-title-banner">
                  <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h1 class="h1-card-title">Manage Students</h1>
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
                <th>Name</th>
                <th>Guardian Phone No.</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>09123456789</td>
                <td>Tabaco, City</td>
                <td>Male</td>
                <td>
                    <!-- <button class="btn tbl-action-btn-qr" data-toggle="modal" data-target="#createQR">Create QR</button> -->
                    <button class="btn tbl-action-btn-enable" id="">Enable</button>
                    <button class="btn tbl-action-btn-disable" id="">Disable</button>
                    
                </td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>09123456789</td>
                <td>Tabaco, City</td>
                <td>Male</td>
                <td>
                    <!-- <button class="btn tbl-action-btn-qr" data-toggle="modal" data-target="#createQR">Create QR</button> -->
                    <button class="btn tbl-action-btn-enable" id="">Enable</button>
                    <button class="btn tbl-action-btn-disable" id="">Disable</button>
                    
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Guardian Phone No.</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </div>
	
</div>
</div>

<div class="modal fade" id="createQR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create QR Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="">
            <div class="row">
                <div class="col-6 d-flex justify-content-center" style="border-right: 1px solid orange;">
                    <div class="card d-flex justify-content-center">
                      <img src="assets/png/bnhs.png">
                    </div>
                </div>
                <div class="col-6">
                    <h6 class="mt-2">Name: <small class="create-qr-content">John Doe</small> </h6>
                    <h6 class="mt-2">Grade: <small class="create-qr-content">11</small> </h6>
                    <h6 class="mt-2">Strand: <small class="create-qr-content">ABM</small> </h6>
                    <h6 class="mt-2">Block: <small class="create-qr-content">B</small> </h6>
                    <h6 class="mt-2">Guardian Phone No.: <small class="create-qr-content">0912456789</small> </h6>
                </div>

            </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="" class="modal-btn-generate">Generate QR</button>
        <button type="" class="modal-btn-download">Download</button>
        <button type="" class="modal-btn-print">Print</button>
        </form>
      </div>
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