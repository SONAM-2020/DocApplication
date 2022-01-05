      <!-- Footer -->
      <footer class="footer">
        
        <!-- Footer Top -->
        <div class="footer-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-md-6">
              
                <!-- Footer Widget -->
                <div class="footer-widget footer-about">
                  <div class="footer-logo">
                    <img src="<?php echo base_url();?>Template/assets/img/footer-logo.png" alt="logo">
                  </div>
                  <div class="footer-about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="social-icon">
                      <ul>
                        <li>
                          <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                        </li>
                        <li>
                          <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                        </li>
                        <li>
                          <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                          <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /Footer Widget -->
                
              </div>
              
              <div class="col-lg-3 col-md-6">
              
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h2 class="footer-title">For Patients</h2>
                  <ul>
                    <li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
                    <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                    <li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
                    <li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
                    <li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
                
              </div>
              
              <div class="col-lg-3 col-md-6">
              
                <!-- Footer Widget -->
                <div class="footer-widget footer-menu">
                  <h2 class="footer-title">For Doctors</h2>
                  <ul>
                    <li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
                    <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
                    <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                    <li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
                    <li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
                  </ul>
                </div>
                <!-- /Footer Widget -->
                
              </div>
              
              <div class="col-lg-3 col-md-6">
              
                <!-- Footer Widget -->
                <div class="footer-widget footer-contact">
                  <h2 class="footer-title">Contact Us</h2>
                  <div class="footer-contact-info">
                    <div class="footer-address">
                      <span><i class="fas fa-map-marker-alt"></i></span>
                      <p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
                    </div>
                    <p>
                      <i class="fas fa-phone-alt"></i>
                      +1 315 369 5943
                    </p>
                    <p class="mb-0">
                      <i class="fas fa-envelope"></i>
                      doccure@example.com
                    </p>
                  </div>
                </div>
                <!-- /Footer Widget -->
                
              </div>
              
            </div>
          </div>
        </div>
        <!-- /Footer Top -->
        
        <!-- Footer Bottom -->
                <div class="footer-bottom">
          <div class="container-fluid">
          
            <!-- Copyright -->
            <div class="copyright">
              <div class="row">
                <div class="col-md-6 col-lg-6">
                  <div class="copyright-text">
                    <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6">
                
                  <!-- Copyright Menu -->
                  <div class="copyright-menu">
                    <ul class="policy-menu">
                      <li><a href="term-condition.html">Terms and Conditions</a></li>
                      <li><a href="privacy-policy.html">Policy</a></li>
                    </ul>
                  </div>
                  <!-- /Copyright Menu -->
                  
                </div>
              </div>
            </div>
            <!-- /Copyright -->
            
          </div>
        </div>
        <!-- /Footer Bottom -->
        
      </footer>
      <!-- /Footer -->
       
    </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="<?php echo base_url();?>Template/assets/js/jquery.min.js"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="<?php echo base_url();?>Template/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>Template/assets/js/bootstrap.min.js"></script>
    
    <!-- Sticky Sidebar JS -->
        <script src="<?php echo base_url();?>Template/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="<?php echo base_url();?>Template/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo base_url();?>Template/assets/js/script.js"></script>
    
  </body>

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
</html>
<script src="<?php echo base_url();?>assest/JqueryAjaxFormSubmit.js"></script>
<script src="<?php echo base_url();?>assest/jquery.form.js"></script>
<script src="<?php echo base_url();?>assest/jquery-blockUI.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest/summernote/summernote-lite.js"></script>
<script type="text/javascript">
  $('.summernote').summernote({
      height:300
  });
  function remove_err(err_Id){
    $('#'+err_Id).html('');
  }
  function loadpage(url,id){
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
      $("#mainContentdiv").load(url);
      setTimeout($.unblockUI, 1000);
      
    }

    function update(type,formId){
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
      var url='<?php echo base_url();?>index.php?adminController/UpdateInfo/'+type;
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#"+formId).serialize()}; 
      $("#"+formId).ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
    }
    function checkfilesize(file,fileId,errorId,buttonId){
      var val=file.files[0].size/1024/1024,ext=$('#'+fileId).val().split('.').pop();
        if(val > 2){
            $('#'+errorId).html('Your file size should be below 2 mb. your current file size is '+val+' mb');
            file.value = "";
            $('#'+buttonId).hide();
        }
        else if(ext.toUpperCase()!="PNG" && ext.toUpperCase()!="JPG" && ext.toUpperCase()!="JPEG"){
            $('#'+errorId).html('you are not allow to attach this file. only png/jpg/jpeg are allowed ');
            file.value = "";
            $('#'+buttonId).hide();
        }
        else{
            $('#'+errorId).html('');
            $('#'+buttonId).show();
        }
    }
</script>