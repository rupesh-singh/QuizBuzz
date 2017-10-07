<?php
session_start(); 
if(!isset($_SESSION['u_id']))
{
	die("log in first");
}
?>

<html>
<head>
<title>Home </title>
<link href="http://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet">
    
<style>
.images
	{   
  display: block;
  width: 200px;
  height: 200px;
  margin: 1em auto;
  border-radius: 99em;
  border: 0px solid green;
  box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);  
	}


</style>


</head>


<body>

<?php 
include("nav.php");
$u_id=$_SESSION['u_id'];
$conn=mysqli_connect("localhost","root","","quizbuzz")
	or die("failed to connect...");
$query="select * from user_info where u_id='$u_id'";
$q1=mysqli_query($conn,$query);
$result=mysqli_fetch_array($q1);
$fname=$result['fname'];
$lname=$result['lname'];
$profile_pic=$result['profile_pic'];
$world_rank=$result['world_rank'];

?>


<div id="banner">
	<div class="container">

<img class="images" src="<?php echo $profile_pic ;?>" alt="upload a profile photo" />

		<div class="title">
			<h2><?php echo $fname." ".$lname;?></h2>
		</div>
	</div>
</div>



<!--
<div id="extra" class="container">
	<div class="title">
		<h2> &#9733; &#9733;  Games Played &#9733; &#9733;  </h2>
		</div>
	<div id="three-column">
		<div class="boxA">
			<div class="box">
				
				<p>Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
			
			</div>
		</div>
		<div class="boxB">
			<div class="box">
			
			<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis.</p>

			</div>
		</div>
		<div class="boxC">
			<div class="box">
				<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus.</p></div>
		</div>
	</div>
</div>

-->


<div id="extra" class="container">
	<div class="title">
		<h2> &#9733; &#9733;  Games Played &#9733; &#9733;  </h2>
		</div>


<?php
//echo "$u_id";
$query="SELECT * FROM user_score WHERE u_id='$u_id'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
	$t_id=$row['topic_id'];
	$score=$row['score'];
    $query="SELECT name FROM topics WHERE id='$t_id' ";
    $result1=mysqli_query($conn,$query);	
	$row1=mysqli_fetch_array($result1);
	$topic_name=$row1['name'];

	?>
	
			<div class="box">
	           <?php echo "<h3> &#9733; $topic_name</h3>";?>
			    
				<p style="float:right;">YOUR HIGHEST SCORE : <?php echo "<b>$score</b>"; ?></p>
				
			  <a href="game/gameplayhtml.php?t_id=<?php echo $t_id ; ?>"><button class="button button1">PLAY AGAIN</button></a>
	       </div>	
	<?php
}
?>
	
</div>


<div id="copyright" class="container-fluid">

<div class="text-center right-center"> 
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:rupesh.singh@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
				<br>
	<p>&copy; Copyright QuizBuzz All rights reserved.</p>
</div>

</body>
</html>
