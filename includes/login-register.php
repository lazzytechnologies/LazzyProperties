<br><br><br>
        <!-- register-area -->
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>



  <script >
      
    $(document).ready(function(){
        $("form").submit(function(event) {
            event.preventDefault();
            var email = $("#reg-email").val();
            var last = $("#reg-last").val();
            var first = $("#reg-first").val();
            var mobile = $("#reg-mobile").val();
            var pass = $("#reg-pass").val();
            var submit = $("#reg-submit").val();
            $(".form-message").load("log-reg-val.php", {
                email: email,
                last: last,
                first: first,
                mobile: mobile,
                pass: pass,
                submit: submit
            });
        });
    });




  </script>
  
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                           
                           <div class="form-group">

<form id="show" action="" method="post"> 
<?php echo reg_user();?> 
<div class="form-group">
    <label for="email">Email *</label>
    <input type="text" id="reg-email" required class="form-control" name="reg_email" placeholder="Email@sample.com">
</div>
<div class="form-group">
    <label for="Lastname">Last Name *</label>
    <input type="text" id="reg-last" required class="form-control" name="reg_lname" placeholder="Last Name">
</div>
<div class="form-group">
    <label for="Firstname">First Name *</label>
    <input type="text" id="reg-first" required class="form-control" name="reg_fname" placeholder="First Name">
</div>
<div class="form-group">
    <label for="Mobile">Mobile Number *</label>
    <input type="text" id="reg-mobile" required class="form-control" name="reg_mobile" placeholder="Mobile Number">
</div>
<div class="form-group">
    <label for="password">Password *</label>
    <input type="password" id="reg-pass" required class="form-control" name="reg_password" placeholder="******">
</div>

</div>




<div class="text-center">
	<input name="_wp_http_referer" type="hidden" value="/register">
    <button name="reg_submit" id="reg-submit" type="submit" class="btn btn-default">Register</button>
</div>
    <p class="form-message"></p>
</form>

                                                          
                                <div class="form-group">
                                     
                                    <br>
                                    
                                </div>
                               
                            




                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
							
                            <form id="show" action="" method="post">
							<?php echo login() ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" required class="form-control" name="login_email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control" name="login_password" id="password">
                                </div>
                                <div class="text-center">
								<input name="_wp_http_referer" type="hidden" value="/login">
                                    <button name="login_submit" type="submit" class="btn btn-default"> Log in</button>
                                </div>
                            </form>
                            <br>
                            
                            <h2>Social login :  </h2> 
                            
                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> 
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      
