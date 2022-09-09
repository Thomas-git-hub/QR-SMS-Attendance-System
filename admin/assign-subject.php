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

    <div class="row mt-3 mb-5">
        <div class="col">
            <div class="card card-title-banner">
                  <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h1 class="h1-card-title">View and Assign Subjects</h1>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-7" style="border-right: 1px solid #f1f1f1;">
            <div class="row">
                <h6 class="mb-4">Instructors</h6>
            </div>
            <div class="table p-3" style="overflow-y: hidden; overflow-x: hidden;">
              <table id="datatable" class="table display table-sm table-hover mx-5" style="width: 90%;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID No.</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>2018-BNH-100309</td>
                        <td>
                            <button class="btn tbl-action-btn-view" id="">View Subs</button>
                            <button class="btn tbl-action-btn-assign" data-toggle="modal" data-target="#assignSub">Assign Sub</button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>2018-BNH-100309</td>
                        <td>
                            <button class="btn tbl-action-btn-view" id="">View Subs</button>
                            <button class="btn tbl-action-btn-assign" data-toggle="modal" data-target="#assignSub">Assign Sub</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


        <div class="col-5" style="border-left: 1px solid #f1f1f1;">
            <div class="row">
                <h6 class="mb-4">Assigned Subjects</h6>
            </div>
            <div class="card p-4">
            <div class="table" style="overflow-y: hidden; overflow-x: hidden;">
              <table id="" class="table table-striped display">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Strand</th>
                        <th>Block</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>11</td>
                        <td>ABM</td>
                        <td>A</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>ABM</td>
                        <td>A</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>ABM</td>
                        <td>A</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>ABM</td>
                        <td>A</td>
                        <td>English</td>
                    </tr>

                </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>
</div>
</div>


<!-- modal -->

<!-- assign subject to instructor Modal -->
<div class="modal fade" id="assignSub" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Subject to Instructor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>

            <select class="form-select mb-3"  name="Select Grade Level"  required>
                    <option selected="true" disabled="disabled">Select Grade Level</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
            </select>

            <select class="form-select mb-3"  name="Select Strand"  required>
                    <option selected="true" disabled="disabled">Select Strand</option>
                    <option value="ABM">ABM</option>
                    <option value="STEM">STEM</option>
                    <option value="HUMMS">HUMMS</option>
            </select>

            <select class="form-select mb-3"  name="strandGrade"  required>
                    <option selected="true" disabled="disabled">Select Block</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
            </select>

            <select class="form-select mb-3"  name="strandGrade"  required>
                    <option selected="true" disabled="disabled">Assign Subject</option>
                    <option value="Math">Math</option>
                    <option value="English">English</option>
            </select>
           
            
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="modal-btn-add">Assign</button>
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