<?php
 session_start();
 $u_id=$_SESSION['u_id'];
$conn=mysqli_connect("localhost","root","","quizbuzz");
if(!$conn)
{
echo "Failed to connect to MySQL.........";
}

?>

<html>
<head>
<title>quizbuzz</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
$(document).ready(function(){
	
	$(".my").hide();
		$(".my").slideDown(1500);
		
});

</script>


<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

<!--Import Google Icon Font-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  
	   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

	  
<style type="text/css">

body{
	
	
<!-- background-image:url("a1.jpg"); -->
background-color:#3C4C55;
background-repeat:no-repeat;
 
	}
	.my{
		background-color:#3C4C55;
		width:100%;
		height:100%;
	}
	.header
	{
		height:80px;
	}

#profile
	{
		width:50%;
	position:fixed;
	
	}
.image
	{   
  display: block;
  width: 250px;
  height: 250px;
  margin: 1em auto;
  background-size: cover;
  background-repeat: no-repeat;
  margin-top:50px;
  margin-left:150px;
  -webkit-border-radius: 99em;
  -moz-border-radius: 99em;
  border-radius: 99em;
  box-shadow: 0 3px 2px rgba(0, 0, 0, 1.8);  
	}
	
	
	.image:hover
	{
		opacity:100%;
		-moz-box-shadow: 0 0 10px lighblue;
		-webkit-box-shadow: 0 0 10px lighblue;
		box-shadow: 0 0 10px #ccc;
	}
	
	
	
.image:hover ,
.image.focus
{
    border-color:lighblue;
    background-color: #4CAF50;
    color: white;
	
}


.div1
{
	border-radius:12px;
    opacity:60%;
	background-color:;
	padding:20px;
	align:center;
	margin-left:60px;
	margin-top:80px;
	width:600px;
	height:500px;
	<!--border: 0px solid black; -->
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.8);    
	
}	
#header1{
	background-color:white;
	border-bottom:2px solid black;
	}


.form2
{
	border-radius:12px;
    opacity:60%;
	background-color:white;
	padding:20px;
	align:center;
	margin-left:10px;
	margin-top:80px;
	width:600px;
	height:500px;
	border: 0px solid black;
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.8);    
	
}


.input-field input[type=text]{
     font-size:16px;
	 color: black;
   }
   
   
.input-field input[type=email]{
     font-size:16px;
	 color: black;
   }
   
 .input-field label{
	 font-size:14px;
 }
 
 .input-field input[type=text]:focus + label {
     font-size:15px;
	 color:black;
   }

   
 .input-field input[type=email]:focus + label {
     font-size:15px;
	 color: black;
   }
   
   .pad{
	   padding:25px;
	   
   }

   .submit{
	padding: 12px 32px;
    margin-left:200px;
       
   }
   .rig
   {
	   margin-left:0px;
   }
   .lef{
	   margin-right:0px;
   }
</style>

</head>
<body>
 
<!----------------------------------------------------------------------->

<nav class="navbar  navbar-fixed-top" role="navigation">
		<div class="container-fluid" id="header1">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
								<p class="mmp" style="color:black; font-size:35px; padding:20px; " >QuizBuzz</p>

			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav navbar-right">
					
					<li class="mmp" >
                        <a href="home4.php" style="color:#337ab7;font-size:100%;"><i class="fa fa-home"></i> &nbsp;Home</a>
					</li>
					
					<li class="mmp" >
						<a href="topics.php" style="color:#337ab7;font-size:100%;"> <i class="fa fa-align-justify"></i>&nbsp;Topics</a>
					</li>
                    					
                    
					<li class="mmp" >
                        <a href="account1.php" style="color:#337ab7;font-size:100%;"> <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;  Account</a>
                    </li>
					
					
					<li class="mmp" >
                        <a href="aboutus.php" style="color:#337ab7;font-size:100%;"> <i class="fa fa-user"></i>&nbsp;  About Us</a>
                    </li>
					
					
					
					
					
					
<?php 
$u_id=$_SESSION['u_id'];
$query="select * from user_login where id='$u_id'";
$q1=mysqli_query($conn,$query);
$result=mysqli_fetch_array($q1);
$user=$result['username'];

?>

					
					
					
					<li>
                        <a href="logout.php" style="color:#337ab7;font-size:100%;"> <i class="fa fa-user"></i>&nbsp;  <?php echo $user ;?></a>
                    </li>
					
					</div>
					</div></nav></br></br></br></br>

<!----------------------------------------------------------------------->

<div class="my">
<div class="row"> 
<div class="col-lg-12">Edit Your Profile</div>
</div>
<?php
/* include("nav.php"); */
$query="select * from user_info where u_id='$u_id'";
    //if($u_id)
	//echo"<script>alert('$u_id')</script>";
$q1=mysqli_query($conn,$query);
$result=mysqli_fetch_array($q1);
$fname=$result['fname'];
$lname=$result['lname'];
$profile_pic=$result['profile_pic'];
?>
<div class="row">
<div class="col-lg-6">
<div class="div1">

<div class="row">
<div class="col-lg-12">
<h3 style="text-align:center;color:white;">click on image to change the profile pic</h3>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<img id="fileup" class="image"  src="<?php echo $profile_pic ;?>" width="55%" height="400px" alt="upload a profile photo" />
</div>
</div>

<form class="form1" enctype="multipart/form-data" action="upload.php" method="post">

<div class="row lef">
<div class="col-lg-12">
<input type="file"  id="profilepic" name="profilepic" style="display:none" required />
</div>
</div>

<script>
$('#fileup').click(function() {
   $('#profilepic').click();
});
</script>

<div class="row">
<div class="col-lg-12">
<div class="submit">
<input type="submit" class="btn waves-effect waves-light" value="upload" name="upload"  onclick="this.upload()"/>
</div>
</div>
</div>

</form>
</div>
</div>

<div class="col-lg-6 rig">
<div class="form2">
<form class="col-lg-12" action="account1.php" method="POST" >
      <div class="row">

	      <div class="input-field col-lg-12">
          <input id="first_name" type="text" name="first_name" class="validate">
          <label for="first_name">First Name</label>
          </div>
      </div>
	  
	  <div class="row">
	      <div class="input-field col-lg-12">
          <input id="last_name" type="text" name="last_name" class="validate">
          <label for="last_name">Last Name</label>
          </div>
	  </div>
      
	  
	  <div class="row">
          
		  <div class="input-field col-lg-12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
          </div>
		  
      </div>
	  
      
	  <div class="row">
	  <div class="pad">
	  <input type="submit" class="btn waves-effect waves-light" name="submit" >
    
  </div>
  </div>
	  
	  
    </form>
  </div>
        

</div>

</div>
</div>


<?php
if(isset($_POST['submit']))
{
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email']; 


	
$q1=mysqli_query($conn,"select username from user_login where username='$username' ");
	if(mysqli_num_rows($q1)!=0)
	{
		
		echo "<script>alert('username already exist...')</script>";
        echo "<script>window.open('account1.php','_self')</script>";
        exit();
	}


$q2=mysqli_query($conn,"update user_info set `fname`='$fname', `lname`='$lname',`email`='$email' where u_id='$u_id' ") ;

if($q1 & $q2)
{
echo "<script>alert(' $u_id /  Account updated Successfully!')
window.location.assign('http://localhost/quizbuzz/quiz/home4.php')
</script>";	
}

}	



?>

</body>
</html>


