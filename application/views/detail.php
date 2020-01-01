<!DOCTYPE html>
<html>
	<head>
	<title>Fill up your detail</title>
     <script src="<?= base_url('assets/javascript/login_signup.js') ?>"> </script>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style >
	
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }
            #main-container{
                width:100%;
                height:650px;
                border: 2px solid green;
            }
            #header{
                width:100%;
                height:55px;
                border:1px solid  black;
            }
            #user-info-select-modal{
                width: 65%;
                height:500px;
                margin: auto;
                border:1px solid yellow;
                padding-top:25px;

            }


            #user-details-user-info{
                width:65%;
                height: 90%;
                border:1px solid green;
               /* border-right:1px solid cornflowerblue;
                border-right-style: dotted;*/
                /*float: left;*/
                
                margin:0px auto;
            }
            .user-info-label{
                width:100px;
                height: 35px;
                color: darkslategray;
                float:left;
                font-family: calibri;
                font-size: 18px;
                /*border: 1px solid gray;*/
            }
            .user-info-text{
                width:72%;
                height:35px;
                border: 1px solid lightgray;
                margin-bottom: 20px;
                padding: 5px 10px 5px 15px;
                font-family: sans-serif;
                font-size: 14px;
                border-radius: 3px;
                
            }

            

            /*Next button */
            .next {
              display: inline-block;
              border-radius: 4px;
              background-color: cornflowerblue;
              border: none;
              color: white;
              text-align: center;
              font-size: 16px;
              padding: 10px;
              width: 120px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
              float: right;
            }

            .next span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }

            .next span:after {
              content: '\00bb';
              position: absolute;
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }

            .next:hover span {
              padding-right: 25px;
            }

            .next:hover span:after {
              opacity: 1;
              right: 0;
            }            

	</style>



	</head>
		<body>
        <div id="main-container">

            <div id="header">
            </div>

			<div id="user-info-select-modal">

                <div id="user-details-user-info">
                    <p style="text-align: center; font-family:calibri; font-size: 20px;color:darkslategray; padding-bottom: 15px;">Fill up your details</p>
                    <form id="courseForm" role="form"  href="#" method="post" >

                    <label class="user-info-label">Name</label>
                    <input type="text" class="user-info-text" name="name" value="<?php echo $this->session->userdata('name'); ?>" disabled><br>

                    <label class="user-info-label">Email</label>
                    <input type="text" class="user-info-text" name="email" value="<?php echo $this->session->userdata('email'); ?>" disabled><br>

                    <label class="user-info-label">Phone</label>
                    <input type="text" class="user-info-text" name="phone" value="<?php echo $this->session->userdata('phone'); ?>" disabled><br>

                    <label class="user-info-label">Address</label>
                    <input type="text" class="user-info-text" name="address" placeholder="Address"><br>

                    <label class="user-info-label">District</label>
                    <input type="text" class="user-info-text" name="dist" placeholder="District"><br>

                    <label class="user-info-label">State</label>
                    <input type="text" class="user-info-text" name="state" placeholder="state"><br>
                    <input class="next" type="submit" value="Next" onclick="coursedisplay()">

                    </form>
                </div>
               
            </div>
            
        </div>
        
        
		</body>
        <script src="<?= base_url('assets/javascript/login_signup.js') ?>"> </script>

    </html>