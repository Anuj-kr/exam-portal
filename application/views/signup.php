  <div id="myModal" class="modal">
                
                <div class="modal-content">
                    <span class="close">&times;</span>
                    
                    <h2>Create an account</h2>
                    <form id="myForm" role="form"  method="post" >
                        <input type="text" class="textfield" id="names" name="name" placeholder="Name" maxlength="30">
                        <p id="err_name">a</p>
                        <input type="email" class="textfield" id="emails" name="email" placeholder="Email">
                        <p id="err_email" class="err" >a</p>
                        <input type="password" class="textfield" id="passwords" name="password" placeholder="Password">
                        <p id="err_password">a</p>
                        <input type="text" class="textfield" id="phones" name="phone" placeholder="Phone" maxlength="10" minlength="10" >
                        <p id="err_phone">a</p>
                        <button type="submit" class="signup" id="signUp_button" name="submit" >SIGN UP</button>
                    </form>
                    <p style="text-align:center; margin-top:20px;">Already have an account? <a  href="#" onclick="logindisp()">LOG IN</a></p>
                </div>
                 
            </div>
                    <script>
                        $("#phones").keydown(function (e) {
                            // Allow: backspace, delete, tab, escape, enter
                            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
                                 // Allow: Ctrl+A
                                (e.keyCode == 65 && e.ctrlKey === true) || 
                                 // Allow: home, end, left, right
                                (e.keyCode >= 35 && e.keyCode <= 39)) {
                                     // let it happen, don't do anything
                                     return;
                            }
                            // Ensure that it is a number and stop the keypress
                            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                e.preventDefault();
                            }
                        });
                
                    $(function () {
                        
                        $("#err_name").css('color', 'white');
                        $("#err_email").css('color', 'white');
                        $("#err_password").css('color', 'white');
                        $("#err_phone").css('color', 'white');

                        var err_name = false;
                        var err_email = false;
                        var err_password = false
                        var err_phone = false

                        $("#names").focusout(function() {
                            check_name();
                        });

                        $("#emails").focusout(function() {
                            check_email();
                            if(err_email == false) {
                                var ee = check();
                            }
                        });

                        $("#passwords").focusout(function() {
                            check_password();
                        });

                        $("#phones").focusout(function() {
                            check_phone();
                        });

                        function check_name()
                        {
                            var name_length = $("#names").val().length;
                            if(name_length < 4 || name_length > 20) {
                                $("#err_name").html("Name must be in between 4 to 20 character");
                                $("#err_name").css('color', 'red');
                                err_name = true;
                            }
                            else {
                                 $("#err_name").css('color', 'white');
                            }
                        }
                        function check_email()
                        {
                            var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/i);
                            if(pattern.test($("#emails").val())) {
                                $("#err_email").css('color', 'white');
                                err_email = false;
                            }
                            else {
                                 
                                $("#err_email").html("Please enter valid email address");
                                $("#err_email").css('color', 'red');
                                err_email = true;
                            }
                        }

                        function check_password()
                        {
                            var name_email = $("#passwords").val().length;
                            if(name_email < 6) {
                                $("#err_password").html("Password shuld be at least 6 character");
                                $("#err_password").css('color', 'red');
                                err_password = true;
                            }
                            else {
                                 $("#err_password").css('color', 'white');
                            }
                        }

                        function check_phone()
                        {
                            var name_email = $("#phones").val().length;
                            if(name_email < 10) {
                                $("#err_phone").html("Please enter valid phone number");
                                $("#err_phone").css('color', 'red');
                                err_phone = true;
                            }
                            else {
                                 $("#err_phone").css('color', 'white');
                            }
                        }

                        function check() {
                            var user_email  = $("#emails").val();
                            // alert(user_email);
                            var err = "lll";
                            $.ajax({
                                type:"POST",
                                dataType:"text",
                                url:"<?php echo base_url();?>"+"Test/check_email_existance",
                                data: {
                                    'email':user_email
                                },
                                success:function(res) {
                                    if(res != 0) {
                                        $("#err_email").css('color', 'red');
                                        $("#err_email").html("This email id is already registered");
                                        err_email = true;
                                        err = false;
                                    }
                                    else
                                    {
                                        err_email = false;
                                    }
                                }
                            });   
                        }

                        //***************************************form validation end********************************

                        $(function (){
                            $("#myForm").submit(function (e){
                                e.preventDefault();
                                err_name = false;
                                err_email = false;
                                err_password = false
                                err_phone = false

                                check_name();
                                check_email();
                                check_password();
                                check_phone();
                            if(err_name == false && err_email == false && err_password == false && err_phone == false ) {  
                                var dataString = $("#myForm").serialize();
                                $('#signUp_button').html('Please wait... <i class="fa fa-spinner fa-spin"></i>');
                                $.ajax({
                                type: "post",
                                url: "<?php echo base_url();?>"+"Signup/add",
                                data: dataString,
                                success: function(data){
                                    if(data == 1) {
                                        $('#signUp_button').html('SIGN UP');
                                        alert("Register successfull. Please login to continue ");
                                        logindisp();
                                    }
                                    else
                                    {
                                        $("#err_email").css('color', 'red');
                                        $("#err_email").html("The email entered is already registered");
                                        $('#signUp_button').html('SIGN UP');
                                    }  
                                }
                                });
                            }
                            else{
                                return false;
                            }
                            e.stopImmediatePropagation();
                            return false;  //stop the actual form post important!
                         
                              });
                        });
                    });
                    </script>