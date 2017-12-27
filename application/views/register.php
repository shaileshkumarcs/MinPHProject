<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>-->
	<style type="text/css">
		#formRegister {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
		#formRegister div label{margin-left:5px}
		.demoInputBox{padding:10px; border:#F0F0F0 1px solid;border-radius:4px;background-color:#FFF;width:50%;}
		.error{background-color:#ff0043;border:#AA4502 1px solid;padding:5px 10px;color:#FFFFFF;border-radius:4px;}
		.success{background-color:#12CC1A;border:#0FA015 1px solid;padding:5px 10px;color:#FFFFFF;border-radius:4px;}
		.info{font-size:.8em;color:#ff0043;letter-spacing:2px;padding-left:5px;}
	</style>
</head>
<body>
	<div class="container">
	    <form class="well form-horizontal" id="formRegister" action="" method="POST"">
	        <fieldset>
	            <!-- Form Name -->
	            <legend>
	                <center>
	                    <h2><b>Registration Form</b></h2>
	                </center>
	            </legend>
	            <br>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label">Full Name</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                        <input  name="full_name" placeholder="Full Name" id="fullName" class="form-control demoInputBox"  type="text">
	                    </div>
	                </div>
	                <span id="fullName-info" class="info"></span>
	            </div>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label">E-Mail</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	                        <input name="email" placeholder="E-Mail Address" id="userEmail" class="form-control demoInputBox"  type="text">
	                    </div>
	                </div>
	                <span id="userEmail-info" class="info"></span>
	            </div>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label" >Password</label> 
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                        <input name="user_password" placeholder="Password" id="pwd" class="form-control demoInputBox"  type="password">
	                    </div>
	                </div>
	                <span id="pwd-info" class="info"></span>
	            </div>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label" >Confirm Password</label> 
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                        <input name="confirm_password" placeholder="Confirm Password" id="cpwd" class="form-control demoInputBox"  type="password">
	                    </div>
	                </div>
	                <span id="cpwd-info" class="info"></span>
	            </div>
	            <!-- Text input-->
	           <!-- <div class="form-group">
	                <label class="col-md-4 control-label">Contact No.</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	                        <input name="contact_no" placeholder="9999999999" id="contact" class="form-control demoInputBox" type="text">
	                    </div>
	                </div>
	                <span id="contact-info" class="info"></span>
	            </div>-->
	            <!-- Button -->
	            <div class="form-group">
	                <label class="col-md-4 control-label"></label>
	                <div class="col-md-4"><br>
	                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning btnAction" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send "></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	                </div>
	            </div>
	        </fieldset>
	    </form>
	    <a href="<?php echo base_url().'Instamojo'; ?>" class="btn btn-primary" > Instamojo</a>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function() {
		$("#formRegister").on('submit',(function(e){
			e.preventDefault();
			var valid;	
			valid = validateContact();
			if(valid){
			$.ajax({
				type: "POST",
				url : "<?php echo base_url().'Home'; ?>",
				data : {fullName:$("#fullName").val(),userEmail:$("#userEmail").val(),password:password = $("#pwd").val() },
				success: function(data){
					alert(data);
					location.reload();
				}
			})
			}
		}));
		function validateContact(){
			var valid = true;
			var fullname = $("#fullName").val();
			$(".info").html('');
			$(".demoInputBox").css("border-color","");
			/*
			*	 Full Name validation with javaScript
			*/
			if(!$("#fullName").val()) {
				$("#fullName-info").html("(Full name required)");
				$("#fullName").css('border-color','#ff0043');
				valid = false;
			}else if(fullname.length < 3){
				$("#fullName-info").html("(Name should more then 3 char)");
				$("#fullName").css('border-color','#ff0043');
				valid = false;
			}else if(fullname.match(/^[a-zA-Z][a-zA-Z\\s]+$/)){
				$("#fullName").css('border-color','');
				valid = true;
					
			}else{
				$("#fullName-info").html("(Name shouldn't contain spacial char)");
				$("#fullName").css('border-color','#ff0043');
				valid = false;
			}
			/*
			*	Email Validation
			*/
			var userEmail = $("#userEmail").val();
			if(!$("#userEmail").val()) {
				$("#userEmail-info").html("(Email Id required)");
				$("#userEmail").css('border-color','#ff0043');
				valid = false;
			}else if(userEmail.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
				valid = true;
			}else{
				$("#userEmail-info").html("(Please enter valid email)");
				$("#userEmail").css('border-color','#ff0043');
				valid = false;
			}
			/*
			*	Password Validation
			*/
			var password = $("#pwd").val();
			var cpassword = $("#cpwd").val();
			if(!password) {
				$("#pwd-info").html("(Email Id required)");
				$("#pwd").css('border-color','#ff0043');
				valid = false;
			}else if(password.length < 6){
				$("#pwd-info").html("(Password should more then 6 char)");
				$("#pwd").css('border-color','#ff0043');
				valid = false;
			}else if(!cpassword) {
				$("#cpwd-info").html("(Confirm password required)");
				$("#cpwd").css('border-color','#ff0043');
				valid = false;
			}else if(password !== cpassword){
				$("#cpwd-info").html("(Please enter same password)");
				$("#cpwd").css('border-color','#ff0043');
				valid = false;
			}
			return valid;

		}
	});
</script>