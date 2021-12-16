<section class="content-header">
  <h1>
    Home
    <small>User Management</small>
  </h1>
</section>
<section class="content" style="background-color:white;">
  <div class="row">
    <div class="col-xs-12">
          <span><button class="btn btn-success fa-pull-right" onclick="addinfo()" type="button"><i class="fa fa-plus"></i> Add Users</button></span>
        </div>
        <br>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead style="text-align: center">
            <tr>
              <th>No.</th>
              <th>F.Name</th>
              <th>L.Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Agent ID</th>
              <th>Role</th>
              <th>Region</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody style="text-align: center">
              <?php foreach($users_info as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['firstname'];?></td>
              <td><?php echo $event['lastname'];?></td>
              <td><?php echo $event['phoneno'];?></td>
              <td><?php echo $event['emailid'];?></td>
              <td><?php echo $event['agentid'];?></td>
              <td><?php echo $event['role'];?></td>
              <td><?php echo $event['region_name'];?></td>
              <td>
                <button type="button" class="btn btn-info btn-block" onclick="show('<?php echo $event['firstname']?>','<?php echo $event['lastname']?>','<?php echo $event['phoneno']?>','<?php echo $event['emailid']?>','<?php echo $event['agentid']?>','<?php echo $event['role']?>','<?php echo $event['region_name']?>')"><i class="fa fa-edit"></i>Edit</button> 
                <button type="button" class="btn btn-danger btn-block" onclick="deleteuser('<?php echo $event['id']?>')"><i class="fa fa-times"></i>Delete</button>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal modal-default" id="addusersDetails">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span id="medelheaderspan"></span></h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name:<span class="text-danger">*</span></label>
                            <input type="text" id="Name" onclick="remove_err('Name_err')" name="Name" class="form-control">
                            <span id="Name_err" class="text-danger"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Designation:<span class="text-danger">*</span></label>
                            <input type="text" id="Designation" onclick="remove_err('Designation_err')" name="Designation" class="form-control">
                            <span id="Designation_err" class="text-danger"></span>
                        </div>
                      </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Email Address:<span class="text-danger">*</span></label>
                            <input type="text" id="Email" onclick="remove_err('Email_err')" name="Email" class="form-control">
                            <span id="Email_err" class="text-danger"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Password: <span class="text-danger">*</span></label>
                            <input type="text" id="Password" onclick="remove_err('Password_err')" name="Password" class="form-control">
                            <span id="Password_err" class="text-danger"></span>
                        </div> 
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Role Id:<span class="text-danger">*Admin-1 & Other User-2</span></label>
                            <input type="text" id="Role" onclick="remove_err('Role_err')" name="Role" class="form-control">
                            <span id="Role_err" class="text-danger"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Phone:<span class="text-danger">*</span></label>
                            <input type="text" id="Phone" onclick="remove_err('Phone_err')" name="Phone" class="form-control">
                            <span id="Phone_err" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <button class="btn btn-success" id="addBtn" type="button" onclick="AddInfo()"> <span id="btnspan"></span> </button>
                        </div>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">

    $('.summernote').summernote({
    height: 150,   //set editable area's height
    codemirror: { // codemirror options
    }
    });
  
 function addinfo(){
      $('#actiontype').val('add');
      $('#medelheaderspan').html('User Management');
      $('#btnspan').html('<i class="fa fa-save"></i> Add New User');
      $('#addusersDetails').modal('show');
    }
    function AddInfo(){
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
          var url='<?php echo base_url();?>index.php?adminController/addusers';
          var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
          $("#addformId").ajaxSubmit(options);
          setTimeout($.unblockUI, 600); 
          $('#addbioDetails').modal('hide');
    }
    }

    function validateaddform(){
      var retrtype=true;
      if($('#Email').val()==""){
        $('#Email_err').html('Please Enter Your Email.');
        retrtype=false;
      }
      if($('#Password').val()==""){
        $('#Password_err').html('Please Create Password.');
        retrtype=false;
      }
      if($('#Role').val()==""){
        $('#Role_err').html('Please Enter a Role Id.');
        retrtype=false;
      }
      if($('#Name').val()==""){
        $('#Name_err').html('Please Enter Your Name.');
        retrtype=false;
      }
      if($('#Designation').val()==""){
        $('#Designation_err').html('Please Enter Designation.');
        retrtype=false;
      }
      if($('#Phone').val()==""){
        $('#Phone_err').html('Please Enter a Mobile_Number.');
        retrtype=false;
      }
      return retrtype;
    }
    function deleteuser(id){
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
        var url='<?php echo base_url();?>index.php?adminController/DeleteUser/'+id+'/systemusers';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
  </script>