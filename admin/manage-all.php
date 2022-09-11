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
    <link rel="stylesheet" href="css/home.css">
    <!-- <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css"> -->
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
                            <h1 class="h1-card-title">Manage Strand Block, & Subject</h1>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-5">
      <div class="col d-flex justify-content-center">
        <button type="button" class="button mx-2" data-toggle="modal" data-target="#createStrand">Create Strand</button>
      </div>
    </div>

    <div class="accordion vh-100 d-flex flex-column" id="accordionExample">
   

  <?php 

       require_once '../includes/conn.php';
        
    $users = $db->get ("strand_tbl");
    if ($db->count == 0) {
        echo "<div>No strands found</div>";
    }
    $collapse= 1;
    foreach ($users as $strand) {
      $collapse++;
     $str_ref= $strand['str_ref_id']; 
?> 
  
   <div class="accordion-item overflow-hidden d-flex flex-column">
      <h2 class="accordion-header" id="headingThree">
  <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapse<?php echo $collapse ;?>" aria-expanded="false">
           <h6>GRADE <small><?php echo $strand['grade'] ;?>-</small></h6>
          <h6><?php echo $strand['str_name'] ;?></h6>
        </button>
      </h2>
      <div id="collapse<?php echo $collapse ;?>" class="accordion-collapse collapse overflow-auto" aria-labelledby="headingThree" data-mdb-parent="#accordionExample">
        <div class="accordion-body overflow-auto" id="block-card">
          <div class="d-flex flex-column mx-5">
            <div class="row">
              <div class="col-6">
                <button class="create-blk-btn" value="<?php echo $strand['str_ref_id']; ?>" data-toggle="modal" data-target="#createBlock">Create Block</button>
              </div>
              <div class="col-6">
                <a href="view-subjects.php?str_ref=<?php echo $strand['str_ref_id']; ?>"><button class="view-subjects-btn">View Subjects</button></a>
              </div>
            </div>

             <?php
             $db->where ('str_ref_id', $str_ref );
             $results = $db->get ('block_tbl');
             if ($db->count == 0) {
                ?>
            <div class="card card-style mt-2">
            <div class="card-body">
                <h6 class="h6-block-title">No blocks Found</h6>
            </div>
            </div>
            <?php
            }
 foreach ($results as $block) {

       ?>
    
            <div class="card card-style mt-2" >
              <div class="card-body">
                <h6 class="h6-block-title">Block<small class="h6-small">  <?php echo $block['block_name']; ?></small></h6>
              </div>
            </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
<?php
}
?>

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
          <input type="hidden" class="form-control" id="str_ref_id" placeholder="ref" value="" name="str_ref" required>
        <label for="exampleInputEmail1">Input Block Name</label>
        <input type="texts" class="form-control" id="" placeholder="Block Name" name="blockName" required>
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


<script type="text/javascript">  
   $(function () {
        $(".create-blk-btn").click(function () {
            var my_id_value = $(this).val();
            $(".modal-body #str_ref_id").val(my_id_value);
        })
    });
 
</script>

<script>

$(function() {


  
    $(document).on('submit', '#strandFrm', function(event){
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: `./query/manageAll_Exe.php?action=add`,
          dataType: 'JSON',
          data: $('#strandFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res=='exist'){
                alert("Strand Already Exists");
            }else  if(response.res){
                alert('success');
               $('.close').click(); 
                $('#strandFrm').trigger("reset");
               $("#accordionExample").load(location.href + " #accordionExample");
              
            }
          }
        });
    });


    $(document).on('submit', '#blockFrm', function(event){
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: `./query/manageAll_Exe.php?action=addblock`,
          dataType: 'JSON',
          data: $('#blockFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res=='exist'){
                alert("Block already exists");
            }else  if(response.res){
                alert('success');
                $('.close').click(); 
                $('#blockFrm').trigger("reset");
              $("#accordionExample").load(location.href + " #accordionExample");
              
              
            }
          }
        });
    });



});
     
</script>

</body>
</html>

