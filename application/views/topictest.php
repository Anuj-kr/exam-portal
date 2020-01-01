<!DOCTYPE html>
	<html>
		<head>
			<title>Tests | TestYourSelf</title>
			<?= link_tag(base_url('assets/css/tests.css')) ?>
			<script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		</head>
		<body>
			 <div id="main-container">

			 	<div id="header">

			 		<div id="main-header">
			 			<img src="<?= base_url('assets/images/logo1.png') ?>" alt="logo" style="width:140px; height:27px; margin: 10px 0 0 110px;">
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
	                            <li><a id="topictest" href="<?= base_url('Test/topictest') ?>">TOPIC TEST</a></li>
	                            <li><a href="<?= base_url('Test/gktest') ?>">GK & ENGLISH</a></li>
	                            <li><a >DAILY TEST</a></li>
                        	</ul>
				 		</div>
				 		<?php $x = "location=yes,height=screen.height,width=screen.width,scrollbars=yes,status=yes"; ?>
				 		<div id="content-body">

				 			<div id="topic-test">

				 					<div class="topics">
				 						<p class="heading">Quantitative Ability</p>
				 						<div class="underline"></div>
				 						<ul class="topics-ul">
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=number_system') ?>','targetWindow','<?php echo $x; ?>');">Number System</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=hcf_lcm') ?>','targetWindow','<?php echo $x; ?>');">HCF & LCM</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=average') ?>','targetWindow','<?php echo $x; ?>');">Averages</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=ratio_proportion') ?>','targetWindow','<?php echo $x; ?>');">Ratio & Proportion</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=percentage_profit_loss') ?>','targetWindow','<?php echo $x; ?>');">Percentage, profit & Loss</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=simple_interest') ?>','targetWindow','<?php echo $x; ?>');">Simple Interest</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=simple_interest') ?>','targetWindow','<?php echo $x; ?>');">Compound Interest</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=speed_distance_time') ?>','targetWindow','<?php echo $x; ?>');">Speed, Time & Distance</a></li>
				 							
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=simplification') ?>','targetWindow','<?php echo $x; ?>');">Simplification</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=quantitative_ability&testid=mensuration') ?>','targetWindow','<?php echo $x; ?>');">Mensuration</a></li>
				 						</ul>
				 					</div>

				 					<div class="topics">
				 						<p class="heading">Logical Reasoning</p>
				 						<div class="underline"></div>
				 						<ul class="topics-ul">
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoningl&testid=direction_sence') ?>','targetWindow','<?php echo $x; ?>');" >Direction Sence</a></li>

				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=blood_relation') ?>','targetWindow','<?php echo $x; ?>');">Blood Relation</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=logical_venn_diagram') ?>','targetWindow','<?php echo $x; ?>');">Logical Venn Diagram</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=cube_dice') ?>','targetWindow','<?php echo $x; ?>');">Cube & Dice</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=puzzles') ?>','targetWindow','<?php echo $x; ?>');">Puzzles</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=number_letter_series') ?>','targetWindow','<?php echo $x; ?>');">Number & Letter Series</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=syllogism') ?>','targetWindow','<?php echo $x; ?>');">Syllogisn</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=coding_decoding') ?>','targetWindow','<?php echo $x; ?>');">Coading Decoding</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=input_output') ?>','targetWindow','<?php echo $x; ?>');">Input Output</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=logical_reasoning&testid=analytical_reasoning') ?>','targetWindow','<?php echo $x; ?>');">Analytical Reasoning</a></li>
				 						</ul>
				 					</div>

				 					<div class="topics">
				 						<p class="heading">Verbal Reasoning</p>
				 						<div class="underline"></div>
				 						<ul class="topics-ul">
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&topic=statement_conclusition') ?>','targetWindow','<?php echo $x; ?>');">Statement & Conclusition</a></li>

				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&testid=statement_assumption') ?>','targetWindow','<?php echo $x; ?>');">Statement & Assumption</a></li>

				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&testid=ststement_interface') ?>','targetWindow','<?php echo $x; ?>');">Statement & Interfaces</a></li>

				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&testid=cause_effect') ?>','targetWindow','<?php echo $x; ?>');">Cause & Effect</a></li>

				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&testid=couse_of_action') ?>','targetWindow','<?php echo $x; ?>');">Couse of Action</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&testid=critical_reasoning') ?>','targetWindow','<?php echo $x; ?>');">Critical Reasoning</a></li>

				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=verbal_reasoning&testid=statement_argument') ?>','targetWindow','<?php echo $x; ?>');">Statement & Arguments</a></li>
				 							
				 						</ul>
				 					</div>

				 					<div class="topics">
				 						<p class="heading">Computer Knowledge</p>
				 						<div class="underline"></div>
				 						<ul class="topics-ul">
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=computer_fundamentals') ?>','targetWindow','<?php echo $x; ?>');">Computer Fundamentals</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=microsoft_office') ?>','targetWindow','<?php echo $x; ?>');">Microsoft Office</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=hardware') ?>','targetWindow','<?php echo $x; ?>');">Hardware</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=software') ?>','targetWindow','<?php echo $x; ?>');">Software</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=operating_system') ?>','targetWindow','<?php echo $x; ?>');">Operating System</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=networking') ?>','targetWindow','<?php echo $x; ?>');">Networking</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=internet') ?>','targetWindow','<?php echo $x; ?>');"">Internet</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=memory') ?>','targetWindow','<?php echo $x; ?>');">Memory</a></li>
				 							<li><a onclick="window.open('<?= base_url('Topictest/inst?course=computer&testid=Keyboard_shortcuts') ?>','targetWindow','<?php echo $x; ?>');">Keyboard Shortcuts</a></li>
				 							
				 						</ul>
				 					</div>

				 			</div>
 
				 		</div>
				 	</div>
			 	</div>
			 </div>
			 <script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>
            <script type="text/javascript" src="<?php echo base_url('assets/js/nanobar.min.js') ?>"></script>

            <script type="text/javascript">
            	 window.onload = function() //for nanobar
                {
                  var simplebar = new Nanobar();
                    simplebar.go(100);

                }

            	document.getElementById('topictest').style.borderBottom = "3px solid #3ba3cc";
            </script>
		</body>
	</html>	 