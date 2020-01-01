<!DOCTYPE html>
<html>
<head>
	<title>Instruction</title>
	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 <?= link_tag(base_url('assets/css/instruction.css')); ?> 
	</head>
<body>

<?php 
	$test = $this->uri->segment(1);
	$id = $_GET['testid'];
	$course = $_GET['course']
 ?>

<div id="main-wrapper">

	<div id="navbar">
		<div id="logo">
			<img src="<?= base_url('assets/images/logo1.png')?>" alt="logo" style="height:27px;,width:140px; float: left; margin-top: 12px;">
		</div>
		<div id="test-name">
			<h2 id="course-name"><?php echo $course." - ".$id; ?></h2>
		</div>
	</div>

	<div id="container">

		<div id="instruction-content">

			<div id="instruction-content-wrapper">
				<h4>Read the following Instruction Carefully</h4>
				<h5>Total Number of Question : 100</h5>
				<h5>Total Time : 80 minutes(1 hour 20 minutes)</h5>

				<div id="question-details">
					<ul id="sl-no">
						<li><a>Section</a></li>
						<li><a>1</a></li>
						<li><a>1</a></li>
						<li><a>1</a></li>
						<li><a>1</a></li>
					</ul>
					<ul id="name">
						<li><a>Section Name</a></li>
						<li><a>nams</a></li>
						<li><a>name</a></li>
						<li><a>name</a></li>
						<li><a>name</a></li>
					</ul>
					<ul id="total-question">
						<li><a>Total no of Question</a></li>
						<li><a>30</a></li>
						<li><a>30</a></li>
						<li><a>30</a></li>
						<li><a>30</a></li>

					</ul>
					<ul id="total-marks">
						<li><a>Total Marks</a></li>
						<li><a>30</a></li>
						<li><a>30</a></li>
						<li><a>30</a></li>
						<li><a>30</a></li>
					</ul>
				</div>

				<h5 style="text-decoration: underline; margin-top:4px;">General Instructions</h5>
				<p>1. Total of 1 hour and 20 minute duration will be given to attempt all questions.</p>
				<p>2. This is time based test and would be automatically submitted when the time is over.</p>
				<p>3. All questions have equal marks. </p>
				<p>4. There is <b>Negative marking</b>  of 1/4. that is 0.25 marks will be deducted for every wrong answer.</p>
				<h5 style="margin:5px 0  7px 0; text-decoration: underline;">Answering Questions</h5>
				<p>1. To select your answer, click on the option.</p>
				<p>2. You must <b>Save</b> your answer by clicking on <b>Save button </b> before moving to next.</p>
				<p>3. To change your answer, Click on the desire option and <b>Save</b> your ans again by clicking on <b>Save button.</b></p>
				<p>4. You can chane your answer as many times you want.</p>

				<h4 style="margin-top: 50px;"><a id="start-test-button" href="<?= base_url($test.'/'.'mocktest'.'?'.'course='.$course.'&'.'testid='.$id) ;?>" >START TEST</a></h4>
			</div>

		</div>

	</div>
</div>







</body>


<?php
	
	$course = $_GET['course'];
	$id = $_GET['testid'];

	$test_id = $course.$id;
	$user = $this->session->userdata('email');
	// print_r($test_id);

?>


</html>


<script type="text/javascript">

	var test_id = "<?php echo $test_id; ?>";
	var user = "<?php echo $user; ?>";

	

</script>