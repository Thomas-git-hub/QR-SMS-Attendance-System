
<?php  

     require_once './includes/func.php';
    sessionSet();
	

    if(isset($_GET['user'])){

        if($_GET['user']=='admin'){
            $userName = 'Admin';
        }else if($_GET['user']=='student'){
            $userName = 'Student';
        }else if($_GET['user']=='instructor'){
            $userName = 'Instructor';
        }


		if(isset($_SESSION['userId'])){
			if($_GET['user']=='admin'){
				 header('location: ./admin/');
			}else if($_GET['user']=='student'){
				header('location: ./student/');
				
			}else if($_GET['user']=='instructor'){
				header('location: ./instructor/');
				
			}
		}

    }else{
        // temp
        header('location:./');
    }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Qr Attendance System</title>
	

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	

	<!-- online lng gumagana yung box icon -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <style>

.error{
    color:red;
}

</style>
	
</head>
<body>

	<div class="container-fluid">

        <form  action="" method="post" id="loginFrm"  > 

		<div class="row d-flex justify-content-center mt-5">
				<div class="card card-login text-center">
					
				  <div class="card-header">
				  	<div class="row mt-2">
						<div class="col d-flex justify-content-start">
							<a href="./index.php"><i class='bx bx-arrow-back' style="color: #000000"></i></a>
						</div>
					</div>
				  	<img src="./assets/png/bnhs.png" alt="website logo" style="width: 15%;">
				    <h6 class="h6-system-title mt-3">Login as <?php echo $userName?></h6>
				  </div>
				  <div class="card-body">
				    <form>
					  <div class="form-group mb-3">
					  	<i class='bx bxs-user-circle d-flex justify-content-center mx-4 mb-1 mt-2'></i>
					    <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input  type='hidden' name="userType" value='<?php echo $_GET['user']?>' > 
					    <input  name ="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email Address">
					  </div>
					  <div class="form-group mb-3">
					  	<i class='bx bxs-lock-open	wq d-flex justify-content-center mx-4 mb-1'></i>
					    <!-- <label for="exampleInputPassword1">Password</label> -->
					    <input  name ="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <input type="submit" class="btn btn-primary btn-submit" value="Login">
					</form>
				  </div>
				  <div class="card-footer text-muted">
				  	<img src="./assets/png/bupc.png" width="7%;">
				  	<img src="./assets/png/bu.png" width="7%;">
				    <p class="p-footer mt-2">Bicol University Polangui Campus</p>
			 		<p class="p-footer">@2022/2023</p>
				  </div>
				</div>
			</div>

        </form>
		</div>
	</div>

</div>

  
<script  src="./js/jquery.min.js" ></script>
<script  src="./js/jquery.validate.min.js" ></script>

<script>
	$(function() {
        
        
$("#loginFrm").validate({
	rules: {

	username:{
		required : true,
	},
    password:{
		required : true,
	},

	},

	messages: {

	},


	submitHandler: function(form,event) { 
	event.preventDefault();


		$.ajax({
			type: 'POST',
			url: './query/loginExe.php',
			dataType: 'JSON',
			data: $('#loginFrm').serialize(),
			success: function (response) {

		
			console.log(response);

			if(response.res == 'already'){
				alert ('loggined from anothet accoutn');
			}else if(response.res){
                 if(response.userType.trim() == 'admin')
                    window.location.href = './admin/';
                 else if (response.userType.trim()  == 'student')
                     window.location.href  = './student';
                 else if (response.userType.trim()  == 'instructor')
                     window.location.href = './instructor/';
                 
			}else {
				alert('Invalid Credentials');
			}
			
			}
		});
	
	}

} );
    });

</script>


</body>
</html>