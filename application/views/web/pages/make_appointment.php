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
	
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Booking</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Booking</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
						
							<div class="card">
								<div class="card-body">
									<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img src="<?php echo base_url();?>Template/admin/assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="doctor-profile.html"><?=$docter_details->Name?></a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i><?=$docter_details->Location?></p>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Schedule Widget -->
							<div class="card booking-schedule schedule-widget">
							
								<!-- Schedule Header -->
								<div class="schedule-header">
									<div class="row">
										<div class="col-md-12">
											
										</div>
									</div>
								</div>
								
								<!-- Schedule Content -->
								<div class="schedule-cont">
									<div class="row">
										<div class="col-md-12">
										
											<!-- Time Slot -->
											<div class="time-slot">
												
											</div>
											<!-- /Time Slot -->
										</div>
									</div>
								</div>
								<!-- /Schedule Content -->
								
							</div>
							<!-- /Schedule Widget -->
							
							<!-- Submit Section -->
							<div class="submit-section proceed-btn text-right">
								<a href="checkout.html" class="btn btn-primary submit-btn">Proceed to Pay</a>
							</div>
							<!-- /Submit Section -->
							
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
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