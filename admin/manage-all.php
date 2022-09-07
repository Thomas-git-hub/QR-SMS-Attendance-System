<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- cdn for accordion -->
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <!-- online lng gumagana yung box icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
	  <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="css/manage-all.css">
	  <!-- <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css"> -->
</head>
<body>


<?php
include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container">
<div class="body-content">

  <div class="row mt-4 mb-5">
    <div class="col d-flex justify-content-center">
      <h5 class="h5-page-title">MANAGE STRAND, BLOCK AND SUBJECTS</h5>
    </div>
  </div>

    <div class="row mt-3 mb-5">
      <div class="col d-flex justify-content-center">
        <button type="button" class="button mx-2" data-toggle="modal" data-target="#createStrand">Create Strand</button>
      </div>
    </div>

    <div class="accordion vh-100 d-flex flex-column" id="accordionExample">
    <div class="accordion-item overflow-hidden d-flex flex-column">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed " type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="false">
          <h6>GRADE <small>11-</small></h6>
          <h6>ABM</h6>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse overflow-auto" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
        <div class="accordion-body overflow-auto">
          <div class="d-flex flex-column mx-5">
            <div class="row">
              <div class="col-6">
                <button class="create-blk-btn" data-toggle="modal" data-target="#createBlock">Create Block</button>
              </div>
              <div class="col-6">
                <a href="view-subjects.php"><button type="button" class="view-subjects-btn">View Subjects</button></a>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">A</small></h6>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">B</small></h6>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">C</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="accordion-item overflow-hidden d-flex flex-column">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h6>GRADE <small>12-</small></h6>
          <h6>ABM</h6>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse overflow-auto" aria-labelledby="headingTwo" data-mdb-parent="#accordionExample">
        <div class="accordion-body overflow-auto">
          <div class="d-flex flex-column mx-5">
            <div class="row">
              <div class="col-6">
                <button class="create-blk-btn" data-toggle="modal" data-target="#createBlock">Create Block</button>
              </div>
              <div class="col-6">
                <a href="view-subjects.php"><button class="view-subjects-btn">View Subjects</button></a>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">A</small></h6>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">B</small></h6>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">C</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="accordion-item overflow-hidden d-flex flex-column">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseThree" aria-expanded="false">
          <h6>GRADE <small>11-</small></h6>
          <h6>STEM</h6>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse overflow-auto" aria-labelledby="headingThree" data-mdb-parent="#accordionExample">
        <div class="accordion-body overflow-auto">
          <div class="d-flex flex-column mx-5">
            <div class="row">
              <div class="col-6">
                <button class="create-blk-btn" data-toggle="modal" data-target="#createBlock">Create Block</button>
              </div>
              <div class="col-6">
                <a href="view-subjects.php"><button class="view-subjects-btn">View Subjects</button></a>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">A</small></h6>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">B</small></h6>
              </div>
            </div>
            <div class="card card-style mt-2">
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">C</small></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    </div>
  </div>
</div>

<!-- Modal -->

<!-- CREATE STRAND MODAL -->
<div class="modal fade" id="createStrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Strand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="strandFrm">
            <input name="id"  type="hidden">
            <input  class="form-control" type="text" name="strandName" placeholder="strandName" required> <br>
            <select class="form-select"  name="strandGrade"  required>
                    <option value="11">Grade 11</option>
                    <option value="12">Grade 12</option>
            </select>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="modal-btn-add">Add</button>
        <button type="button" class="modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- CREATE BLOCK MODAL -->
<div class="modal fade" id="createBlock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Block</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <label for="exampleInputEmail1">Input Block Name</label>
        <input type="" class="form-control" id="" placeholder="Block Name" required>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="modal-btn-add">Add</button>
        <button type="button" class="modal-btn-close" data-dismiss="modal">Close</button>
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


<script>

$(function() {


    function get(){
        var campusAdminTable=  $('#strand_tbl').DataTable({
        serverSide: true,
        processing: true,
        paging: true,
        order: [],
        ajax: {
            url: './query/strandExe.php?action=get',
            type: 'post',
        },
        });
    }

    get();

    $(document).on('submit', '#strandFrm', function(event){
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: './query/strandExe.php?action=add',
          dataType: 'JSON',
          data: $('#strandFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res){
                alert('success');
                $("#exampleModal").modal('hide');
            }
          }
        });
    });

   



});
     
</script>

</body>
</html>


