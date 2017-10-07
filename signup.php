<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
	
	$(".my").hide();
		$(".my").slideDown(1500);
		
});

function validForm() {

var x = document.forms["signup"]["firstname"].value;
var y = document.forms["signup"]["lastname"].value;

var z = document.forms["signup"]["email_id"].value;
var x1 = document.forms["signup"]["username"].value;

var x2 = document.forms["signup"]["password"].value;


if (x==null || x==""||y==null||y==""||z==null || z==""||x1==null || x1==""||x2==null || x2=="")
	{
alert("Details must be filled out");
return false;
}
else
{
window.confirm("Are you sure you want to submit?");

}



}

function validEmail()
{

var y = document.forms["signup"]["email_id"].value;
var atpos = y.indexOf("@");
var dotpos = y.lastIndexOf(".");

if(atpos<1||dotpos<(atpos+2)||(dotpos+2)>=y.length){
alert("Not a valid E-mail address");
return false;
}

}


</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>The Signup form</title>
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style >  
.adsense_fixed
{
position:fixed;
bottom:-8px; width:100%;
z-index:999999999999;
}
.adsense_content
{
width:720px; margin:0 auto;
position:relative; background:#fff;}
.adsense_btn_close,.adsense_btn_info
{
font-size:12px; color:#fff;
height:20px; width:20px;
vertical-align:middle;
text-align:center;
background:#000; top:4px; left:4px;
position:absolute;
z-index:99999999;
font-family:Georgia;
cursor:pointer;
line-height:18px
}
.adsense_btn_info
{
left:26px;
font-family:Georgia;
font-style:italic
}
.adsense_info_content
{
display:none;
width:260px;
height:340px;
position:absolute;
top:-360px;
background:rgba(255,255,255,.9);
font-size:14px;
padding:20px;
font-family:Arial;
border-radius:4px;
-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);
-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);
box-shadow:0 1px 26px -2px rgba(0,0,0,.3)
}
.adsense_info_content:after
{
content:'';
position:absolute;
left:25px;top:100%;
width:0; height:0;
border-left:10px solid transparent;
border-right:10px solid transparent;
border-top:10px solid #fff;
clear:both
}
.adsense_info_content #adsense_h3
{
color:#000; margin:0;
font-size:18px!important;
font-family:'Arial'!important;
margin-bottom:20px!important;
}
.adsense_info_content .adsense_p
{
color:#888; font-size:13px!important;
line-height:20px;
font-family:'Arial'!important;
margin-bottom:20px!important;
}
.adsense_fh5co-team
{
color:#000;
font-style:italic;
}
</style>

</head>
<body >

<div class="main" >
	<div class="social-icons" >
		 <div class="col_1_of_1 span_1_of_1">
		    <ul class="twitter" >
		      <li >Create Your Account By Filling The Info Down Below</li>
		      <div class="clear"> </div>
		    </ul>
		</div>
		<div class="clear"> </div>	
      </div>
	  <script>
function mm(x)
{
document.getElementById(x).style.color="#000";
document.getElementById(x).value="";

}
</script>
<div class="my">
		<form name="signup" onsubmit="validForm();return validEmail()" action="signup.php" method="POST"  >
		   <div class="lable">
		        <div class="col_1_of_2 span_1_of_2">
				<input type="text" id="firstname" name="firstname" class="text" placeholder="First Name" onclick="mm(this.id)"  onblur="if (this.value == &#39;&#39;){this.value = &#39;First Name&#39;;}" id="active">
				</div>
                <div class="col_1_of_2 span_1_of_2">
				<input type="text" id="lastname" name="lastname" class="text" placeholder="Last Name" onfocus="mm(this.id)"
				onblur="if (this.value == &#39;&#39;) {this.value = &#39;Last Name&#39;;}"></div>
                <div class="clear"> </div>
		   </div>
		   <div class="lable-2">
		   
		        <input type="text" name="email_id" id="email_id" class="text" placeholder="your@email.com " onfocus="mm(this.id)"  onblur="if (this.value == &#39;&#39;) {this.value = &#39;your@email.com &#39;;}">
               <input type="text" id="username" name="username" class="text" placeholder="Username" onfocus="mm(this.id)" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Username &#39;;}">		   
       		   <input type="password" id="password" name="password" class="text" placeholder="Password " onfocus="mm(this.id)" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Password &#39;;}">
		   </div>
		   <h3>By creating an account, you agree to our <span class="term"><a>Terms &amp; Conditions</a></span></h3>
		   <div class="submit">
			  <input type="submit" id="submit"onclick="myFunction()" value="Create account" name="submit">
		   </div>
		   <div class="clear"> </div>
		</form>
		</div>
		</div>
   		<div class="copy-right">
			<p> © 2014 quizbuzz. All rights reserved | Created by <a href="index.html">QuizBuzz</a></p>
		</div>
		<?php
if(isset($_POST['submit']))//$_SERVER['REQUEST_METHOD']=="POST")
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email_id'];
$username=$_POST['username']; 
$password=$_POST['password'];
	$conn=mysqli_connect("localhost","root","","quizbuzz")
	or die("failed to connect...");
	
$q1=mysqli_query($conn,"select username from user_login where username='$username' ");
	if(mysqli_num_rows($q1)!=0)
	{
		
		echo "<script>alert('username already exist...')</script>";
        echo "<script>window.open('signup.php','_self')</script>";
        exit();
	}

$q2=mysqli_query($conn,"insert into user_login (username,password) values('$username','$password')")or die("sads") ;

$q=mysqli_query($conn,"select id from user_login where username='$username'");
$d=mysqli_fetch_array($q);
$id=$d['id'];
$q3=mysqli_query($conn,"insert into user_info(u_id,fname,lname,email) values('$id' ,'$fname','$lname','$email')")or die("xd");
$_SESSION['u_id']=$id;
$_SESSION['username']=$username;
echo "<script>
window.location.assign('http://localhost/quizbuzz/quiz/home4.php');
</script>";
}

?>

</body></html>