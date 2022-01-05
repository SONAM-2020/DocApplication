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
							
							<!-- Register Form -->
						<?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'pform'));?>
								<div class="form-group form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Name</label>
								</div>
								<div class="form-group form-focus">
									<input type="text" class="form-control floating">
									<label class="focus-label">Mobile Number</label>
								</div>
								<div class="form-group form-focus">
									<input type="password" class="form-control floating">
									<label class="focus-label">Create Password</label>
								</div>
								<div class="text-right">
									<a class="forgot-link" href=""  onclick="loadpage('<?php echo base_url();?>index.php?websiteController/loadpage/login/')">Already have an account?</a>
								</div>
								<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
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
<?php
  $this->load->view('web/include/footer.php');
?>	