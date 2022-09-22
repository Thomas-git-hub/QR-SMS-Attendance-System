<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Qr Attendance System</title>
	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	

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
	<?php include_once('includes/nav.php') ?>

	<div class="container-fluid p-3">
	<form class="cmxform" id="registerForm" method="get" action="">
		<div class="row d-flex justify-content-center mt-1">
				<div class="card card-registration text-center mb-5">
				  <div class="card-header">
				  	<img src="assets/png/bnhs.png" alt="website logo" style="width: 10%;">
				    <h6 class="h6-system-title mt-3">Student Registration Form</h6>
				  </div>
				  <div class="card-body">
				 
				    	<div class="row row-reg-form">
				    		<div class="col form-group mb-3">
							    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Full Name</label>
							    <input type="text"   name="fullname" class="form-control"  aria-describedby="emailHelp" placeholder="First, Middle, Last name">
						   	</div>

						   	<div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Gender</label>
						    <select class="form-select mb-3"  name="gender"  >
				                    <option selected="true" disabled="disabled">Select Gender</option>
				                    <option value="Male">Male</option>
				                    <option value="Female">Female</option>
				                    <option value="Non-Binary">Non-Binary</option>
				            </select>
						  </div>
				    	</div>

				    	<div class="row row-reg-form">
				    	  <div class="col form-group mb-3">
							    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Address</label>
							    <input type="text"  name="address"class="form-control"  aria-describedby="emailHelp" placeholder="Current Address">
						  </div>

						  <div class="col form-group mb-3">
							    <label class="lbl-form d-flex justify-content-start"  for="exampleInputEmail1">Guardian Phone No.</label>
							    <input type="text"  name= "phoneNumber" class="form-control"  aria-describedby="emailHelp" placeholder="09-">
						  </div>
				    	</div>

				    	<div class="row row-reg-form">
				    	  <div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Select  Grade Level</label>
						    <select class="form-select mb-3"  name="grade"  id="grade" required>
								<option selected="true" disabled="disabled">Select Grade</option>
								<option value="11">11</option>
								<option value="12">12</option>
				            </select>
						  </div>

				    	  <div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Strand</label>
						    <select class="form-select mb-3"  name="strand" id="strand"  required>
				                    
				            </select>
						  </div>

						  <div class="col form-group">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputEmail1">Block</label>
						    <select class="form-select"  name="block"  id="block" required>
				                    
				                  
				            </select>
						  </div>
				    	</div>

				    	<div class="row row-reg-form">
				    	  <div class="col form-group mb-3">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputPassword1">Email as Username</label>
						    <input type="email" name="email" class="form-control"  placeholder="@sample.com">
						  </div>
						
						  <div class="col form-group mb-3">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputPassword1">Password</label>
						    <input type="password"   id="password" name ="password" class="form-control" placeholder="Password">
						  </div>

						  <div class="col form-group mb-3">
						    <label class="lbl-form d-flex justify-content-start" for="exampleInputPassword1">Confirm Password</label>
						    <input type="password"  name= "confirmPassword" class="form-control"  placeholder="Retype your Password">
						  </div>
				    	</div>

					  <button type="submit" class="btn btn-primary btn-submit">Submit</button>
					  

					
				  </div>
				  <div class="card-footer text-muted">
				  	<img src="assets/png/bupc.png" width="7%;">
				  	<img src="assets/png/bu.png" width="7%;">
				    <p class="p-footer mt-2">Bicol University Polangui Campus</p>
			 		<p class="p-footer">@2022/2023</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>


<script  src="./js/jquery.min.js" ></script>
<script  src="./js/jquery.validate.min.js" ></script>
<script>
	$(function() {

	$("#grade").change(function(){
	var id =  this.value;
	$.ajax({
		type: 'POST',
		url: './admin/query/getAll.php?action=getstrand',
		dataType: 'JSON',
		data: {
			'id':id,
		},
		success: function (items) {
		console.log(items);
		$("#strand").empty().append("<option selected='true' disabled='disabled'>Select Strand</option>");
		
		$.each(items, function(i, item) {
			$("#strand")
				.append($("<option>", { value : item.str_ref_id })
				.text(item.str_name));
			});
		}
	});
	});

	$("#strand").change(function(){
	var id =  this.value;
	$.ajax({
		type: 'POST',
		url: './admin/query/getAll.php?action=getblock',
		dataType: 'JSON',
		data: {
			'id':id,
		},
		success: function (items) {
		console.log(items);
		$("#block").empty().append("<option selected='true' disabled='disabled'>Select Block</option>");
		
		$.each(items, function(i, item) {
			$("#block")
				.append($("<option>", { value : item.block_ref_id })
				.text(item.block_name));
			});
		}
	});
	});

$.validator.methods.checkNumber = function( value, element ) {
    return this.optional( element ) || /^(09|\+639)\d{9}$/.test( value );
  }

$("#registerForm").validate({
	rules: {

	email:{
		required : true,
		email:true
	},
	fullname:{
		required:true,
		minlength : 6,
	},
	gender:{
		required:true,
	},
	phoneNumber:{
		required:true,
		checkNumber: true
	},
	address:{
		required:true,
		minlength : 6,
	},
	strand:{
		required:true,
	},
	grade:{
		required:true,
	},
	block:{
		required:true,
	},
	password : {
					
					required:true,
					minlength : 6,
				},
				confirmPassword : {
					required:true,
					minlength : 6,
					
					equalTo : "#password"
					
				}

	},

	messages: {

	email: {
		email : "Please enter valid email",
	},
	phoneNumber: {
		checkNumber: "Please use 09 "
	}

	},


	submitHandler: function(form,event) { 
	event.preventDefault();

	console.log($('#registerForm').serialize());
		$.ajax({
			type: 'POST',
			url: './query/registerExe.php?action=add',
			dataType: 'JSON',
			data: $('#registerForm').serialize(),
			success: function (response) {
			console.log(response);

			if(response.res == 'exist'){
				alert ('email exist');
			}else if(response.res){
				window.location.href = './login.php?user=student'; 
			}else {
				alert('somethingWentWrong');
			}
			
			}
		});
	
	}

} );

	});

</script>
  
</body>
</html>