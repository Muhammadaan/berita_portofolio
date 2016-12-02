
<div class="login-box">
  <div class="login-logo">
    <a href=""><b> <?php echo label('title'); ?> </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
        <!-- Message -->
        <?php if (isset($message_error) ) { ?>
            <div class="alert alert-danger alert-dismissible" id="message_error">
                <?php echo $message_error;?>
            </div>            
        <?php } ?>

        <?php if (isset($succces_message)){  ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $succces_message;?>
            </div>            
        <?php }?>
        <!-- Message end -->

    <form action="" method="post" id="formlogin">
      <div class="form-group has-feedback">
        <input type="input" class="form-control" id="name" placeholder="Email / Username" name="email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control pass" placeholder="Password" name="password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="show"> Show Password
            </label>
          </div>
        </div>
        <div class="col-xs-4">
            <a href="<?php echo base_url();?>auth">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </a>
            
        </div>
      </div>
    </form>

   
   



  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

 <!-- <div style="float:right;margin-right:15px;font-size:15px;">
        <a href="<?php echo base_url();?>auth/languages/english">English</a> |
        <a href="<?php echo base_url();?>auth/languages/indonesia">Indonesia</a> |
        <a href="<?php echo base_url();?>auth/languages/jawa">Jawa</a> 
    </div> -->

    <script src=" <?php echo base_url()?>assets/backend/js/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){

       $(document).on('click','.show',function () {

          if ( $(this).is (':checked')) {
              $('.pass').attr('type', 'text');
          } else{
             $('.pass').attr('type', 'password');
          }
          
        });
       });

        $("#message_error").fadeTo(1000, 1000).slideUp(500, function(){
        $("#message_error").alert('close');


       $('#formlogin').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                container: '#name',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastName: {
                container: '.lastNameMessage',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }
                }
            }
        }
    });

    });
    </script>