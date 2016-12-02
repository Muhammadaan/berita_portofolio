<script src='https://www.google.com/recaptcha/api.js'></script>

<br>
<br>


                    <div class="row">
                                    
                                    <div class="col-md-2 col-xs-12"></div>
                                                  
                                    
                                    <div class="col-md-8 col-xs-12">
                                        <div class="appoform-wrapper">
                                            <header class="form-header">
                                                <h3>Login Form</h3>
                                            </header>

                       
                        

                        <?php if(isset($error_message)): ?>
                      <div class="alert alert-danger alert-dismissible" id="message_error" >
                    
                        <?php echo $error_message ?>  
                      </div>
                    <?php endif; ?>
                                            <div class="commentform">
                                                <form class="row" id="form" method="post">
                                                   
                                                    <div class="col-md-12 col-sm-12">
                                                        <label>Email<span class="required">*</span></label>
                                                         <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <label>Password <span class="required">*</span></label>
                                                        <input type="password" class="pass form-control" id="password" placeholder="Password" name="password" >
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                       <label>Confirm Paasord<span class="required">*</span></label>

                                                         <input type="password" class="pass form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" >
                                                         <p class="help-block error_pass" style="color:red; display:none">
                                                         </p>
                                                    </div>
                                                     
                                                     <div class="col-md-12 col-sm-12">
                                                     <input type="checkbox" class="show" >
                                                        <label for=""> Show Password</label>
                                                        
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                        <input type="submit" value="Login" class="btn btn-primary submit" />
                                                    </div>
                                                </form>
                                                <p align="center">Or Connect with</p>
                                                <p align="center">
                                                <a href="<?php echo getFacebookLoginUrl(); ?>"> <button type="submit" class="btn btn-primary submit"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button></a></p>
                                                <p align="center">
                                                  <a href=" <?php echo base_url()?>authuser/forgot" class="btn btn-link">Forgot Password ?</a>
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-2 col-xs-12"></div>
                                </div>
                             




 <script src=" <?php echo base_url()?>assets/frontend/js/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
      

        $(document).on('click', '.reset', function(){
            $('.error_dup').hide();
            $('.error_pass').hide();
            $('.error_dup').html('');
            $('.error_pass').html('');
            $('#form').find('.submit').attr('disabled', false);
        });

         $(document).on('click','.show',function () {

          if ( $(this).is (':checked')) {
              $('.pass').attr('type', 'text');
          } else{
             $('.pass').attr('type', 'password');
          }
          
        });
      

        $(document).on('change', '#confirm_password', function(){
            var pass    = $('#password').val();
            var cpass   = $(this).val();
            if(pass != cpass){
                $('.error_pass').show();
                $('.error_pass').html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> These passwords dont match Try again? ' );

                $('#form').find('.submit').attr('disabled', true);
            }else{
                $('.error_pass').hide();
                $('.error_pass').html('');
                $('#form').find('.submit').attr('disabled', false);
            }
        });
        
    })  
</script>