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
    
	<title>Student</title>
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
                            <h1 class="h1-card-title">Profile Management</h1>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

<div class="row">
  <div class="col d-flex justify-content-center">
    <div class="card card-profile mb-5" style="width: 50rem;">
        <img class="card-img-top" src="assets/img//bnhs-banner.jpg" alt="Card image cap">
        <div class="card-body">
          <div class="row mb-4">
            <div class="col">
              <h6 class="h6-card-profile-title">P R O F I L E</h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col-6">
              <h6 class="profile-data mx-5">Full name:<small class="small-profile-content">&nbsp;Thomas Allene B. Escoto</small></h6>
            </div>
            <div class="col-6">
              <h6 class="profile-data">Gender:<small class="small-profile-content">&nbsp;Male</small></h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col">
              <h6 class="profile-data mx-5">Address:<small class="small-profile-content">&nbsp;Tabaco, City</small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data">Phone no:<small class="small-profile-content">&nbsp;09156748575</small></h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col">
              <h6 class="profile-data mx-5">Grade:<small class="small-profile-content">&nbsp;11</small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data mx-5">Strand:<small class="small-profile-content">&nbsp;ABM</small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data">Block:<small class="small-profile-content">&nbsp;B</small></h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col">
              <h6 class="profile-data mx-5">Email:<small class="small-profile-content">&nbsp;bnhs@gmail.com</small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data">Password:<small class="small-profile-content">&nbsp;*******</small></h6>
            </div>
          </div>

            <div class="row mb-4">
                <h6 class="h6-card-profile-title">S U B J E C T S</h6>
              <div class="col">
              </div>
            </div>
            <div class="row row-profile-data d-flex flex-column mb-3 p5">
              <div class="col">
                <h6 class="profile-subject mx-5"><i class='bx bxs-book-alt'></i>Math</h6>
              </div>
              <div class="col">
                <h6 class="profile-subject mx-5"><i class='bx bxs-book-alt'></i>English</h6>
              </div>
              <div class="col">
                <h6 class="profile-subject mx-5"><i class='bx bxs-book-alt'></i>Science</h6>
              </div>
            </div>

        </div>
        <div class="card-footer card-footer-profile d-flex justify-content-center">
          <button class="btn btn-update-profile mx-2" data-toggle="modal" data-target="#updateProfile">Update Profile</button>
          <button class="btn btn-update-profile mx-2" data-toggle="modal" data-target="#changePassword">Change Password</button>
          <button class="btn btn-generate-qr mx-2" data-toggle="modal" data-target="#generateQR">Generate QR</button>
        </div>
    </div>
  </div>
</div>

</div>
</div>

<!-- UPDATE PROFILE MODAL -->
<div class="modal fade" id="updateProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <label for="exampleInputEmail1">Full Name</label>
        <input type="texts" class="form-control" id="" placeholder="Enter Name" name="" readonly>
        <label for="exampleInputEmail1">Gender</label>
        <input type="texts" class="form-control" id="" placeholder="" name="" readonly="">
        <label for="exampleInputEmail1">Address</label>
        <input type="texts" class="form-control" id="" placeholder="Current Address" name="">
        <label for="exampleInputEmail1">Guradian Phone No.</label>
        <input type="texts" class="form-control" id="" placeholder="09-" name="">
        <label for="exampleInputEmail1">Grade</label>
        <input type="texts" class="form-control" id="" placeholder="" name="" readonly>
        <label for="exampleInputEmail1">Strand</label>
        <input type="texts" class="form-control" id="" placeholder="" name="" readonly>
        <label for="exampleInputEmail1">Block</label>
        <input type="texts" class="form-control" id="" placeholder="" name="" readonly>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-update">Update</button>
        <button type="button" class="btn modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- CHANGE PASSWORD MODAL -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <label for="exampleInputEmail1">Email</label>
        <input type="texts" class="form-control mb-3" id="" placeholder="Update Email" name="" >
        <label for="exampleInputEmail1">Password</label>
        <input type="texts" class="form-control mb-3" id="" placeholder="Password" name="">
        <label for="exampleInputEmail1">Confirm Password</label>
        <input type="texts" class="form-control mb-3" id="" placeholder="Re-type your Password" name="">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-update">Update</button>
        <button type="button" class="btn modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- GENERATE QR MODAL -->
<div class="modal fade" id="generateQR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate QR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <div class="row">
          <div class="col-6 d-flex justify-content-center">
            <div class="card " style="width: 12rem;">
              <div class="card-body d-flex justify-content-center">
                <i class='bx bx-qr-scan' style="font-size: 100px;"></i>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-center">
            <div class="card">
              <div class="card-body">
                <h6 class="profile-data mb-2">Name:&nbsp;<small class="small-profile-content">Thomas Allene B. Escoto</small></h6>
                <h6 class="profile-data mb-2">Grade:&nbsp;<small class="small-profile-content">11</small></h6>
                <h6 class="profile-data mb-2">Strand:&nbsp;<small class="small-profile-content">ABM</small></h6>
                <h6 class="profile-data mb-2">Block:&nbsp;<small class="small-profile-content">B</small></h6>
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-update">Download QR</button>
        <button type="button" class="btn modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="../js/sidebar.js"></script>
<!-- <script src="../js/jquery.min.js"></script> -->

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>