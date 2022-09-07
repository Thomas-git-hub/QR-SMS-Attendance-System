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
    <link rel="stylesheet" href="css/manage-instructor.css">
    

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
        <h5 class="h5-page-title">MANAGE INSTRUCTOR</h5>
    </div>
</div>
    
    <div class="row mt-5">
        <div class="col d-flex justify-content-end">
            <button class="btn create-prof-btn mb-3 mx-5" data-toggle="modal" data-target="#createProf">Register New Instructor</button>
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
                    <button class="btn tbl-action-btn-update" data-toggle="modal" data-target="#updateProf">Update</button>
                    <button class="btn tbl-action-btn-enable">Enable</button>
                    <button class="btn tbl-action-btn-disable">Disable</button>
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
                    <button class="btn tbl-action-btn-update" data-toggle="modal" data-target="#updateProf">Update</button>
                    <button class="btn tbl-action-btn-enable">Enable</button>
                    <button class="btn tbl-action-btn-disable">Disable</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Register Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action=""  method="post" id="blockFrm" onsubmit="validateForm(event)">
        <label for="">Name</label>
        <input type="text" class="form-control mb-2" id="" placeholder="Full Name" required>
        <label for="">ID No.</label>
        <input type="" class="form-control mb-2" id="" placeholder="Employee ID No." required>
        <label for="">Contact No.</label>
        <input type="" class="form-control mb-2" id="" placeholder="Contact No." required>
        <label for="exampleInputEmail1">Email Address</label>
        <input type="" class="form-control mb-2" id="" placeholder="Input Email as Username" required>
        <label for="">Password</label>
        <input type="password" class="form-control mb-2" id="Password" onkeyup='passConfirm();' placeholder="Password" required>
        <label for="">Confirm Password</label>
        <input type="password" class="form-control mb-2" id="ConfirmPassword" onkeyup='passConfirm();' placeholder="Confirm Password" required>
        <span id="Message"></span>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="modal-btn-add">Register</button>
        <button type="button" class="modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Professor Modal -->
<div class="modal fade" id="updateProf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Professor Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action=""  method="post" id="blockFrm" onsubmit="validateForm(event)">
        <label for="">Name</label>
        <input type="text" readonly class="form-control-plaintext mb-2" id="" value="Thomas Allene Escoto">
        <label for="">ID No.</label>
        <input type="text" readonly class="form-control-plaintext mb-2" id="" value="2018-BNH-100309">
        <label for="">Contact No.</label>
        <input type="" class="form-control mb-2" id="" placeholder="Contact No." required>
        <label for="">Email Address</label>
        <input type="email" class="form-control mb-2" id="" placeholder="Email" required>
        <label for="">Update Password</label>
        <input type="text" class="form-control mb-2" id="pass" onkeyup='passConfirmUpd();' placeholder="Password" required>
        <label for="">Confirm New Password</label>
        <input type="password" class="form-control mb-2" id="conPassword" onkeyup='passConfirmUpd();' placeholder="Confirm Password" required>
        <span id="messageUpd"></span>
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

<!-- JS FOR CONFIRM PASSWORD -->
<script>
    var passConfirm = function() {
          if (document.getElementById("Password").value ==
            document.getElementById("ConfirmPassword").value) {
            document.getElementById("Message").style.color = "#32cd32";
            document.getElementById("Message").innerHTML = "Passwords match!"
          } else {
            document.getElementById("Message").style.color = "#ff0000";
            document.getElementById("Message").innerHTML = "Passwords DIDN'T match!"
          }
        }

    var passConfirmUpd = function() {
          if (document.getElementById("pass").value ==
            document.getElementById("conPassword").value) {
            document.getElementById("messageUpd").style.color = "#32cd32";
            document.getElementById("messageUpd").innerHTML = "Passwords match!"
          } else {
            document.getElementById("messageUpd").style.color = "#ff0000";
            document.getElementById("messageUpd").innerHTML = "Passwords DIDN'T match!"
          }
        }
</script>


</body>
</html>