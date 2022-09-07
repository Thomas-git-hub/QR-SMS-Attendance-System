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

  <div class="row mt-5" id="subs">
    <div class="col d-flex justify-content-center mt-5">
      <div class="card card-subject" style="width: 40rem;">
        <div class="card-header card-subject-header d-flex justify-content-center">
          <h6 class="h6-block-name">

 <?php 
 if (!isset($_GET['str_ref'])) {
  header("Location: manage-all.php");
 }

    require_once '../includes/conn.php';
$strand=$_GET['str_ref'];
   
$db->where ('str_ref_id', $strand);
$results = $db->get ('strand_tbl');
    foreach ($results as $strand) {
      echo $strand['str_name'];
?> 
&nbsp;<small class="h6-small-grade-lvl"> <?php echo $strand['grade'];
 } ?>
            </small>
          </h6>
        </div>
        <div class="card-body d-flex justify-content-center">
          <div class="d-flex flex-column">
            <?php

            $db->where('str_ref_id', $_GET['str_ref']);
            $subjects = $db->get ('subject_tbl');

             if ($db->count == 0) {
                ?>
                  <h6 class=" h6-subject-name">No subjects Found</h6>
<?php
}
            foreach ($subjects as $sub) {
?> 
           <h6 class=" h6-subject-name"><i class='bx bxs-book'></i> <?php echo $sub['subject_name']; ?></h6>
          <?php } ?>
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
        <form action=""  method="post" id="subFrm">
        <label for="exampleInputEmail1">Input Subject Name</label>
        <input type="text" name="str_ref" value="<?php echo $_GET['str_ref']; ?>">
        <input type="" class="form-control" id="" placeholder="Subject Name" name="subName" required>
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


  
    $(document).on('submit', '#subFrm', function(event){
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: `./query/manageAll_Exe.php?action=addsub`,
          dataType: 'JSON',
          data: $('#subFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res=='exist'){
                alert("Duplicate");
            }else  if(response.res){
                alert('success');
               $('.close').click(); 
                $('#subFrm').trigger("reset");
               $("#subs").load(location.href + " #subs");
              
            }
          }
        });
    });





});
     
</script>


</body>
</html>


