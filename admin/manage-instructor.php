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
    
    <div class="row table" id="proftable">
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
                <td><?php echo $prof['username'] ;?></td>
                <td><?php echo $prof['ins_contact'] ;?></td>
                <td><?php echo $prof['username'] ;?></td>
                <td><?php echo $prof['password'] ;?></td>
                <td>
                    <button   id="<?php echo $prof['ins_ref_id'] ;?>" class="btn tbl-action-btn-update" data-toggle="modal" data-target="#updateProf">Update</button>
                    <?php
                    if ($prof['status']==1) { ?>

                             <button type="button" class="btn btn-status tbl-action-btn-enable" id="<?php echo $prof['ins_id'] ;?>" data-status="<?php echo $prof['status'] ;?>" >Enable</button>
                    <?php  }   
                   else  {  ?>
  
                           <button type="button" class="btn  btn-status tbl-action-btn-disable" id="<?php echo $prof['ins_id'] ;?>" data-status="<?php echo $prof['status'] ;?>" >Disable</button>

                    <?php   }    ?>
                    
                </td>
            </tr>
          <?php } ?>
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
        <form action=""  method="post" id="profFrm" onsubmit="validateForm(event)">
        <label for="">Name</label>
        <input type="text" class="form-control mb-2" id="" name="fullname" placeholder="Full Name" required>
        <label for="">ID No.</label>
        <input type="" class="form-control mb-2" id="" name="employeeid" placeholder="Employee ID No." required>
        <label for="">Contact No.</label>
        <input type="" class="form-control mb-2" id="" name="contact" placeholder="Contact No." required>
        <label for="exampleInputEmail1">Email Address</label>
        <input type="email" class="form-control mb-2" id="" name="username" placeholder="Input Email as Username" required>
        <label for="">Password</label>
        <input type="password" class="form-control mb-2" id="Password" name="password" onkeyup='passConfirm();' placeholder="Password" required>
        <label for="">Confirm Password</label>
        <input type="password" class="form-control mb-2" id="ConfirmPassword" name="cpassword" onkeyup='passConfirm();' placeholder="Confirm Password" required>
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
        <form action=""  method="post" id="updateProfFrm" onsubmit="validateForm(event)">
        <input type="hidden" id="ins_ref_id" name="ins_ref" value="">
          
        <label for="">Name</label>
        <input type="text" readonly class="form-control-plaintext mb-2" name="fullname" id="" value="">
        <label for="">ID No.</label>
        <input type="text" readonly class="form-control-plaintext mb-2" name="employeeid" id="" value="">
        <label for="">Contact No.</label>
        <input type="" class="form-control mb-2" id="" placeholder="Contact No." name="contact" value="" required>
        <label for="">Email Address</label>
        <input type="email" class="form-control mb-2" id="" placeholder="Email" name="username" value="" required>
        <label for="">Update Password</label>
        <input type="text" class="form-control mb-2" id="pass" onkeyup='passConfirmUpd();' name="password" placeholder="Password" required>
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


     //  gettting the info
    $(document).on('click', '.tbl-action-btn-update', function(event){
        event.preventDefault();
        var ins_ref = this.id;
        $.ajax({
          type: 'POST',
          url: './query/manageProfessorExe.php?action=getone',
          dataType: 'JSON',
          data: {"ins_ref":ins_ref},
          success: function (response) {
            console.log(response);
            $("input[name=ins_ref]").val(response.ins_ref_id);
            $("input[name=fullname]").val(response.ins_fullname);
            $("input[name=employeeid]").val(response.ins_idnumber);
            $("input[name=contact]").val(response.ins_contact);
            $("input[name=username]").val(response.username);

            $("#exampleModal").modal('show');
          }
        });

    });
 

   $(document).on('submit', '#profFrm', function(event){
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: `./query/manageProfessorExe.php?action=add`,
          dataType: 'JSON',
          data: $('#profFrm').serialize(),
          success: function (response) {
            console.log(response);
            if(response.res=='exist'){
                alert('Account Already Exist');
            }else  if(response.res){
                alert('success');
               $('.close').click(); 
                $('#profFrm').trigger("reset");
               $("#proftable").load(location.href + " #proftable");
              
            }
          }
        });
    });

    $(document).on('submit', '#updateProfFrm', function(event){
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: `./query/manageProfessorExe.php?action=update`,
          dataType: 'JSON',
          data: $('#updateProfFrm').serialize(),
          success: function (response) {
            console.log(response);
           if(response.res=='exist'){
                alert('Email Already Exist');
            }else  if(response.res){
                alert('success');
               $('.close').click(); 
                $('#updateProfFrm').trigger("reset");
               $("#proftable").load(location.href + " #proftable");
              
            }
          }
        });
    });


        $(document).on('click', '.btn-status', function () {
        var id = this.id;
        var status = $(this).attr("data-status");
       $.ajax({
           type: 'POST',
           url: './query/manageProfessorExe.php?action=toggle',
           dataType: 'JSON',
           data: {
             'id' : id,
             'status' :status,
           },
           success: function (response) {
               console.log (response);
            if(response.res){
               $("#proftable").load(location.href + " #proftable");
               if(response.status==1)
                   
                 $("#" + response.id ).removeClass("tbl-action-btn-disable").addClass("tbl-action-btn-enable").attr("data-status",0).html('Enable');
               else
                  $("#" + response.id ).removeClass("tbl-action-btn-enable").addClass("tbl-action-btn-disable").attr("data-status",1).html('Disable');
            }else{
               alert('Fail')
            }
              
           }
       });
        
      });
</script>


</body>
</html>