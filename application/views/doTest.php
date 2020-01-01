<!DOCTYPE html>
	<html>
		<head>
			<title> TestYourSelf</title>
			<?= link_tag(base_url('assets/css/doTest.css')) ?>
			<!-- <script src="<?= base_url('assets/javascript/login_signup.js') ?>">   -->
			 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            
            <!-- for icons -->
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>

		<body>
			<div id="main-container">
				<div id="nav">
					<?php 
						echo $session_time;
						$session_time = explode(":", $session_time);
						$hour = $session_time[0];
						$mint = $session_time[1];
						$secnd = $session_time[2];
						$course = $_GET['course'];
						$test_id = $_GET['testid'];
					?>
						<img src="<?= base_url('assets/images/logo1.png') ?> " alt="logo" style="width:140px; height:27px; margin:10px 0 0 50px;float:left;" >
						<a id="submit-btn" href="<?= base_url('DoTest/endtest?course='.$course.'&testid='.$test_id);?>">SUBMIT</a>
						<!-- <button id="submit-btn"><?= anchor ( base_url("DoTest/endtest/{$course}/{$test_id}"), 'Submit'); ?></button> -->

						<p id="username"><?php echo $this->session->userdata('name'); ?></p>
				</div>
				<div id="test-details-timer">
				</div>
				<div id="content-container">

					<div id="question-box">
						<div id="question-list">
							<ul><?php  $count = 0; ?>
								<?php foreach($ques_list as $ques): 
								$count = $count + 1 ?>
									<li onclick="next_prev(<?= $ques->Q_no ?>,0)"><p><?= "(". $ques->Q_no.") ". $ques->question; ?></p></li>
								<?php endforeach; ?>
							</ul>
						</div>

						<div id="question-box-main">
							<?php 

								$str = $_GET['course'];
								$str1 = $str." ".$_GET['testid'];
								$str2 = $_GET['testid'];
							?>
						<div id="test-details">
							<div id="test-id">
								<h3 ><?php
									if($this->uri->segment(1) =="DoTest"){
										echo $this->uri->segment(2);}
									else{
										echo $str; 
									}
								?></h3>
								<h5 id="id">Test ID : <span><?php
									if($this->uri->segment(1) =="DoTest") 
										echo $str1;
									else
										echo $str2;
								?></span></h5>
							</div>

							<div id="timer">
								<h3 id="js_timer"><i class="fa fa-clock-o" style="margin-right: 10px; color: lightgray;"></i><span id="hour">00</span>:<span id="min">00</span>:<span id="sec">00</span></h3>
							</div>

							</div>

							<div id="questionsections">
								<div class="btn-group">
									<button id="apt" onclick="question_fetch('apptitude');" style="background-color: cornflowerblue" >Apptitude</button>
									<button id="res" onclick="next_prev(21,0);">Reasoning</button>
									<button id="eng" onclick="next_prev(41,0);">English</button>
									<button id="ca" onclick="next_prev(61,0);">Current Affairs</button>
									<button id="com" onclick="next_prev(81,0);">Computer</button>
								</div>

							</div>

							<div id="question-box-body">
							<?php foreach($questions as $q):  ?>
								<h5 id="qqqq">Question <span id="Q_no"><?= $x = $q->Q_no; ?> </span>&nbsp;out of <?php echo $count; ?></h5>
								
								<p id="question"><?= $q->question; ?></p>
								<ul>
									<input id="ropt1" type="radio" name="opt" value="<?= $q->opt1; ?>" unchecked><a id="opt1"><?= $q->opt1; ?></a><br>
									<input id="ropt2" type="radio" name="opt" value="<?= $q->opt2; ?>" unchecked><a id="opt2"><?= $q->opt2; ?></a><br>
									<input id="ropt3" type="radio" name="opt" value="<?= $q->opt3; ?>" unchecked><a id="opt3"><?= $q->opt3; ?></a><br>
									<input id="ropt4" type="radio" name="opt" value="<?= $q->opt4; ?>" unchecked><a id="opt4"><?= $q->opt4; ?></a><br>
									<input id="ropt5" type="radio" name="opt" value="<?= $q->opt5; ?>" unchecked><a id="opt5"><?= $q->opt5; ?></a><br>
								</ul>
							<?php endforeach; ?>
							<div id="save_ans_div">
								<h4 id="save_ans">Don't forget to save your answer</h4>
							</div>
							</div>
							<div id="all-buttons">
								<div id="button">
									<button type="button" id="btnprev" class="btnn" onclick="next_prev(-1,1)";><i id="button-icons-prev" class="fa fa-chevron-circle-left"></i>Prev</button>
									<button type="button" id="cnf" class="btnn" onclick="confirm_ans()"; ><i id="button-icons-lock" class="fa fa-lock"></i>Save</button>
									<button type="button" id="btnnext" class="btnn" onclick="next_prev(1,1);">Next<i id="button-icons-next" class="fa fa-chevron-circle-right"></i></button>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
			
		</body>
		<?php 

			$c = $_GET['course'];
			$id = $_GET['testid'];
			$test_id = $c.$id; //concat course and course id
			$u_id = $this->session->userdata('email');

			$test_type = $this->uri->segment(1); //for fetchin already submitted ans
			// echo $test_type;exit;
			if($test_type == "DoTest")
			{
				$test_type = "Mocktest_answers";
			}
			else
			{
				$test_type = "topictest_answers";
			}
			// $aaaa = "anuj-kumar-djfhk-aaaa-aaaa-wwww-www-qqqqqqqqq";
			// $z = explode("-", $aaaa);
			
		?>


		<script type="text/javascript">

			var temp = "<?php echo $this->uri->segment(1); ?>";
			if(temp == "DoTest")
			{
				$("#questionsections").css('display','block');
			}

			document.getElementById('cnf').disabled = 'disabled';
			document.getElementById('cnf').style.cursor = 'not-allowed';
			document.getElementById('cnf').style.opacity = 0.4;
			
			var count = "<?php echo $count; ?>";//to make  next button hide

			var course = "<?php echo $c; ?>";
			// alert(course);
			var id = "<?php echo $id; ?>";
			var test_id = "<?php echo $test_id; ?>";
			var u_id = "<?php echo $u_id; ?>";
			var test_type = "<?php echo $test_type; ?>";

			var q = 1;
			var i = 0;
			var j ="";
			var dataset = ["Q_no","question","opt1","opt2","opt3","opt4","opt5"];
			var rdataset = ["","","ropt1","ropt2","ropt3","ropt4","ropt5"];

			var check_radio = ["ropt1","ropt2","ropt3","ropt4","ropt5"]; //to make radio button checked
			document.getElementById('btnprev').style.visibility = "hidden";

			function next_prev(x,p) { // if x increase or decrease value of q_no.
			// document.getElementById('cnf').disabled = false;
			// document.getElementById('cnf').style.cursor = 'pointer';
			// document.getElementById('cnf').style.opacity = 1;
				// console.log("next");
					if(p == 0) { //p = 0 indecates that click event occurs from the ques_list
						q = p;
					}
					q = q + x;
					$.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>"+"DoTest",
					dataType:'json',
					data: {
	            		"course":course,
	            		"testid": id,
	            		"q_no" : q,
	            		"email":u_id,
	            		"ans_table":test_type //for fetching already saved ans
        			},
					success:function(d) 
					{
						// console.log("anuj");
						console.log(d.ans);
						var x = 0;
						var y = "";
						var temp = "";
					
						for (i = 0;i < 7; i++) {
							j = dataset[i];
											
						 	document.getElementById(j).innerHTML = d[j];
						 	if(i > 1) {
						 		k = rdataset[i];
						 		document.getElementById(k).value=d[j];
						 		document.getElementById(k).checked = false;
						 	}
						}

						document.getElementById("save_ans").innerHTML = "Don't forget to save your Answer";

						//*********to checked radio button**********
						for(x = 0;x < 5; x++)
						{
							y = check_radio[x];
							if(document.getElementById(y).value == d.ans) {
								document.getElementById(y).checked = true;
								document.getElementById("save_ans").innerHTML = "Answer Saved";
							}
							else {
								// 
							}
						}
						//*********to checked radio button**********

						if(q < 21) { 
							$("#apt").css('backgroundColor','cornflowerblue');
						}else if(q > 20 && q < 41) {
							$("#res").css('backgroundColor','cornflowerblue');
						}else if(q > 40 && q < 61) {
							$("#eng").css('backgroundColor','cornflowerblue');
						}else if(q > 60 && q < 81) {
							$("#ca").css('backgroundColor','cornflowerblue');
						}else {
							$("#com").css('backgroundColor','cornflowerblue');
						}
						
						var count = 100;
						if(test_type == "topictest_answers") {
							count = 25;
						}
						// alert(test_type);
						if(q == 1){
					 		document.getElementById('btnprev').style.visibility = "hidden";
						}
					 	else {
					 		document.getElementById('btnprev').style.visibility = "visible";
					 	}
					 	if(q == count ) {
					 	 	document.getElementById('btnnext').style.visibility = "hidden";
					 	}else {
					 		document.getElementById('btnnext').style.visibility = "visible";
					 	}
					 	
					}	

				});	
			}

			function confirm_ans() {
				
				// console.log(course);
				// console.log(id);
				// console.log(q);

				var z = document.querySelector('input[name="opt"]:checked').value;//get value of selected raddio btn
				// var Q_no = document.getElementById("Q_no").value; 
				// document.getElementById('cnf').disabled = 'disabled';
				// document.getElementById('cnf').style.cursor = 'not-allowed';
				// document.getElementById('cnf').style.opacity = 0.4;
				// alert(Q_no);
				// console.log(z);
				$.ajax({
					type:"POST",
					dataType:"text",
					url :"<?php echo base_url();?>" + "DoTest/save_answer",
					data:{
						"ans":z,
						"course":course,
	            		"testid": id,
	            		"Q_no":q,
	            		"test_type":test_type
	            		
					},
					success: function(x) {
						// alert(x);
						console.log(x);
						if(x == "true") {
							document.getElementById('cnf').disabled = 'disabled';
							document.getElementById('cnf').style.cursor = 'not-allowed';
							document.getElementById('cnf').style.opacity = 0.4;
							document.getElementById("save_ans").innerHTML = "Answer Saved";
						}
						else{
							alert(x);
						}

					}
				});
			}

		</script>


		<script> //for enable confirm button on checked event of radio buttons
		$('input[type="radio"]').on('click change', function(e) {
    		document.getElementById('cnf').disabled = false;
			document.getElementById('cnf').style.cursor = 'pointer';
			document.getElementById('cnf').style.opacity = 1;
		});
    		
		</script>

		<!-- timer -->
		<script type="text/javascript">
		var x = "<?php echo $secnd; ?>"; //second
		var y = "<?php echo $mint; ?>"	//minute
		var z = "<?php echo $hour; ?>"
		// var x = 00; //second
		// var y = 2;	//minute
		// var z = 1	//hour
		document.getElementById("hour").innerHTML = "0"+z;
		document.getElementById("min").innerHTML =  y;
		document.getElementById("sec").innerHTML =  x;
		var count = 0;
		function Sec()
		{
			count = count + 1;
			if(y == 0 && x == 0) {
				z = z -1;
				y = 60;
			}
			document.getElementById('hour').innerHTML = "0" +z;
			if( x == 0)
			{	
				y = y - 1;
				x = 60;
			}
			x = x-1;
			document.getElementById("min").innerHTML = "0" + y;
			if(x<10)
				document.getElementById("sec").innerHTML = "0"+x;
			else
				document.getElementById("sec").innerHTML = x;

			if(y < 10)
				document.getElementById("min").innerHTML = "0"+y;
			else
				document.getElementById('min').innerHTML = y;
			if(count == 5) {
				count = 0;
				save_time(z,y,x);
			}
		}
		setInterval(Sec,1000);

		function save_time(z,y,x) 
		{
			// alert("Hour = " +z +"minute = " +y +"Second = " + x);
			var session_time = z + ":" + y + ":" + x;
			$.ajax({
					type:"POST",
					dataType:"text",
					url :"<?php echo base_url();?>" + "DoTest/save_session_time",
					data:{
						"session_time":session_time,
	            		"user_id":u_id,
	            		"test_id":test_id
	            		
					},
					success: function(x) {
						// alert(x);
						console.log(x);
						if(x == "true") {
						}
						else{
							alert(x);
						}

					}
				});
		}
		// setInterval(save_time,10000);





		// ************************************************************************************************************
			function question_fetch(topic) {
				var table = "<?php echo $c ?>";
				// alert(test_id);
				// alert(topic);
				$.ajax({
					type:"POST",
					dataType:"text",
					url:"<?php echo base_url();?>"+"Test/fetch",
					data:{
						'table':table,
						'topic':topic
					},
					success: function(aa) {
						var a = JSON.parse(aa);
						// console.log(aa);
						
					}
				});
			}
		</script>
	</html>
