<!DOCTYPE html>
	<html>
		<head>
			<title>Contact</title>
			<?= link_tag(base_url('assets/css/mainPage.css')) ?>
			<script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>
			<!-- For font -->
			<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
			<!-- For Icons -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		</head>
		<body>

			<div id="header">

                        <div id="logo_container">
                            <img src="<?= base_url('assets/images/logo1.png') ?> " alt="logo" style="width:200px; height:55px;" >

                        </div>
                        <div id="navbar">
                            <ul id="nav">
                                <li><?= anchor('Main','Home');?></li>
                                <li><a id="heading_and_course" href="#">Course</a></li>
                                <li><?= anchor('Login/select','Practice'); ?></li>
                                <li><?= anchor('Contact','Contact'); ?></li>
                                <li><a id="login" href="#" onclick="logindisp()">login</a></li>
                                <li><a  id="signupNow" onclick="disp()">SignUp</a></li>
                            </ul>
                        </div>

                    </div>

               <!--  <div id="myModal" class="modal">
                
                <div class="modal-content">
                    <span class="close">&times;</span>
                    
                    <h2>Create an account</h2>
                    <form>
                        <input type="text" class="textfield" name="name" placeholder="Name">
                        <input type="text" class="textfield" name="email" placeholder="Email">
                        <input type="password" class="textfield" name="password" placeholder="Password">
                        <input type="text" class="textfield" name="phone" placeholder="Phone">
                        <input type="submit" class="signup" name="submit" value="SIGN UP">
                    </form>
                    <p style="text-align:center; margin-top:20px; font-family:sans-serif; font-size: 13px;">Already have an account? <a  style="font-family: sans-serif; font-size: 14px;color:#609cec;text-decoration: none;" href="#">&nbsp;&nbsp;LOG IN</a></p>
                </div>
                
            </div>
        
        
            <script >
        
                var signup_modal = document.getElementById('myModal');
                
                var btn= document.getElementById("signup");
                
                var spanclose = document.getElementsByClassName("close")[0];
                
                btn.onclick = function()
                { 
                    signup_modal.style.display = "block";
                }
                spanclose.onclick = function()
                {
                    signup_modal.style.display="none";
                }

            </script> -->

		</body>
	</html>
