<DOCTYPE html>
    <html>
        <head>
            <title>NavBar</title>
            <?= link_tag(base_url('assets/css/question_page.css')) ?>
            <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
            <meta name="viewport" content="width=device-width initial-scale=1">
        
        </head>
    <body>
        <div id="header">
            <div id="logo"></div>
<!--                <img src="lll.png"/>-->
            <ul id="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">Course</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">SignUp</a></li>
            </ul>
        
        </div>
        <div id="side" >
        <div id="side_inside">
            <!-- <div id="back"><img src='<?php echo site_url("/assets/images/search.png") ?>' alt="..."></div> -->
            <input  id="search" type="search" name="search" placeholder="Search"></div>
        </div> 
             
        <div id="longside">
            
            <div id="Q_no"> <button class="btn-default">1</button>
                <button class="btn-default">2</button>
                <button class="btn-default">3</button>
                <button class="btn-default">4</button>
                <button class="btn-default">5</button>
                <button class="btn-default">6</button>
                <button class="btn-default">7</button>
                <button class="btn-default">8</button>
                <button class="btn-default">9</button>
                <button class="btn-default">10</button>
                <button class="btn-default">11</button>
                <button class="btn-default">12</button>
                <button class="btn-default">13</button>
                <button class="btn-default">14</button>
                <button class="btn-default">15</button>
                <button class="btn-default">16</button>
                <button class="btn-default">17</button>
                <button class="btn-default">18</button>
                <button class="btn-default">19</button>
                <button class="btn-default">20</button>
            </div>
            <?php 
                $abc="kjsdfkj sdfkjhsfd sdfkjhdsf sdfkjhsf slkjsdf  sdlfkjsdfkjsdf sdfkjsdflkjj sdfkjhidsf sdfjsdfnmbdsf sdkfsdf sdfkusdf sd,mfsdkfm dsfkjsdf"
            ?>
            <div id="ques_box">
                <div id="topic_name">1 of 20 | Topic</div>
                <div id="question" ><?php print_r($abc); ?></div>
            </div>
            
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
                <div id="opt1"></div>
            
        </div>
        <div id="footer1">sjkhks | ksdjfhk | dkjfjk</div>
        <div id="footer2">
            <div id="pre">Previous</div>
            <div id="next">Next</div>
        </div>
        </body>
        
        
    </html>