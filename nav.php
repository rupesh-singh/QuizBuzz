<?php
session_start(); 

$conn=mysqli_connect("localhost","root","","quizbuzz")
or die("failed to connect...");

if(!isset($_SESSION['u_id']))
{
	die("log in first");
}

?>

<html>
<head>


<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<style>
	#header1{
	background-color:white;
	border-bottom:2px solid black;
	}
	.container
	{
	
	}
	</style>
</head>

<body>

  <!-- Navigation -->
    <nav class="navbar  navbar-fixed-top" role="navigation">
		<div class="container-fluid" id="header1">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
								<p style="font-size:35px; padding:20px;" >QuizBuzz</p>

			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav navbar-right">
					
					<li>
                        <a href="home4.php" ><i class="fa fa-home"></i> &nbsp;Home</a>
					</li>
					
					<li>
						<a href="topics.php"> <i class="fa fa-align-justify"></i>&nbsp;Topics</a>
					</li>
                    					
                    
					<li>
                        <a href="account1.php"> <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;  Account</a>
                    </li>
					
					
					<li>
                        <a href="aboutus.php"> <i class="fa fa-user"></i>&nbsp;  About Us</a>
                    </li>
					
					
					
					
					
					
<?php 
$u_id=$_SESSION['u_id'];
$query="select * from user_login where id='$u_id'";
$q1=mysqli_query($conn,$query);
$result=mysqli_fetch_array($q1);
$user=$result['username'];

?>

					
					
					
					<li>
                        <a href="logout.php"> <i class="fa fa-user"></i>&nbsp;  <?php echo $user ;?></a>
                    </li>
					
					</div>
					</div>
</nav><br/><br/><br/>
				</body>
				</html>
					
								