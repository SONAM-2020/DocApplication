<!-- jQuery -->
<script src="<?php echo base_url();?>Template/admin/assets/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?php echo base_url();?>Template/admin/assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>Template/admin/assets/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="<?php echo base_url();?>Template/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>Template/admin/assets/plugins/raphael/raphael.min.js"></script>    
<script src="<?php echo base_url();?>Template/admin/assets/plugins/morris/morris.min.js"></script>  
<script src="<?php echo base_url();?>Template/admin/assets/js/chart.morris.js"></script>

<!-- Custom JS -->
<script  src="<?php echo base_url();?>Template/admin/assets/js/script.js"></script>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
		
<script type="text/javascript">
	function loadpage(url){
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
  $("#mainpublicContent").load(url);
  setTimeout($.unblockUI, 1000); 
}
function remove_err(err_Id){
$('#'+err_Id).html('');
}
</script>
    </body>
</html>