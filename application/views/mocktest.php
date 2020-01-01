<!DOCTYPE html>
	<html>
		<head>
			<title>Tests | TestYourSelf</title>
			<?= link_tag(base_url('assets/css/tests.css')) ?>
			<!-- <script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script> -->
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
             <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		</head>
		<body>
			 <div id="main-container">

			 	<div id="header">

			 		<div id="main-header">
			 			<img src="<?= base_url('assets/images/logo1.png') ?>" alt="logo" style="width:140px; height:27px; margin: 10px 0 0 110px;">
			 			<div id="user-name-logout">
			 				<!-- display user name -->
			 				<p style="padding-right: 10px; font-size: 16px;letter-spacing: 1px;"><?php
			 					$u_name = $this->session->userdata('name');
			 					$u_name = explode(" ", $u_name);
			 					print_r($u_name[0]); 
			 				?></p> 
			 				<!--  -->
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
	                            <li><a id="mocktest" href="<?= base_url("Test/mocktest?id=ibps_po") ?>">MOCK TEST</a></li>
	                            <li><a id="topictest"href="<?= base_url('Test/topictest') ?>">TOPIC TEST</a></li>
	                            <li><a href="<?= base_url('Test/gktest') ?>">GK & ENGLISH</a></li>
	                            <li><a >DAILY TEST</a></li>
                        	</ul>
				 		</div>

				 		<div id="content-body">

				 			<div id="mock-test" class="mocktest">

				 				<div id="mocktest-sub-container">
				 					<h4 style="font-family: sans-serif; font-size: 16px; color:darkslategray;padding: 25px 0 15px 25px">Select Course</h4>
					 				<ul>
					 					<li ><a id="ibps_po" style="border-top:1px solid #ddd;" href="<?= base_url("Test/mocktest?id=ibps_po") ?>">IBPS PO</a></li>
					 					<li><a id="ibps_so" href="<?= base_url("Test/mocktest?id=ibps_so") ?>">IBPS SO</a></li>
					 					<li><a id="ibps_clerk" href="<?= base_url("Test/mocktest?id=ibps_clerk") ?>">IBPS Clerk</a></li>
					 					<li><a id="sbi_po" href="<?= base_url("Test/mocktest?id=sbi_po") ?>">SBI PO</a></li>
					 					<li><a id="sbi_clerk" href="<?= base_url("Test/mocktest?id=sbi_clerk") ?>">SBI Clerk</a></li>
					 					<li><a id="ssc" href="<?= base_url("Test/mocktest?id=ssc") ?>">SSC</a></li>
					 					<li><a id="rbi_officer" href="<?= base_url("Test/mocktest?id=rbi_officer") ?>">RBI OFFICER</a></li>
					 					<li><a id="rbi_assistant" href="<?= base_url("Test/mocktest?id=rbi_assistant") ?>">RBI ASSISTANT</a></li>
					 				</ul>
				 				</div>
				 				<div id="mocktest-container-main">
				 					
				 					<div class="mocktest-container" id="ibps_p" style="display: block;">
						 					<ul>
						 					
						 					<?php
						 						$x = 0;
						 					 	foreach($testid as $tests): 
						 					 		$x = $x + 1;
						 					 		if($x == 10)
						 								$id = $tests->test_type.$x;
						 							else
						 								$id = $tests->test_type."0".$x;
						 					?>
						 					<li>
						 						<a  onclick="window.open('<?= base_url($tests->link) ?>','targetWindow','location=yes,height=screen.height,width=screen.width,scrollbars=yes,status=yes');" style="float: left;">
						 							<i id="<?php echo $id."x"; ?>" class="fa fa-spinner fa-spin" style="margin-right: 10px;float:left; color:#3ba3cc;"></i><i id="<?php echo $id; ?>" class="fa fa-check-square-o" style="margin-right: 10px;float:left;color:#3ba3cc; display:none; font-size: 18px;"></i><?= $tests->test_id; ?><button class="try-again" id="<?php echo $id."ty"; ?>">Try Again</button><button class="resume-test" id="<?php echo $id."res"; ?>">Resume Test</button>
						 						</a>
						 					</li>				 	
						 						
						 					<?php endforeach; ?>	
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
            <script type="text/javascript" src="<?php echo base_url('assets/js/nanobar.min.js') ?>"></script>
            
            <?php  
            	$course = $_GET['id'];	//to get id of course 
            	$current_user = $this->session->userdata('email');
            	// foreach ($test_given as $stat) {
            		// print_r($test_given);
            	// }
            	if($test_given !="")
            	{
            		$stat = $test_given['arr2'];
            		$test_given = $test_given['arr1'];
            	}
            	// print_r($stat);
            	$counter = 0;

            ?>

            <script type="text/javascript">

            	// ******course list******
            	window.onload = function()
				{
					//************nano bar********
					var simplebar = new Nanobar();
                    simplebar.go(100);
                    //************nano bar********

					var div = "<?php echo $course ?>";
					document.getElementById(div).style.backgroundColor="#3ba3cc";
					document.getElementById(div).style.color="white";


				}

				//************************************
				
				var x = 0;
				var courses = "<?php echo $course;?>";
				var tests_id = "";
				var user = "<?php echo $current_user; ?>"
				// alert(topic);
				document.getElementById('mocktest').style.borderBottom = "3px solid #3ba3cc";

				function test()
				{	
					// setTimeout( function() {
					x = x + 1;
					if(x < 10)
						tests_id =courses+"0"+x;
					else
						tests_id = courses+x; 

					// console.log("tests_id = "+tests_id);
					var p = tests_id ;
					var p1 = tests_id +"x";
					var try_again = tests_id+"ty";
					var resume_test = tests_id+"res";

					$.ajax({
						type:"POST",
						dataType:"text",
						url:"<?php echo base_url();?>"+"DoTest/check_test_status",
						data:{
							'user_id':user,
							'test_id':tests_id
						},
						success:function(y) {
							// console.log(y);
							if(y == "1") 
            				{
            					// console.log(p);
            					document.getElementById(p).style.display = "block";	//for check icon
            					document.getElementById(p1).style.display = "none";	//for spin icon
            					document.getElementById(try_again).style.display = "block"; //for try again message

            				}
            				if(y == "0") {
            					document.getElementById(resume_test).style.display = "block";
            				}
						}
					});	
				// },1000);
				}

				var i = 0;
				for(i = 0;i<10; i++)  //callig a function 10 times to fetch test status
				{
					test();
					// console.log("setTimeout = " + i);
				}
            	

            </script>

		</body>
	</html>	 