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

  <div class="row mt-2">
    <a href="manage-all.php"><i class='bx bx-arrow-back'></i></a>
  </div>

  <div class="row mt-5">
    <div class="col d-flex justify-content-center mt-5">
      <div class="card card-subject" style="width: 40rem;">
        <div class="card-header card-subject-header d-flex justify-content-center">
          <h6 class="h6-block-name">
            ABM &nbsp;
            <small class="h6-small-grade-lvl">11</small>
          </h6>
        </div>
        <div class="card-body d-flex justify-content-center">
          <div class="d-flex flex-column">
            <h6 class=" h6-subject-name"><i class='bx bxs-book'></i>Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino</h6>
            <h6 class="h6-subject-name"><i class='bx bxs-book'></i>Oral Communication in Context</h6>
            <h6 class="h6-subject-name"><i class='bx bxs-book'></i>General Mathematics</h6>
            <h6 class="h6-subject-name"><i class='bx bxs-book'></i>Earth and Life Science</h6>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <button class="create-subject-btn mx-2" data-toggle="modal" data-target="#createSubject">Create Subject</button>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- Modal -->
<!-- CREATE SUBJECT MODAL -->
<div class="modal fade" id="createSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <label for="exampleInputEmail1">Input Subject Name</label>
        <input type="" class="form-control" id="" placeholder="Subject Name" required>
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


<!-- <script>

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
     
</script> -->

</body>
</html>


