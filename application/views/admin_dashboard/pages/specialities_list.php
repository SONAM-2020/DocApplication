<?php
  $this->load->view('admin_dashboard/header.php');
?>
<?php
  $this->load->view('admin_dashboard/navigation.php');
?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Specialities</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Specialities</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				<?php  
        if($message!='Undefined' && $message!=''){
      ?>
      <div class="row" id="messageId">
              <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
                  <h5 style="text-align: center;"><?=$message?></h5>
              </div>
          </div>
      <?php
      } if($messagefail!='Undefined' && $messagefail!=''){
      ?>
      <div class="row" id="messageId">
              <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
                  <h5 style="text-align: center;"><?=$messagefail?></h5>
              </div>
          </div>
      <?php
      }
      ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Specialities</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($specialities_list as $i=> $event): ?>
												<tr>
													<td><?=$i+1?></td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2">
																<img class="avatar-img" src="<?php echo base_url();?>Template/assets/img/specialities/specialities-01.png" alt="Speciality">
															</a>
															<a href="profile.html"><?php echo $event['Specialities'];?></a>
														</h2>
													</td>
													<td class="text-right">
														<div class="actions">
															<button type="button" class="btn btn-block btn-primary" onclick="edit_specialities('<?php echo $event['Id']?>','<?php echo $event['Specialities']?>')"><i class="fa fa-edit"></i>Edit</button> 
															<button type="button" class="btn btn-block btn-danger" onclick="delete_specialities('<?php echo $event['Id']?>')"><i class="fa fa-edit"></i>Delete</button>
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
			<!-- Add Modal -->
			<div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Specialities</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
						<div class="modal-body">
							<form>
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Specialities<span class="text-danger">*</span></label>
											<input type="text" class="form-control" name="name" id="name" onchange="remove_err('name_err')">
												<span id="name_err" class="text-danger"></span>
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Image</label>
											<input type="file" name="Image" id="Image" class="form-control">
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-primary btn-block" onclick="Add_Specialities()">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /ADD Modal -->
			
			<!-- Edit Details Modal -->
			<div class="modal fade" id="edit_specialities_details" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Specialities</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
							<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'editformId', 'enctype' => 'multipart/form-data'));?>
						<div class="modal-body">
							<form>
								<div class="row form-row">
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Specialities</label>
											<input type="text" class="form-control" name="name1" id="name1" onchange="remove_err('name1_err')">
												<span id="name1_err" class="text-danger"></span>
										</div>
									</div>
									<div class="col-12 col-sm-6">
										<div class="form-group">
											<label>Image</label>
											<input type="file"  class="form-control">
										</div>
									</div>
									
								</div>
								<input type="hidden" name="EditId" id="EditId">
								<button type="button" class="btn btn-primary btn-block" onclick="edit()">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Details Modal -->
			
			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">

					<!--	<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>-->
						<?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'deleteformId', 'enctype' => 'multipart/form-data'));?>
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<input type="hidden" name="DeleteId" id="DeleteId">
								<button type="button" class="btn btn-primary" onclick="deletespecialities()">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
        </div>
<script type="text/javascript">

function Add_Specialities(){
  if(validateaddform()){
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
      var url='<?php echo base_url();?>index.php?adminController/AddSpecialities';
      var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#addformId").serialize()}; 
      $("#addformId").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
      $('#Add_Specialities_details').modal('hide');
}
}
  function validateaddform(){
    var retrtype=true;
    if($('#Name').val()==""){
      $('#Name_err').html('Please Enter Specialities Name');
      retrtype=false;
    }
    return retrtype;
  }
  function edit_specialities(Editid,name){
      $('#EditId').val(Editid);
      $('#name1').val(name);
      $('#edit_specialities_details').modal('show');
    }
    function edit(){
    if(validateeditform()){
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
          var url='<?php echo base_url();?>index.php?adminController/Edit_specialities';
          var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#editformId").serialize()}; 
          $("#editformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#edit_specialities_details').modal('hide');
    }
  }
    function validateeditform(){
      var retrtype=true;
      if($('#name1').val()==""){
      $('#name1_err').html('Please Enter Specialities Name');
      retrtype=false;
    }
      return retrtype;
    }
    function delete_specialities(Editid){
      $('#DeleteId').val(Editid);
      $('#delete_modal').modal('show');
    }
    function deletespecialities(){
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
          var url='<?php echo base_url();?>index.php?adminController/Delete_specialities';
          var options = {target: '#mainpublicContent',url:url,type:'POST',data: $("#deleteformId").serialize()}; 
          $("#deleteformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#delete_modal').modal('hide');
  }
  </script>
   
 <?php
  $this->load->view('admin_dashboard/footer.php');
?>