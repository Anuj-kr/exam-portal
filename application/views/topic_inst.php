<!DOCTYPE html>
<html>
<head>
	<title>Instruction</title>
	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <?= link_tag(base_url('assets/css/instruction.css')); ?> 
	</head>
<body>

<div id="main-wrapper">

	<div id="navbar">
		<div id="logo">
			<img src="<?= base_url('assets/images/logo1.png')?>" alt="logo" style="height:60px;,width:150px; float: left;">
		</div>
		<?php

			$course = $_GET['course'];
			$testid = $_GET['testid'];

			// ***** to display topic name in navbar****
			$topics = explode("_",$course);
			if(sizeof($topics) == 3) {
				$topic_name = $topics[0]." ".$topics[1]." ".$topics[2];
			}
			if(sizeof($topics) == 2) {
				$topic_name = $topics[0]." ".$topics[1];
			}
			if(sizeof($topics) == 1) {
				$topic_name = $topics[0];
			}

		?>
		<div id="test-name">

			<h2 id="course-name"><?php echo $topic_name; ?></h2>
		</div>
	</div>

	<div id="container">

		<div id="instruction-content">

			<div id="instruction-content-wrapper">
				<h4>Read the following Instruction Carefully</h4>
				<h5>Total Number of Question : 25</h5>
				<h5>Total Time : 20 minutes</h5>

				<h5 style="text-decoration: underline; margin-top:4px;">General Instructions</h5>
				
				<p>1. This is time based test and would be automatically submitted when the time is over.</p>
				<p>2. All questions have equal marks. </p>
				<p>3. There is <b>Negative marking</b>  of 1/4. that is 0.25 marks will be deducted for every wrong answer.</p>
				<h5 style="margin:5px 0  7px 0; text-decoration: underline;">Answering Questions</h5>
				<p>1. To select your answer, click on the option.</p>
				<p>2. You must <b>Save</b> your answer by clicking on <b>Save button </b> before moving to next.</p>
				<p>3. To change your answer, Click on the desire option and <b>Save</b> your ans again by clicking on <b>Save button.</b></p>
				<p>4. You can chane your answer as many times you want.</p>

				<h4 style="margin-top: 50px;"><a id="start-test-button" href="<?= base_url('Topictest?course='.$course.'&testid='.$testid) ;?>" >START TEST</a></h4>
			</div>

		</div>

	</div>
</div>

 
</body>

</html>