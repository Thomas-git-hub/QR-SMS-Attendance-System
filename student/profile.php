
<?php
    require_once '../includes/conn.php';
    require_once '../includes/func.php';
    require_once './includes/phpqrcode/qrlib.php';
   sessionSet();
if($_SESSION['userType'] !== 'student') {
   session_start();
session_unset();
session_destroy();
 header('location: ../login.php?user=student');
 exit();
}
?>


<?php 

        // get student details
      $db->where('sdt_ref_id',$_SESSION['userId'] );
      $student =  $db->getOne('student_tbl');

      // get blcok
      $db->where('student_ref_id',$_SESSION['userId']);
      $block_ref_id = $db->getOne('assign_student');
      $block_ref_id = $block_ref_id['block_ref_id'];

      // get grade and strand

      $gradeStrand = $db->rawQueryOne(' SELECT * FROM  block_tbl  b 
                                JOIN strand_tbl s 
                                  ON b.str_ref_id= s.str_ref_id
                                  WHERE b.block_ref_id =?;'
                                , Array ($block_ref_id));


                        

      // get subject and prof
      $subjects = $db->rawQuery('SELECT * FROM `subject_tbl` as subject 
          JOIN block_subject as bs 
              ON subject.subject_ref_id = bs.subject_ref_id 
          JOIN assign_sub as a_s 
            ON bs.bs_id = a_s.bs_id 
          JOIN instructor_tbl as ins 
            ON ins.ins_ref_id = a_s.ins_ref_id 
          WHERE bs.block_ref_id = ?;
      ', Array ($block_ref_id));


      // Path where the images will be saved
        $filepath = './qr/'.test_input($_SESSION['userId']).'.png';
        // Image (logo) to be drawn
        $logopath = '../assets/png/bnhs.png';
        // qr code content
        $codeContents = test_input($_SESSION['userId']);
        // Create the file in the providen path

        generateQr($filepath,$logopath,$codeContents);
          
 
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
	<title>Student</title>
</head>
<body>


<?php
include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">


    <?php  echo $_SESSION['userId'] 
    ?>

    

    <div class="row mt-3 mb-5">
        <div class="col">
            <div class="card card-title-banner">
                  <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h1 class="h1-card-title">Profile Management</h1>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

<div class="row">
  <div class="col d-flex justify-content-center">
    <div class="card card-profile mb-5" style="width: 50rem;">
        <img class="card-img-top" src="assets/img//bnhs-banner.jpg" alt="Card image cap">
        <div class="card-body">
          <div class="row mb-4">
            <div class="col">
              <h6 class="h6-card-profile-title">P R O F I L E</h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col-6">
              <h6 class="profile-data mx-5">Full name:<small class="small-profile-content">&nbsp;<?php echo  ucwords($student['sdt_fullname']) ?></small></h6>
            </div>
            <div class="col-6">
              <h6 class="profile-data">Gender:<small class="small-profile-content">&nbsp;<?php echo  ucwords($student['sdt_gender']) ?></small></h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col">
              <h6 class="profile-data mx-5">Address:<small class="small-profile-content">&nbsp;<?php echo  ucwords($student['sdt_address']) ?></small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data">Phone no:<small class="small-profile-content">&nbsp;<?php echo  ucwords($student['sdt_parentNumber']) ?></small></h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col">
              <h6 class="profile-data mx-5">Grade:<small class="small-profile-content">&nbsp; <?php echo $gradeStrand['grade'] ?></small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data mx-5">Strand:<small class="small-profile-content">&nbsp;<?php echo strtoupper( $gradeStrand['str_name'] )?></small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data">Block:<small class="small-profile-content">&nbsp;<?php echo strtoupper( $gradeStrand['block_name'] )?></small></h6>
            </div>
          </div>
          <div class="row row-profile-data mb-3 p5">
            <div class="col">
              <h6 class="profile-data mx-5">Email:<small class="small-profile-content">&nbsp;<?php echo  ucwords($student['sdt_username']) ?></small></h6>
            </div>
            <div class="col">
              <h6 class="profile-data">Password:<small class="small-profile-content">&nbsp;<?php echo  ucwords($student['sdt_password']) ?></small></h6>
            </div>
          </div>

            <div class="row mb-4">
                <h6 class="h6-card-profile-title">S U B J E C T S</h6>
              <div class="col">
              </div>
            </div>
            <div class="row row-profile-data d-flex flex-column mb-3 p5">
              <div class="col">
               
                <?php
                  foreach ($subjects as $sub) { ?>
                     <h6 class="profile-subject mx-5"><i class='bx bxs-book-alt'></i><?php echo  ucwords($sub['subject_name']) ?>  - <span ><?php echo  ucwords($sub['ins_fullname']) ?></span></h6>
                  <?php }
                

                ?>
              </div>
             

        </div>
        <div class="card-footer card-footer-profile d-flex justify-content-center">
          <button class="btn btn-update-profile mx-2" data-toggle="modal" data-target="#updateProfile">Update Profile</button>
          <button class="btn btn-update-profile mx-2" data-toggle="modal" data-target="#changePassword">Change Password</button>
          <button class="btn btn-generate-qr mx-2" data-toggle="modal" data-target="#generateQR">Generate QR</button>
        </div>
    </div>
  </div>
</div>

</div>
</div>

<!-- UPDATE PROFILE MODAL -->
<div class="modal fade" id="updateProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        
        <label for="exampleInputEmail1">Address</label>
        <input type="texts" class="form-control" id="" placeholder="Current Address" name="">
        <label for="exampleInputEmail1">Guardian Phone No.</label>
        <input type="texts" class="form-control" id="" placeholder="09-" name="">
        
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-update">Update</button>
        <button type="button" class="btn modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- CHANGE PASSWORD MODAL -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <label for="exampleInputEmail1">Email</label>
        <input type="texts" class="form-control mb-3" id="" placeholder="Update Email" name="" >
        <label for="exampleInputEmail1">Password</label>
        <input type="texts" class="form-control mb-3" id="" placeholder="Password" name="">
        <label for="exampleInputEmail1">Confirm Password</label>
        <input type="texts" class="form-control mb-3" id="" placeholder="Re-type your Password" name="">
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-update">Update</button>
        <button type="button" class="btn modal-btn-close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- GENERATE QR MODAL -->
<div class="modal fade" id="generateQR" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate QR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="blockFrm">
        <div class="row">
          <div class="col-6 d-flex justify-content-center">
            <div class="card " style="width: 12rem;">
              <div class="card-body d-flex justify-content-center">
              <a href="./qr/<?php  echo $_SESSION['userId'] ?>.png" download>
                  <img src="./qr/<?php  echo $_SESSION['userId'] ?>.png" alt="W3Schools"  width="90%">
              </a>
              </div>
            </div>
          </div>
          <div class="col-6 d-flex justify-content-center">
            <div class="card">
              <div class="card-body">
                <p>Please Click the image to download  </p>
              </div>
             </div>
          </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
       
        <button type="button" class="btn modal-btn-close" data-dismiss="modal">Close</button>
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
<script src="../js/FileSaver.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>





</body>
</html>