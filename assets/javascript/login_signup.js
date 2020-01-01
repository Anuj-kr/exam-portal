var modal = document.getElementById('myModal');

var loginmodal = document.getElementById('myMod');           
                
var spanclose = document.getElementsByClassName("close")[0];

var closelogin = document.getElementsByClassName("closeLogin")[0];

//topic test
var ibps_po = document.getElementById('ibps_po');
var ibps_so = document.getElementById('topic-test');
var ibps_clerk = document.getElementById('topic-test');
var sbi_po = document.getElementById('topic-test');
var sbi_clerk = document.getElementById('topic-test');
var ssc = document.getElementById('topic-test');
var rbi_officer = document.getElementById('topic-test');
var rbi_assistant = document.getElementById('topic-test');


//gkeng test

var gk_eng = document.getElementById('gktest-englishtest');

function logindisp()
{
    loginmodal.style.display = "block";
    modal.style.display = "none";
}
closelogin.onclick = function()
{
loginmodal.style.display = "none";
}

function disp(){
	modal.style.display = "block";
	loginmodal.style.display = "none";
}
 spanclose.onclick = function()
{
modal.style.display = "none";
}

// form validation

function SignupValidate()
{

	var name=document.getElementById('names');
	var email=document.getElementById('emails');
	var password=document.getElementById('passwords');
	var phone=document.getElementById('phones');

	
}


//test page 


