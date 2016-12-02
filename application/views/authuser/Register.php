<script src='https://www.google.com/recaptcha/api.js'></script>


          

<br>
<br>
<br>

                        <div class="row">
                                    <div class="col-md-2 col-xs-12"></div>
                                    <div class="col-md-8 col-xs-12">
                                        <div class="appoform-wrapper">
                                            <header class="form-header">
                                                <h3>Regiter Form</h3>
                                            </header>

                                                <?php if(isset($error_message)): ?>
                                              <div class="alert alert-success" id="success-alert" >
                                                <?php echo $error_message ?>  
                                              </div>
                                            <?php endif; ?>

                                            <div class="commentform">
                                                <form class="row" method="post">
                                                    
                                                    <div class="col-md-12 col-sm-12">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                                    </div>
                                                     <div class="col-md-12 col-sm-12">
                                                        <label>Email <span class="required">*</span></label>
                                                          <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
                                                          <p class="help-block error_dup" style="color:blue; display:none"></p>

                                                    </div>
                                                     <div class="col-md-12 col-sm-12">
                                                        <label>Password <span class="required">*</span></label>
                                                        <input type="password" class="form-control pass" id="password" placeholder="Password" name="password" >
                                                          <p class="help-block min_pass" style="color:blue; display:none"></p>
                                                    </div>
                                                     <div class="col-md-12 col-sm-12">
                                                        <label>Confirm Password<span class="required">*</span></label>
                                                        <input type="password" class="form-control pass" id="confirm_password" placeholder="Confirm Password" name="confirm_password" >
                                                         <p class="help-block error_pass" style="color:blue; display:none"></p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                    <input type="checkbox" class="show" >
                                                        <label for=""> Show Password</label>
                                                        
                                                    </div>


                                                    <div class="col-md-12 col-sm-12">
                                                        <?php echo $captcha?>
                                                    </div>


                                                    <div class="col-md-12 col-sm-12">
                                                        <p align="center">
                                                            <input type="submit" value="Register" class="btn btn-primary" />
                                                        </p>
                                                        
                                                    </div>
                                                </form>
                                                
                                            </div>
                                            <!-- end newsletter -->
                                        </div>
                                        <!-- end form-container -->
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-2 col-xs-12"></div>
                                </div>

 <script src=" <?php echo base_url()?>assets/frontend/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){


          $(document).on('click','.show',function () {

          if ( $(this).is (':checked')) {
              $('.pass').attr('type', 'text');
          } else{
             $('.pass').attr('type', 'password');
          }
          
        });
        
        $(document).on('blur, change', '#email', function(){
            $.ajax({
                url     : "<?php echo base_url();?>authuser/checkemail",
                type    : 'POST',
                data    : 'email='+$(this).val(),
                dataType: 'JSON',
                beforeSend: function()
                {
                },
                success: function(data)
                {
                    $('.error_dup').html(data.message);
                    $('.error_dup').show();
                    if(data.status){
                        $('#form').find('.submit').attr('disabled', false);
                    }else{
                        $('#form').find('.submit').attr('disabled', true);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error');
                }         
            });
            return false;
        });

        $(document).on('click', '.reset', function(){
            $('.error_dup').hide();
            $('.error_pass').hide();
            $('.error_dup').html('');
            $('.error_pass').html('');
            $('#form').find('.submit').attr('disabled', false);
        });

        $(document).on('change', '#confirm_password', function(){
            var pass    = $('#password').val();
            var cpass   = $(this).val();
            if(pass != cpass){
                $('.error_pass').show();
                $('.error_pass').html('These passwords dont match Try again?');

                $('#form').find('.submit').attr('disabled', true);
            }else{
                $('.error_pass').hide();
                $('.error_pass').html('');
                $('#form').find('.submit').attr('disabled', false);
            }
        });



        $(document).on('change', '#password', function(){
            var cpass   = $(this).val().length;
            if(cpass <= 8){
                $('.min_pass').show();
                $('.min_pass').html('Short passwords are easy to guess. Try one with at least 8 characters.');

                $('#form').find('.submit').attr('disabled', true);
            }else{
                $('.min_pass').hide();
                $('.min_pass').html('');
                $('#form').find('.submit').attr('disabled', false);
            }
        });



        
    })  
</script>