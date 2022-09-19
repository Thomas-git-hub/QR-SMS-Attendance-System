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

    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/instructor-card.css">
    

	<title>Instructor</title>
</head>
<body>

<?php
include 'includes/topnav.php';
?>

<p> galing to sa login Professor  id  :  <?php echo  $ins_ref_id = '166325134125900'  ;?></p>

<?php   require_once '../includes/conn.php';

 $classes = $db->rawQuery('
 SELECT * FROM  assign_sub ass 
    JOIN instructor_tbl as i  
     ON ass.ins_ref_id = i.ins_ref_id
    JOIN block_subject  as bs
      ON bs.bs_id  =  ass.bs_id
    JOIN subject_tbl as subject
      ON subject.subject_ref_id  = bs.subject_ref_id
     JOIN block_tbl as block 
       ON block.block_ref_id =  bs.block_ref_id
     JOIN strand_tbl as strand 
       ON strand.str_ref_id =  block.str_ref_id
     WHERE i.ins_ref_id = ?
     ORDER BY  strand.grade asc ,strand.str_name Asc , block.block_name ASC , subject.subject_name ASC;
 ', Array ($ins_ref_id));

?>


<div class="container"> 
<div class="body-content">  

    <div class="row mt-3">
        <div class="col">
            <div class="card card-bnhs" >
                  <div class="card-body">
                    <div class="row banner-align-items">
                        <div class="col d-flex align-items-center ">
                            <h1 class="h1-card-title">Bacong National High School<small class="h6-small-title mx-3">Ligao City</small></h1>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img src="assets/png/bnhs.png" class="img-banner" width="30%;">
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    
              <!-- start of grdae 11 -->

    <div class="row">
     
    <?php 
        if( $db->count > 0){ ?>
          <h3 class="mt-5">Grade 11</h3>
       <?php
          foreach ($classes as $class){
              if($class['grade'] == 11){  ?>
              <!-- start of card -->
                <div class="col mt-3">
                    <div class="card card-select">
                      <div class="card-header">
                        <h3 class="card-header-title"><?php  echo strtoupper($class['str_name']) ?></h3>
                      </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col col-card-body">
                            <h5 class="card-title"><small>Block:&nbsp;</small><?php  echo ucfirst($class['block_name']) ?></h5>
                              <h5 class="card-title"><small>Subject:&nbsp;</small><?php  echo ucfirst($class['subject_name']) ?></h5>
                             
                            </div>
                            <div class="col">
                            <a  href ="scanner.php?id=<?php echo$class['block_ref_id']?>" class="btn btn-scan-now" >Scan Attendance</a>
                              <a class="btn btn-manage-subject"  href='dashboard.php?id=<?php echo$class['block_ref_id']?> ' >Enter this  Class</a>
                            </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
              <!-- end of card -->
             <?php }
          }  
        }else{
          echo "<h1 class='text-primary' > No Class Foumd </h1>";
        }
    
    ?>

    </div> 
    
   
    <div class="row">
    

    <?php 
        if( $db->count > 0){ ?>
            <h3 class="mt-5">Grade 12</h3>
         <?php
          
          foreach ($classes as $class){
              if($class['grade'] == 12){  ?>
              <!-- start of card -->
                <div class="col mt-3">
                    <div class="card card-select">
                      <div class="card-header">
                        <h3 class="card-header-title"><small>Strand&nbsp;</small>ABM</h3>
                      </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col col-card-body">
                              <h5 class="card-title"><small>Subject:&nbsp;</small>English</h5>
                              <h5 class="card-title"><small>Block:&nbsp;</small>A</h5>
                            </div>
                            <div class="col">
                            <a  href ="scanner.php?id=<?php echo$class['block_ref_id']?>" class="btn btn-scan-now" >Scan Attendance Now</a>
                              <a class="btn btn-manage-subject"  href='dashboard.php?id=<?php echo$class['block_ref_id']?> ' >Enter this  Class</a>
                            </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
              <!-- end of card -->
             <?php }
          }  
        }else{
          echo "<h1 class='text-primary' > No Class Foumd </h1>";
        }
    
    ?>

    </div> 

</div>
      

    <div class="row mt-5   mb-4">
      <div class="col d-flex justify-content-center">
        <p class="p-footer">Bicol University Polangui Campus 2022/2023&nbsp;</p>
        <p class="p-footer">@copyright reserved</p>
      </div>
    </div>
	
</div>
</div>


<!-- modal -->

<!-- Time In Time Out Modal -->
<!-- <div class="modal fade" id="selectTime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Whether Time In/Time Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body d-flex justify-content-center">
        <div class="d-flex flex-column">
          <a href="" class="select-time">TIME IN?</a>
          <a href="" class="select-time mt-2">TIME OUT?</a>
        </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div> -->



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

</body>
</html>