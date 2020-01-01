<!DOCTYPE html>
<html>
	<head>
	<title>Dashboard</title>
	<?= link_tag( base_url('assets/css/user_dashboard.css')) ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
	</head>

	<body>
						<?php 
							$flag = 0;
							$id = $this->session->userdata('id');
							$name = $this->session->userdata('name'); 
							$email = $this->session->userdata('email');
							$phone = $this->session->userdata('phone');				
						?>
	
	<div id="main-container">

		<div id="header">
            <div id="logo_container">
            	<img src="<?= base_url('assets/images/logo1.png') ?> " alt="logo" style="width:200px; height:55px;" >
            </div>
            <div id="navbar">
                <ul id="nav">
                    <li><a href="Main">Home</a></li>
                    <li><a href="Login/Practice">Practice</a></li>
                    <li><a href="Contact">Contact</a></li>
                    <li><a href="Login/logout">Logout</a></li>
                </ul>
            </div>
		</div>
		<!-- <?php include('select_course.php'); ?> -->
		<div id="dummy_container">

			<div id="container">

				<div id="contents">

					<div id="content-body-courses-and-user-info">
						<!-- <div id="welcome-message-view">
							<p> </p>
						</div> -->
						<div id="user-courses-list">
							
							<div class="courses">
								<div id="mocktest" class="testhead">
									<p>MOCK TESTS</p>
								</div>
								<div class="test-details-text">
									<p class="test-detail-test-text">100+ Mock Tests Available For Different Exams</p>
									<p class="test-detail-test-text"><span>0</span> Test Attemped</p>
								</div>
								<a class="dashboard-tests-btn" href="Test/ibps_po">START</a>
							</div>
							<div class="courses">
								<div id="mocktest" class="testhead">
									<p>TOPIC TESTS</p>
								</div>
								<div class="test-details-text">
									<p class="test-detail-test-text">Topic wise tests Available From all Topics</p>
								</div>

								<a class="dashboard-tests-btn" href="Test/topictest">START</a>
							</div>
							<div class="courses">
								<div id="mocktest" class="testhead">
									<p class="test-detail-test-text">GK & Computer TESTS</p>
								</div>
								<div class="test-details-text">
									<p class="test-detail-test-text" >Monthly GK Tests and Computer Tests</p>
									<p class="test-detail-test-text"><span>0</span> GK Test attemped <span id="sp">|</span> <span> 0 </span> Computer Tests Attemped</p>
								</div>
								<a class="dashboard-tests-btn" href="Test/gktest">START</a>
							</div>
	
						</div>
						
						<div id="user-info-container">

							<div id="user-info-user-icon">
							<i class="glyphicon glyphicon-user" style="font-size:37px; margin:30px 0 0px 15px; float:left; color:white; border: 1px solid cornflowerblue; width:65px; height: 65px; border-radius: 50px; padding:13px; background-color:cornflowerblue "></i>
							</div>
							<div id="user-info-details">
								<h4><?php echo $name ?></h4>
								<p><?php echo $email ?></p>
								<p><?php echo $phone ?></p>

							</div>

							<p style="float:right;"><?= anchor(base_url('dashboard/profile'),'View Profile') ?></p>
						</div>

					</div>

				</div>

				<div id="footer">

				</div>

			</div>

		</div>

	</div>
	
	</body>
</html>