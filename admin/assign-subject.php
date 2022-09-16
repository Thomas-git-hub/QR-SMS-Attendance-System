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
                       <?php 

       require_once '../includes/conn.php';
        
    $proffesors = $db->get ("instructor_tbl");
    if ($db->count == 0) {
        echo "<tr><td> Empty </td></tr>";
    }
    foreach ($proffesors as $prof) {
?> 
                    <tr>
                        <td><?php echo $prof['ins_fullname'] ;?></td>
                <td><?php echo $prof['ins_idnumber'] ;?></td>
                        <td>
                            <a class="btn tbl-action-btn-view" href="assigned.php?ins_ref=<?php echo $prof['ins_ref_id'] ; ?>" target="assigned" id="">View Subs</a>
                            <button class="btn tbl-action-btn-assign" value="<?php echo $prof['ins_ref_id'] ;?>" data-toggle="modal" data-target="#assignSub">Assign Sub</button>
                        </td>
                    </tr>
                <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>


        <div class="col-5" style="border-left: 1px solid #f1f1f1;" >
            <div class="row">
                <h6 class="mb-4">Assigned Subjects</h6>
            </div>
         
         <iframe src="assigned.php" id="subframe" name="assigned" title="Assigned Subjects" height="100%" width="100%"></iframe>
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
        <form action="" method="post" id="assignform">
            <input type="hidden" name="ins" id="ins_id" value="">
        <select class="form-select mb-3" id="grade"  name="grade"  required>
                    <option selected="true" disabled="disabled">Select Grade</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
        </select>

             <select class="form-select mb-3"  name="strand" id="strand"  required>
                    <option selected="true" disabled="disabled">Select Grade First</option>
            </select>
             <select class="form-select mb-3"  name="block" id="block"  required>
                    <option selected="true" disabled="disabled">Select Strand First</option>
            </select>
        

            <select class="form-select mb-3"  name="subject"  id="subject" required>
                    <option selected="true" disabled="disabled"> Select Strand First</option>
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

 $("#grade").change(function(){
    var id =  this.value;
    $.ajax({
      type: 'POST',
      url: './query/getAll.php?action=getstrand',
      dataType: 'JSON',
      data: {
          'id':id,
      },
     success: function (items) {
        console.log(items);
        $("#strand").empty().append("<option selected='true' disabled='disabled'>Select Strand</option>");
        
        $.each(items, function(i, item) {
          $("#strand")
               .append($("<option>", { value : item.str_ref_id })
               .text(item.str_name));
         });
      }
    });
  });

  $("#strand").change(function(){
    var id =  this.value;
    $.ajax({
      type: 'POST',
      url: './query/getAll.php?action=getblock',
      dataType: 'JSON',
      data: {
          'id':id,
      },
     success: function (items) {
        console.log(items);
        $("#block").empty().append("<option selected='true' disabled='disabled'>Select Block</option>");
        
        $.each(items, function(i, item) {
          $("#block")
               .append($("<option>", { value : item.block_ref_id })
               .text(item.block_name));
         });
      }
    });
  });


  $("#strand").change(function(){
    var id =  this.value;
    $.ajax({
      type: 'POST',
      url: './query/getAll.php?action=getsubject',
      dataType: 'JSON',
      data: {
          'id':id,
      },
     success: function (items) {
        console.log(items);
        $("#subject").empty().append("<option selected='true' disabled='disabled'>Select Subject</option>");
        
        $.each(items, function(i, item) {
          $("#subject")
               .append($("<option>", { value : item.subject_ref_id })
               .text(item.subject_name));
         });
      }
    });
  });


</script>

<script type="text/javascript">  
   $(function () {
        $(".tbl-action-btn-assign").click(function () {
            var my_id_value = $(this).val();
            $(".modal-body #ins_id").val(my_id_value);
        })
    });
 
$(function() {


  
    $(document).on('submit', '#assignform', function(event){
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: `./query/manageAll_Exe.php?action=assign`,
          dataType: 'JSON',
          data: $('#assignform').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res=='exist'){
                alert("Subject to assign already exists");
            }else  if(response.res){
                alert('success');
               $('.close').click(); 
                $('#assignform').trigger("reset");
              var oiframe = document.getElementById('subframe');
                oiframe.contentWindow.location.reload(true);
              
            }
          }
        });
    });

});
     
    
</script>



</body>
</html>