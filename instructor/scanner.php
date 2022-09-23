
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

    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/instructor-card.css">

    <!-- testing lang ini na cdn -->
    <script src="../js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    

	<title>Scanner</title>


</head>
<body>

<?php
include 'includes/topnav.php';
?>

<body>
    <!-- <button id="btn">Click me!</button> -->
    <div class="row">
        <div class="col my-3">
            <a href="index.php"><i class='bx bx-arrow-back mx-3'></i></a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="alert alert-success" role="alert" id="success">
              S U C C E S F U L
            </div>
            <div class="alert alert-danger" role="alert" id="failed">
              F A I L E D  - Something went wrong.
            </div>
            <div class="alert alert-danger" role="alert" id="userNotFound">
              U S E R &nbsp;  N O T &nbsp;F O U N D
            </div>

            <div class="alert alert-danger" role="alert" id="invalidClass">
              U S E R &nbsp;  N O T  &nbsp; I N   &nbsp;   C L A S S
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center mt-5">
                <div  id="reader" class="mt-4">Result Here</div>
        </div>
    </div>

    <div class="row mt-5 p-5">

        <div class="col">
            <!-- magshoshow lang to kapag sa pinindot lang ang Time In -->
            <select class="form-select mb-3" id="type"   required>
                
                    <option value="1">On Time</option>
                    <option value="2">Late</option>
                    <option value="3">Excuse</option>
            </select>
        </div>
    </div>

<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/html5-qrcode.min.js"></script>  

<script>
        
$(function() {

const toTitleCase = (phrase) => {
  return phrase
    .toLowerCase()
    .split(' ')
    .map(word => word.charAt(0).toUpperCase() + word.slice(1))
    .join(' ');
};
  // standby

  $('#success').hide();
  $('#failed').hide();
  $('#userNotFound').hide();
  $('#invalidClass').hide();

var flag = true;

function onScanSuccess(qrCodeMessage) {
      
        var  type = $('#type').val();
        var  ins_ref_id =<?php echo json_encode($_SESSION['userId']); ?>;
        var  bs_id =<?php echo json_encode($_GET['bsid']); ?>;
        var  block_ref_id =<?php echo json_encode($_GET['blockid']); ?>;
        var  std_ref_id =   qrCodeMessage.trim();

  

        if(flag){
          
            $.ajax({
              type: 'POST',
              url: 'query/scanExe.php',
              dataType: 'JSON',
              data: {
                    'type': type,
                    'ins_ref_id':ins_ref_id,
                    'bs_id' : bs_id,
                    'std_ref_id': std_ref_id,
                    'block_ref_id':block_ref_id
                    },
              beforeSend: function() {      
                    
                
              },
              error: function() { // if error occured
                  // alert("Error occured.please try again");
              },
              success: function (data) {

                $('.alert').hide();
                
                console.log(data);

                if(data.res=='invalidClass'){

                    $('#invalidClass').show();

                    }
                else if(data.res=='notexist'){

                  $('#userNotFound').show();
                
                }
                else if(data.res =='error'){

                 alert('Contact The developer ,')

                }
                else if(data.res =='failed'){
                  $('#failed').show();
                }

                else if(data.res == 'success'){

                  $('#success').show();
                  
                }


                    
                
              }
            });
              // 
              flag = false;
              setTimeout(()=>flag=true, 1000);
        }



   }

  function onScanFailure(error) {
    // console.log(error);
    // handle scan failure, usually better to ignore and keep scanning.
    // for example:
    // console.warn(`Code scan error = ${error}`);
  }
  
  let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
  html5QrcodeScanner.render(onScanSuccess, onScanFailure);


});

    </script>

</body>
</html>