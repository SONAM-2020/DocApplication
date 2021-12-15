<?php
  $this->load->view('web/include/header.php');
?>
<body class="account-page"> 

	<!-- Main Wrapper -->
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
									<div class="row">
		                <?php  
			                    if($message!='Undefined' && $message!=''){
			                ?>
			                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 bg-info text-white pt-10 text-center">
			                        <p><?=$message?></p>
			                    </div>
			                <?php
			                    }else{
			                ?>  
			                    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 bg-danger text-white pt-10 text-center">
			                        <p><?=$messagefail?></p>
			                    </div>
			                <?php
			                    }
			                ?> 
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