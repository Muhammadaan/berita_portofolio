<script src='https://www.google.com/recaptcha/api.js'></script>
<br>
<br>
<br>

   								<div class="row">
   									<div class="col-md-2 col-xs-12"></div>

                                    <div class="col-md-8 col-xs-12">
                                        <div class="appoform-wrapper">
                                            <header class="form-header">
                                                <h3>Form Change Password</h3>
                                            </header>


		                        <?php if(isset($error_message)): ?>
		                      <div class="alert alert-success" id="success-alert" >
		                      <button type="button" class="close" data-dismiss="alert">&times;</button>
		                        <?php echo $error_message ?>  
		                      </div>
		                    <?php endif; ?>
                                            <div class="commentform">
                                                <form class="row" method="post">
                                                    

                                                    <div class="col-md-12 col-sm-12">
                                                        <label>Email</label>
                                                         <input type="email" class="form-control" id="email" placeholder="Email" name="email" >
                                                    </div>

                                                    <div class="col-md-12 col-sm-12">
                                                    <p align="center">
                                                        <input type="submit" value="Send Email" class="btn btn-primary" />
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
