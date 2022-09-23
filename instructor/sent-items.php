
<?php 
  
  require_once '../includes/conn.php';
  require_once '../includes/func.php';

  sessionSet();
if($_SESSION['userType'] !== 'instructor') {
     session_start();
session_unset();
session_destroy();
 header('location: ../login.php?user=instructor');
 exit();
}
  if(!isset($_SESSION['classId'])){
    header('location: index.php');
  }
  



?>


<?php
    
        $trans = $db->rawQuery('SELECT * FROM `transaction_tbl` as trans 
        JOIN block_subject as bs 
            ON trans.bs_id = bs.bs_id 
        JOIN subject_tbl as subj 
            ON bs.subject_ref_id = subj.subject_ref_id 
        JOIN assign_sub as a_s 
            ON bs.bs_id = a_s.bs_id 
        JOIN instructor_tbl as i 
            ON i.ins_ref_id = a_s.ins_ref_id 
        JOIN student_tbl as student 
            ON student.sdt_ref_id = trans.std_ref_id
        WHERE trans.bs_id  = ?
      
                                                                   
                                
               ', Array ($_SESSION['classId']));



?>

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
    

	<title>Manage Attendance</title>
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
                            <h1 class="h1-card-title">Sent Items</h1>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    
    <div class="row table">
      <table id="datatable" class="table display" >
        <thead>
            <tr>
                <th>Guardian Phone No.</th>
                <th>Sender</th>
                <th>Message</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
           


            <?php

                    foreach ($trans as $tran) { ?>

                        <tr>
                            <td><?php   echo ($tran['sdt_parentNumber']) ?></td>
                            <td><?php   echo ($tran['sender']) ?></td>
                            <td><?php   echo ($tran['trans_message']) ?></td>
                            <td ><?php echo date('M d , Y', strtotime($tran['trans_datetime'])) ?></td>
                            <td><?php echo date('h:s a', strtotime($tran['trans_datetime'])) ?></td>
                        </tr>
                        
                    <?php }


                ?>
           
        </tbody>
        <tfoot>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Attendance Log</th>
                <th>TimeIn/TimeOut</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
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
        $('#datatable').DataTable({
            order: [[4, 'asc']],
        });
    });
</script>

</body>
</html>