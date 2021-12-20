<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
  error_reporting(0);
?>
<?php
  $this->load->view('web/include/header.php');
?>
<body>
  <div id="mainpublicContent">
    <div class="main-wrapper">
      
<?php
  $this->load->view('web/include/nav.php');
?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			
				<!-- Account Content -->
				<div class="account-content">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-7 col-lg-6 login-left">
							<img src="<?php echo base_url();?>Template/assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
						</div>
						<div class="col-md-12 col-lg-6 login-right">
							<div class="login-header">
								<h3>Doctor Register <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?websiteController/loadpage/register/')">Not a Doctor?</a></h3>
							</div>
							
							<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'pform'));?>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="name" id="name" onchange="remove_err('name_err')">
												<label class="focus-label">Name<span class="text-danger">*</span></label>
												<span id="name_err" class="text-danger"></span>
											</div>
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="phone" id="phone" onchange="remove_err('Phone_err')">
									<label class="focus-label">Mobile Number<span class="text-danger">*</span></label>
										<span id="phone_err" class="text-danger"></span>
								</div>
								<div class="form-group form-focus">
									<input type="password" class="form-control floating" name = "password" id = "password" onchange="remove_err('password_err')">
									<label class="focus-label">Create Password<span class = "text-danger">*</label>
										<span id = "password_err" class = "text-danger"></span>
								</div>
								<div class="text-right">
									<a class="forgot-link" href=""  onclick="loadpage('<?php echo base_url();?>index.php?websiteController/loadpage/login/')">Already have an account?</a>
								</div>
								<button class="btn btn-primary btn-block btn-lg login-btn" type="button" onclick="register()">Signup</button>
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
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<script type="text/javascript">
    function register(){
    if(validatefrom()){
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
            var url='<?php echo base_url();?>index.php?websiteController/DoctorRegister';
            var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#pform").serialize()}; 
            $("#pform").ajaxSubmit(options);
            setTimeout($.unblockUI, 600); 
        }
    }

    function validatefrom(){
      let returnt=true;
      if($('#name').val()==""){
        $('#name_err').html('Please Mention Your Name');
        $('#name').focus();
        returnt=false;
      }
      if($('#password').val()==""){
        $('#password_err').html('Please Enter Your Password');
        $('#password').focus();
        returnt=false;
      }
      if($('#phone').val()=="" || $('#phone').val().length!=8){
        $('#phone_err').html('Please Mention Your 8 digit Phone Number');
        $('#phone').focus();
        returnt=false;
      }
      
      return returnt;
    }
  </script>	
<?php
  $this->load->view('web/include/footer.php');
?>	