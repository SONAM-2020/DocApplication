<section class="content-header">
  <h1>
       Call Complaint Report Details
  </h1>
</section>
<section class="content">
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Bhutan Telecom Call Complaint Report</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <?php echo form_open('#' , array('class' => 'edit-profile m-b30', 'enctype' => 'multipart/form-data','id'=>'movementform'));?>
                <div class="table-responsive">
                  <table id="example5" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Ticket ID.</th>
                      <th>Ticket Date Time</th>
                      <th>Caller ID</th>
                      <th>Complain Type</th>
                      <th>Dzongkhag</th>
                      <th>Location</th>
                      <th>Complant Number</th>
                      <th>Services</th>
                      <th>Status</th>
                      <th>Assigned By</th>
                      <th>Assigned To</th>
                      <th>Mode Type</th>
                      <th>Escalation Time</th>
                      <th>InProgress Time</th>
                      <th style="display:none;">Escalated Closed Time</th>
                      <th>Closed Time</th>
                      <th>Inprogress Duration</th>
                      <th>Escalated Duration</th>
                      <th>Turn Around Time</th>
                      <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reportDetils as $i=> $event): ?>
                    <tr>
                      <td><?=$i+1?></td>
                      <td><?php echo $event['id'];?></td>
                      <td><?php echo $event['ticket_date_time'];?></td>
                      <td><?php echo $event['caller_id'];?></td>
                      <td><?php echo $event['complain_name'];?></td>
                      <td><?php echo $event['dzongkhag'];?></td>
                      <td><?php echo $event['location'];?></td>
                      <td><?php echo $event['mobile_no'];?></td>
                      <td><?php echo $event['service'];?></td>
                      <td><?php echo $event['status_name'];?></td>
                      <td><?php echo $event['agent_id'];?></td>
                      <td><?php echo $event['assignedTo'];?></td>
                      <td><?php echo $event['mode_type'];?></td>
                      <td><?php echo $event['escalated_time'];?></td>
                      <td><?php echo $event['inprogress_time'];?></td>
                      <td style="display:none;"><?php echo $event['mobile_no'];?></td>
                      <td><?php echo $event['closed_time'];?></td>
                      <td><?php echo $event['inprogress_duration'];?></td>
                      <td><?php echo $event['esclation_duration'];?></td>
                      <td><?php echo $event['turn_around_time'];?></td>
                      <td><?php echo $event['supportdescription'];?></td>t

                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>  
<script>
   $(document).ready(function() {
    $('#example5').DataTable( {
        dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
    } );
} );
</script>
 