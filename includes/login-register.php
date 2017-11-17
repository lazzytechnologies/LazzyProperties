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

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
>>>>>>> 2be7510ded102541237b9ea0dc045b04361f0767
<form id="show" action="" method="post"> 
<?php echo reg_user();?> 
<div class="form-group">
    <label for="email">Email *</label>
<<<<<<< HEAD
    <input type="text" id="reg-email" required class="form-control" name="reg_email" placeholder="Email@sample.com">
</div>
<div class="form-group">
    <label for="Lastname">Last Name *</label>
    <input type="text" id="reg-last" required class="form-control" name="reg_lname" placeholder="Last Name">
</div>
<div class="form-group">
    <label for="Firstname">First Name *</label>
    <input type="text" id="reg-first" required class="form-control" name="reg_fname" placeholder="First Name">
=======
<<<<<<< HEAD
<<<<<<< HEAD
    <input type="text" id="reg-email" required class="form-control" name="reg_email" placeholder="Email@sample.com">
</div>
<div class="form-group">
    <label for="Lastname">Last Name *</label>
    <input type="text" id="reg-last" required class="form-control" name="reg_lname" placeholder="Last Name">
</div>
<div class="form-group">
    <label for="Firstname">First Name *</label>
    <input type="text" id="reg-first" required class="form-control" name="reg_fname" placeholder="First Name">
=======
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
    <input type="text" required class="form-control" name="reg_email" placeholder="Email@sample.com">
<<<<<<< HEAD
=======
=======

 
<div class="form-group">
    <label for="email">Email *</label>
    <input type="text" required class="form-control" name="email" placeholder="Email@sample.com">
>>>>>>> 0af9efb084afc4fbb89a13414bb47a599c5f880b
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
</div>
<div class="form-group">
    <label for="Lastname">Last Name *</label>
    <input type="text" required class="form-control" name="reg_lname" placeholder="Last Name">
</div>
<div class="form-group">
    <label for="Firstname">First Name *</label>
    <input type="text" required class="form-control" name="reg_fname" placeholder="First Name">
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
>>>>>>> 2be7510ded102541237b9ea0dc045b04361f0767
</div>
<<<<<<< HEAD
<div class="form-group">
    <label for="Mobile">Mobile Number *</label>
<<<<<<< HEAD
    <input type="text" id="reg-mobile" required class="form-control" name="reg_mobile" placeholder="Mobile Number">
</div>
<div class="form-group">
    <label for="password">Password *</label>
    <input type="password" id="reg-pass" required class="form-control" name="reg_password" placeholder="******">
=======
<<<<<<< HEAD
<<<<<<< HEAD
    <input type="text" id="reg-mobile" required class="form-control" name="reg_mobile" placeholder="Mobile Number">
</div>
<div class="form-group">
    <label for="password">Password *</label>
    <input type="password" id="reg-pass" required class="form-control" name="reg_password" placeholder="******">
=======
    <input type="text" required class="form-control" name="reg_mobile" placeholder="Mobile Number">
=======
    <input type="text" required class="form-control" name="reg_mobile" placeholder="Mobile Number">
</div>
<<<<<<< HEAD
=======
=======


>>>>>>> 0af9efb084afc4fbb89a13414bb47a599c5f880b
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<div class="form-group">
    <label for="password">Password *</label>
    <input type="password" required class="form-control" name="reg_password" placeholder="******">
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
</div>
<<<<<<< HEAD
=======
=======


<<<<<<< HEAD
>>>>>>> 0af9efb084afc4fbb89a13414bb47a599c5f880b
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<div class="form-group">
    <label for="password">Password *</label>
    <input type="password" required class="form-control" name="reg_password" placeholder="******">
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
>>>>>>> 2be7510ded102541237b9ea0dc045b04361f0767
</div>
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9

<div class="text-center">
    <button type="submit" class="btn btn-default">Register</button>
</div>
</div>

<div class="text-center">
    <button type="submit" class="btn btn-default">Register</button>
</div>
</div>


<<<<<<< HEAD
=======

<<<<<<< HEAD
<div class="text-center">
	<input name="_wp_http_referer" type="hidden" value="/register">
    <button name="reg_submit" id="reg-submit" type="submit" class="btn btn-default">Register</button>
</div>
    <p class="form-message"></p>
</form>

=======
<<<<<<< HEAD
<<<<<<< HEAD
<div class="text-center">
	<input name="_wp_http_referer" type="hidden" value="/register">
    <button name="reg_submit" id="reg-submit" type="submit" class="btn btn-default">Register</button>
</div>
    <p class="form-message"></p>
</form>
=======
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<div class="text-center">
	<input name="_wp_http_referer" type="hidden" value="/register">
    <button name="reg_submit" type="submit" class="btn btn-default">Register</button>
</div>
=======
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<div class="text-center">
	<input name="_wp_http_referer" type="hidden" value="/register">
    <button name="reg_submit" type="submit" class="btn btn-default">Register</button>
</div>
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
</form>
<<<<<<< HEAD
=======
=======

>>>>>>> 0af9efb084afc4fbb89a13414bb47a599c5f880b
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9

>>>>>>> 2be7510ded102541237b9ea0dc045b04361f0767
                                                          
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
<<<<<<< HEAD
                                    <input type="text" required class="form-control" name="login_email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control" name="login_password" id="password">
=======
<<<<<<< HEAD
                                    <input type="text" required class="form-control" name="login_email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control" name="login_password" id="password">
=======
<<<<<<< HEAD
<<<<<<< HEAD
                                    <input type="text" required class="form-control" name="login_email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control" name="login_password" id="password">
=======
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
                                    <input type="text" class="form-control" name="login_email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="login_password" id="password">
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
<<<<<<< HEAD
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
=======
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
>>>>>>> 2be7510ded102541237b9ea0dc045b04361f0767
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
