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
    <link rel="stylesheet" href="css/dashboard.css">
    

	<title>Admin</title>
</head>
<body>



<?php
include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">  

    <div class="row mb-5">
        <div class="col">
            <div class="card card-bnhs">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h1 class="h1-card-title">Bacong National High School<small class="h6-small-title mx-3">Ligao City</small></h1>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <img src="assets/png/bnhs.png" width="40%;">
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

	<div class="row mb-5">
     <div class="row">
        <div class="col d-flex justify-content-start">
            <h3 class="mb-3 mx-2">Grade</h3>
            <h3>11</h3>
        </div>    
     </div>

     <div class="col-4">
        <div class="card card-content-body">
          <div class="card-body">
            <div class="col-6">
              <h1 class="card-text"><i class='bx bxs-group mx-2'></i>
  <?php 

       require_once '../includes/conn.php';
       $db->join("assign_student ass", "ass.student=s.stf_ref_id", "LEFT");
       $db->join("block_subject bs", "bs.bs_id=ass.bs_id", "LEFT");
       $db->join("subject_tbl sb", "sb.subject_ref_id=bs.subject_ref_id", "LEFT");
       $db->join("strand_tbl str", "str.str_ref_id=sb.str_ref_id", "LEFT");


        $db->where ("str.grade", 11);
        $count = $db->getValue ("student_tbl s" , "count(*)");
        echo "{$count}";
        ?>

              </h1>
              <span class="card-text">No. Of Students</span>
            </div>
          </div>
        </div>
     </div>

     <div class="col-4">
         <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bx-book-reader mx-2'></i>
            <?php 

  $db->where ("grade", 11);    
$count = $db->getValue ("strand_tbl", "count(*)");
echo "{$count}";
?></h1>
            <span class="card-text">No. of Strand</span>
          </div>
        </div>
     </div>
     <div class="col-4">
         <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bxs-book-content mx-2'></i>
            <?php 

$db->join("strand_tbl s", "s.str_ref_id=b.str_ref_id");
$db->where("s.grade",11);  
$count = $db->getValue ("block_tbl b", "count(*)");
echo "{$count}";
?></h1>
            <span class="card-text">No. Of Block</span>
          </div>
        </div>
     </div>   
    </div>

    <div class="row mb-3">
     <div class="row">
        <div class="col d-flex justify-content-start">
            <h3 class="mb-3 mx-2">Grade</h3>
            <h3>12</h3>
        </div>    
     </div>

     <div class="col-4">
        <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bxs-group mx-2'></i>
                <?php 
                $db->join("assign_student ass", "ass.student=s.stf_ref_id", "LEFT");
       $db->join("block_subject bs", "bs.bs_id=ass.bs_id", "LEFT");
       $db->join("subject_tbl sb", "sb.subject_ref_id=bs.subject_ref_id", "LEFT");
       $db->join("strand_tbl str", "str.str_ref_id=sb.str_ref_id", "LEFT");


        $db->where ("str.grade", 12);
        $count = $db->getValue ("student_tbl s" , "count(*)");
        echo "{$count}";
        ?>

 </h1>
            <span class="card-text">No. Of Students</span>
          </div>
        </div>
     </div>

     <div class="col-4">
         <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bx-book-reader mx-2'></i>
             <?php 

  $db->where ("grade", 12);    
$count = $db->getValue ("strand_tbl", "count(*)");
echo "{$count}";
?>
</h1>
            <span class="card-text">No. of Strand</span>  
          </div>
        </div>
     </div>
     <div class="col-4">
         <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bxs-book-content mx-2'></i>
              <?php 

$db->join("strand_tbl s", "s.str_ref_id=b.str_ref_id");
$db->where("s.grade",12);  
$count = $db->getValue ("block_tbl b", "count(*)");
echo "{$count}";
?></h1>
            <span class="card-text">No. Of Block</span>
          </div>
        </div>
     </div>   
    </div>

    <div class="row mb-5" style="border-top: 1px solid #ff6f2e;">
        <div class="col d-flex flex-column mt-3">
            <div class="card card-instructor">
                <div class="card-body">
                    <h1 class="instructor-text"><i class='bx bxs-graduation mx-2' ></i>
                        <?php 
$count = $db->getValue ("instructor_tbl", "count(*)");
        echo "{$count}";
                    ?></h1>
                    <span class="instructor-text">No. Of Instructors</span>
                </div>
            </div>
        </div>    
    </div>

    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <p class="p-footer">Bicol University Polangui Campus 2022/2023&nbsp;</p>
        <p class="p-footer">@copyright reserved</p>
      </div>
    </div>
	
</div>
</div>


<script src="../js/sidebar.js"></script>
<script src="../js/jquery.min.js"></script>

<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/jszip.min.js"></script>
<script type="application/json" src="../js/pdfmake.min.js.map"></script>
<script type="text/javascript" src="../js/pdfmake.min.js"></script>

<script type="text/javascript" src="../js/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap5.min.js"></script>

</body>
</html>