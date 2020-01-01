<!DOCTYPE html>
	<html>
		<head>
			<title>Tests | TestYourSelf</title>
			<?= link_tag(base_url('assets/css/tests.css')) ?>
			<script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>
		</head>
		<body>
			 <div id="main-container">

			 	<div id="header">

			 		<div id="main-header">
			 			<img src="<?= base_url('assets/images/logo1.png') ?>" alt="logo" style="width:140px; height:27px; margin:10px 0 0 110px;">
			 			<div id="user-name-logout">
			 				<p style="padding-right: 10px; font-size: 16px;letter-spacing: 1px;"><?php print_r($this->session->userdata('name')); ?></p> 
			 				<a style="width: 100px;height:50px; font-family: sans-serif; font-size: 16px; border-left: 1px solid gray; padding:5px 0 5px 10px;text-decoration: none " href="<?= base_url("Login/logout"); ?>">Logout</a>
				 		</div>
			 		</div>

			 		<!-- <div id="sub-header">
			 			<ul>
			 				<li><a style="width: 100px; text-align: center;"><p>Dashboard</p></a></li>
			 				<li><a style="width:70px; text-align: center;"><p>Home</p></a></li>
			 			</ul>
			 		</div> -->
			 	</div> 

			 	<div id="content-container-main" >

			 		<div id="content-container">

				 		<div id="content-head">
				 			<ul>
	                            <li><a href="<?= base_url("Test/mocktest?id=ibps_po") ?>">MOCK TEST</a></li>
	                            <li><a href="<?= base_url('Test/topictest ') ?>">TOPIC TEST</a></li>
	                            <li><a href="<?= base_url('Test/gktest') ?>">GK & ENGLISH</a></li>
	                            <!-- <li><a >DAILY TEST</a></li> -->
                        	</ul>
				 		</div>	 			

				 			<div id="gktest-englishtest">

				 				<div class="gk-topic">
					 				<div class="gk-head current-affairs">
						 				<p>Current Affairs</p>
						 				<div class="gkhead-under-current"></div>
					 				</div>
					 				<div class="gk_body-current" >
					 					<ul>
						 					<li><a href="#">Aug 2017</a></li>
						 					<li><a href="#">Jul 2017</a></li>
						 					<li><a href="#">Jue 2017</a></li>
						 					<li><a href="#">May 2017</a></li>
						 					<li><a href="#">Apr 2017</a></li>
						 					<li><a href="#">March 2017</a></li>
						 					<li><a href="#">Feb 2017</a></li>
						 					<li><a href="#">Jan 2017</a></li>
						 					<li><a href="#">Dec 2016</a></li>
						 					<li><a href="#">Nov 2016</a></li>
						 					<li><a href="#">Oct 2016</a></li>
						 					<li><a href="#">Sep 2016</a></li>
						 					<li><a href="#">Aug 2016</a></li>
						 					<li><a href="#">July 2016</a></li>
						 				</ul>
					 				</div>

				 				</div>
								<div class="gk-topic">
					 				<div class="gk-head current-affairs">
					 					<p>Science</p>
					 					<div class="gkhead-under-science"></div>
					 				</div>
					 				<div class="gk_body current-affairs">
					 					<ul>
						 					<li><a href="#">Test 01</a></li>
						 					<li><a href="#">Test 02</a></li>
						 					<li><a href="#">Test 03</a></li>
						 					<li><a href="#">Test 04</a></li>
						 					<li><a href="#">Test 05</a></li>
						 					<li><a href="#">Test 06</a></li>
						 					<li><a href="#">Test 07</a></li>
						 					<li><a href="#">Test 08</a></li>
						 					<li><a href="#">Test 09</a></li>
						 					<li><a href="#">Test 10</a></li>
						 				</ul>
					 				</div>

				 				</div>
				 				<div class="gk-topic">
					 				<div class="gk-head current-affairs">
					 					<p>History</p>
					 					<div class="gkhead-under-history"></div>
					 				</div>
					 				<div class="gk_body current-affairs">
					 					<ul>
						 					<li><a href="#">Test 01</a></li>
						 					<li><a href="#">Test 02</a></li>
						 					<li><a href="#">Test 03</a></li>
						 					<li><a href="#">Test 04</a></li>
						 					<li><a href="#">Test 05</a></li>
						 					<li><a href="#">Test 06</a></li>
						 					<li><a href="#">Test 07</a></li>
						 					<li><a href="#">Test 08</a></li>
						 					<li><a href="#">Test 09</a></li>
						 					<li><a href="#">Test 10</a></li>
						 				</ul>
					 				</div>

				 				</div>

				 				<div class="gk-topic">
					 				<div class="gk-head current-affairs">
					 					<p>Politics</p>
					 					<div class="gkhead-under-politics"></div>
					 				</div>
					 				<div class="gk_body current-affairs">
					 					<ul>
						 					<li><a href="#">Test 01</a></li>
						 					<li><a href="#">Test 02</a></li>
						 					<li><a href="#">Test 03</a></li>
						 					<li><a href="#">Test 04</a></li>
						 					<li><a href="#">Test 05</a></li>
						 					<li><a href="#">Test 06</a></li>
						 					<li><a href="#">Test 07</a></li>
						 					<li><a href="#">Test 08</a></li>
						 					<li><a href="#">Test 09</a></li>
						 					<li><a href="#">Test 10</a></li>
						 				</ul>
					 				</div>

				 				</div>

				 				<div class="gk-topic">
					 				<div class="gk-head current-affairs">
					 					<p>Miscellaneous</p>
					 					<div class="gkhead-under-miscellaneous"></div>
					 				</div>
					 				<div class="gk_body current-affairs">
					 					<ul>
						 					<li><a href="#">Test 01</a></li>
						 					<li><a href="#">Test 02</a></li>
						 					<li><a href="#">Test 03</a></li>
						 					<li><a href="#">Test 04</a></li>
						 					<li><a href="#">Test 05</a></li>
						 					<li><a href="#">Test 06</a></li>
						 					<li><a href="#">Test 07</a></li>
						 					<li><a href="#">Test 08</a></li>
						 					<li><a href="#">Test 09</a></li>
						 					<li><a href="#">Test 10</a></li>
						 				</ul>
					 				</div>

				 				</div>


				 			</div> 
				 		</div>
				 	</div>
			 	</div>
			 </div>
			 <script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>

		</body>
	</html>	 