<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    
    
    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/datables.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">

    <!-- datables css-->
    <link href="vendor/DataTables/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="vendor/DataTables/css/buttons.dataTables.min.css" rel="stylesheet">
    
</head>
<body>

<?php

// include_once '../includes/func.php';
include_once("includes/side-nav.php");
// include_once '../includes/conn.php';



?>




<?php 
if (isset($_GET['page']) && $_GET['page'] == "") {
	include_once("includes/");
}
else if (isset($_GET['page']) && $_GET['page'] == "") {
	include_once("includes/");
// }
// else if (isset($_GET['page']) && $_GET['page'] == "view_acc") {
// 	include_once("includes/view_acc.php");
// }
// else if (isset($_GET['page']) && $_GET['page'] == "admin_acc") {
// 	include_once("includes/campus_admin_acc.php");
// }
// else if (isset($_GET['page']) && $_GET['page'] == "add_camp") {
//     include_once("includes/add_camp.php");
// }
// else if (isset($_GET['page']) && $_GET['page'] == "generate") {
// 	include_once("includes/generate.php");
}
?>


<?php include_once("includes/footer.php") ?>
<?php include_once("includes/modal.php") ?>