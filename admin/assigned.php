<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <!-- online lng gumagana yung box icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/manage-instructor.css">
</head>
<body>
    
            <div class="card p-4" >
            <div class="table" style="overflow-y: hidden; overflow-x: hidden;">
              <table id="" class="table table-striped display">
                <thead>
                    <tr>
                        <th>Year</th>
                        <th>Strand</th>
                        <th>Block</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
 <?php 
 if (!isset($_GET['ins_ref'])) { ?>
 					<tr>
                        <td colspan="100" style="text-align: center;">No Selected Prof</td>
                    </tr>

 <?php }else{  ?>

                	 <?php 

       require_once '../includes/conn.php';
    $db->join("assign_sub asub", "asub.ins_ref_id=ins.ins_ref_id");
    $db->join("block_subject bs", "bs.bs_id=asub.bs_id");
    $db->join("block_tbl bl", "bl.block_ref_id=bs.block_ref_id");
    $db->join("subject_tbl sub", "sub.subject_ref_id=bs.subject_ref_id");
    $db->join("strand_tbl str", "bl.str_ref_id=str.str_ref_id");

	$db->where("ins.ins_ref_id", $_GET['ins_ref']);
    $assigned = $db->get ("instructor_tbl ins", null, "str.grade, str.str_name, bl.block_name, sub.subject_name");
    if ($db->count == 0) {
        echo "<tr><td> Empty </td></tr>";
    }
    foreach ($assigned as $ass) {
?> 
                    <tr>
                        <td><?php echo $ass['grade'] ;?></td>
                        <td><?php echo $ass['str_name'] ;?></td>
                        <td><?php echo $ass['block_name'] ;?></td>
                        <td><?php echo $ass['subject_name'] ;?></td>
                    </tr>
 <?php } }?>

                </tbody>
            </table>
        </div>
        </div>
    
</body>

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
</html>