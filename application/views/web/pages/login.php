<?php
  $this->load->view('web/include/header.php');
?>
<body class="account-page"> 
	<div id="mainpublicContent">
	<div class="main-wrapper">
<?php
  $this->load->view('web/include/nav.php');
?>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="account-content">
							<div class="row align-items-center justify-content-center">
								<div class="col-md-7 col-lg-6 login-left">
									<img src="<?php echo base_url();?>Template/assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
								</div>
								<div class="col-md-12 col-lg-6 login-right">
									<div class="login-header">
										<h3>Login<span>Doccure</span></h3>
									</div>
									 <?php echo form_open('?loginController/login' , array('class' =>'form-horizontal','id' => 'loginform'));?>
										<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="phone" id="phone" onchange="remove_err('Phone_err')">
												<label class="focus-label">Email Address<span class="text-danger">*</span></label>
												<span id="phone_err" class="text-danger"></span>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password" id="password" onchange="remove_err('password_err')">
												<label class="focus-label">Password<span class="text-danger">*</span></label>
												<span id="password_err" class="text-danger"></span>
											</div>
										<div class="text-right">
											<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
										</div>
										<button class="btn btn-primary btn-block btn-lg login-btn" type="button" onclick="login()">Login</button>
										<div class="login-or">
											<span class="or-line"></span>
											<span class="span-or">or</span>
										</div>
										<div class="row form-row social-login">
											<div class="col-6">
												<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
											</div>
											<div class="col-6">
												<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
											</div>
										</div>
										<div class="text-center dont-have">Don’t have an account? <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?websiteController/loadpage/register/')">Register</a></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
function login(){
  if(validate()){
      $.blockUI
      ({ 
        css: 
        { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
        } 
      });
     $('#loginform').submit();
      setTimeout($.unblockUI, 600);
  }
}
function validate(){
  var retval=true;
  if($('#phone').val()==""){
    $('#Phone_err').html('Please provide your phone Number');
    retval=false;
  }
  if($('#password').val()==""){
     $('#password_err').html('Your password is required'); 
     retval=false;
  }
  return retval;
}
function remove_err(err_Id){
  $('#'+err_Id).html('');
}
function reset(){
      $.blockUI
      ({ 
        css: 
        { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
        } 
      });
      var url='<?php echo base_url();?>index.php?baseController/loadpage/resetpassword';
    $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
  }
</script>		
<?php
  $this->load->view('web/include/footer.php');
?>	