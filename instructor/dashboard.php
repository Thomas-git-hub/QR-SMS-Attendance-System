
<?php 
    
    require_once '../includes/conn.php';
    require_once '../includes/func.php';
    if(isset($_GET['id'])){
      sessionSet();
      $_SESSION['classId'] = $_GET['id'];
    }else{

      header('location: index.php');

    }



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
    

	<title>Admin</title>
</head>
<body>



<?php
include 'includes/topnav.php';
include 'includes/sidenav.php';
?>

<div class="container-fluid">
<div class="body-content">  

   </p>  class id : <?php  echo  $_SESSION['classId'] ?> </p>


	<div class="row mb-5">
     

     <div class="col-4">
        <div class="card card-content-body">
          <div class="card-body">
            <div class="col-6">
              <h1 class="card-text"><i class='bx bxs-group mx-2'></i><?php   echo $_GET['grade']?>   <?php   echo $_GET['strand']?></h1>
              <span class="card-text">Grade and Strand</span>
            </div>
          </div>
        </div>
     </div>

     <div class="col-4">
         <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bx-book-reader mx-2'></i><?php   echo $_GET['block']?></h1>
            <span class="card-text">Block</span>
          </div>
        </div>
     </div>
     <div class="col-4">
         <div class="card card-content-body">
          <div class="card-body">
            <h1 class="card-text"><i class='bx bxs-book-content mx-2'></i><?php   echo $_GET['subject']?></h1>
            <span class="card-text">Subject</span>
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