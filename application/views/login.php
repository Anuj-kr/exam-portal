       

			<div id="myMod" class="loginmodal">
	            <div id="loginModel" class="loginmodal-content">
                
	            	<span class="closeLogin">&times;</span>
	                <h2>Login</h2>
                    <p id="login_error">Login/Password didn't matched</p>
                    <!-- <?php //echo form_open('Login/loginattempt'); ?>  -->
                    <form id="lg_form">
	                    <input type="text" id="lg_emails" class="textfield" name="email" placeholder="Email"/>
                        <p id="lg_err_email">asjh</p>
	                    <input type="password" id="lg_passwords" class="textfield" name="password" placeholder="Password"/>
                        <p id="lg_err_password">asjh</p>
                        <p style="float:left;  color:#609cec; margin:0px 0 10px 45px;"><a id="forgot-password" href="#">FORGOT PASSWORD? </a></p>
	                    <input type="submit" class="login" name="submit" value="LOG IN"/>
	               <!-- <?php //echo form_close();  ?> -->
                    </form>
                    <p style="text-align:center; margin-top:20px;">Need an account? <a  href="#" onclick="disp()">SIGN UP</a>
                    </p>

	            </div>
	        </div>

            <script type="text/javascript">
                

                $(function () {
                        
                        $("#lg_err_email").css('color', 'white');
                        $("#lg_err_password").css('color', 'white');
                        $("#login_error").css('color', 'white');
                        
                        var lg_err_email = false;
                        var lg_err_password = false
                        
                        
                        $("#lg_emails").focusout(function() {
                            check_email();
                        });

                        $("#lg_passwords").focusout(function() {
                            check_password();
                        });

                        function check_email()
                        {
                            var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/i);
                            if(pattern.test($("#lg_emails").val())) {
                                $("#lg_err_email").css('color', 'white');
                            }
                            else {
                                 
                                $("#lg_err_email").html("Please enter valid email address");
                                $("#lg_err_email").css('color', 'red');
                                lg_err_email = true;
                            }
                        }

                        function check_password()
                        {
                            var pass = $("#lg_passwords").val().length;
                            if(pass < 6) {
                                $("#lg_err_password").html("Password shuld be at least 6 character");
                                $("#lg_err_password").css('color', 'red');
                                lg_err_password = true;
                            }
                            else {
                                 $("#lg_err_password").css('color', 'white');
                            }
                        }
                    

                     $(function (){ 
                            $("#lg_form").submit(function (e){
                                e.preventDefault();

                               $("#login_error").css('color', 'white');
                                
                                lg_err_email = false;
                                lg_err_password = false
                             
                                check_email();
                                check_password();
                                
                            if(lg_err_email == false && lg_err_password == false ) {  
                                var email = $("#lg_emails").val();
                                var password = $("#lg_passwords").val();

                                $.ajax({
                                type: "post",
                                url: "<?php echo base_url();?>"+"Login/loginattempt",
                                data: {
                                    'email':email,
                                    'password':password
                                },
                                success: function(data){
                                    if(data == "1") {
                                        window.location.href = '<?php echo base_url()?>Test/mocktest?id=ibps_po';
                                        
                                        // logindisp();
                                    }else{
                                        // $("#login_error").show();
                                        $("#login_error").css('color', 'red');
                                    }

                                   
                                }

                                });
                            }
                            else{
                                return false;
                            }
                            e.stopImmediatePropagation();
                            return false;  //stop the actual form post !important!
                         
                              });
                        });
                    });
                        


            </script>
	    

