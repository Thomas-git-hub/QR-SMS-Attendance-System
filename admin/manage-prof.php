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

    <!-- css -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/manage-prof.css">
    

  <title>Admin</title>
</head>
<body>



<?php
include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">

<div class="row mt-4 mb-5">
    <div class="col d-flex justify-content-center">
        <h5 class="h5-page-title">Manage Professor</h5>
    </div>
</div>
    
    <div class="row mt-5">
        <div class="col d-flex justify-content-end">
            <button class="btn create-prof-btn mb-3 mx-5" data-toggle="modal" data-target="#createProf">Register New Professor</button>
        </div>
    </div> 
    
    <div class="row table">
      <table id="datatable" class="table display" >
        <thead>
            <tr>
                <th>Name</th>
                <th>ID No.</th>
                <th>Email Address</th>
                <th>Contact No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>2018-BNH-100309</td>
                <td>instructor1@gmail.com</td>
                <td>0987654321</td>
                <td>instructo@gmail.com</td>
                <td>12345</td>
                <td>
                    <button class="btn tbl-action-btn-update">Update</button>
                    <button class="btn tbl-action-btn-disable">Disable</button>
                    <button class="btn tbl-action-btn-assign">Assign Sub</button>
                </td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>2018-BNH-100309</td>
                <td>instructor1@gmail.com</td>
                <td>0987654321</td>
                <td>instructo@gmail.com</td>
                <td>12345</td>
                <td>
                    <button class="btn tbl-action-btn-update">Update</button>
                    <button class="btn tbl-action-btn-disable">Disable</button>
                    <button class="btn tbl-action-btn-assign">Assign Sub</button>
                </td>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>2018-BNH-100309</td>
                <td>instructor1@gmail.com</td>
                <td>0987654321</td>
                <td>instructo@gmail.com</td>
                <td>12345</td>
                <td>
                    <button class="btn tbl-action-btn-update">Update</button>
                    <button class="btn tbl-action-btn-disable">Disable</button>
                    <button class="btn tbl-action-btn-assign">Assign Sub</button>
                </td>
            </tr>
             <tr>
                <td>John Doe</td>
                <td>2018-BNH-100309</td>
                <td>instructor1@gmail.com</td>
                <td>0987654321</td>
                <td>instructo@gmail.com</td>
                <td>12345</td>
                <td>
                    <button class="btn tbl-action-btn-update">Update</button>
                    <button class="btn tbl-action-btn-disable">Disable</button>
                    <button class="btn tbl-action-btn-assign">Assign Sub</button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>ID No.</th>
                <th>Email Address</th>
                <th>Contact No.</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </div>
  </div>

</div>


<!-- modal -->

<!-- Register Professor Modal -->
<div class="modal fade" id="createProf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Professor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <label for="exampleInputEmail1">Name</label>
        <input type="" class="form-control mb-2" id="" placeholder="Block Name" required>
        <label for="exampleInputEmail1">ID No.</label>
        <input type="" class="form-control mb-2" id="" placeholder="Employee ID No." required>
        <label for="exampleInputEmail1">Email Address</label>
        <input type="" class="form-control mb-2" id="" placeholder="Email" required>
        <label for="exampleInputEmail1">Contact No.</label>
        <input type="" class="form-control mb-2" id="" placeholder="Contact No." required>
        <label for="exampleInputEmail1">Username</label>
        <input type="" class="form-control mb-2" id="" placeholder="Input your email" required>
        <label for="exampleInputEmail1">Password</label>
        <input type="" class="form-control mb-2" id="" placeholder="Password" required>
        <label for="exampleInputEmail1">Confirm Password</label>
        <input type="" class="form-control mb-2" id="" placeholder="Confirm Password" required>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="modal-btn-add">Register</button>
        <button type="button" class="modal-btn-close" data-dismiss="modal">Close</button>
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