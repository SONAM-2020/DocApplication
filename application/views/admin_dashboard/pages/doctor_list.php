<?php
  $this->load->view('admin_dashboard/header.php');
?>
<?php
  $this->load->view('admin_dashboard/navigation.php');
?>
      <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
								</ul>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>ID</th>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Member Since</th>
													<th>Earned</th>
													<th>Account Status</th>
													
												</tr>
											</thead>
											<tbody>
												 <?php foreach($t_doctor_list as $i=> $event): ?>
												<tr>
													<td><?=$i+1?></td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo base_url();?>Template/admin/assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
															<a href="profile.html"><?php echo $event['Name'];?></a>
														</h2>
													</td>
													<td><?php echo $event['Speciality'];?></td>
													
													<td><?php echo $event['Created_Date'];?></td>
													
													<td>Nu.<?php echo $event['Earned'];?></td>
													
													<td>
														<div class="status-toggle">
														<?php if($event['Status']=="Active"){ ?><span class="label label-success"><?php echo $event['Status'];?></span>
			                      <?php } else{?>   
			                          <span class="label label-danger"><?php echo $event['Status'];?></span>
			                      <?php }?>
														</div>
													</td>
												</tr>
												 <?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
        </div>
        <?php
  $this->load->view('admin_dashboard/footer.php');
?>
