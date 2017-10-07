<?php
$u_id=$_SESSION['u_id'];
$t_id=$_GET['t_id'];
$conn=mysqli_connect("localhost","root","","quizbuzz")
	or die("failed to connect...");
	$query="SELECT * FROM topics WHERE id='$t_id'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result);
	$name=$row['name'];
	$image=$row['image'];
	$description=$row['file'];
	$slogan=$row['slogan'];
?>
<html>
<head>

<title>Description</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	$(".my").hide();
		$(".my").slideDown(1500);
		
});
</script>

<link href="default_t.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet">
    

<style>



</style>
</head>
<body>
<?php include("nav.php");?>
<div class="my">
<div id="wrapper">


	<div id="banner">
		<div class="container">
			<div class="title">
				<h2> <?php echo $name ;?> </h2>
				<span class="byline"><?php echo $slogan ;?></span></div>
			<ul class="actions">
				<li><a href="game/gameplayhtml.php?t_id=<?php echo $t_id ; ?>" class="button button1">Play</a></li>
			</ul>
		</div>
	</div>

    
<div id="page" class="container">
<div class="title">
	  <h2>Know about <?php echo $name ;?>?</h2>
	   </div>
		<p><?php echo $description ;?></p>
		<ul class="actions">
			<li><a href="https://en.wikipedia.org/wiki/" class="button button1">Wikipedia</a></li>
		</ul>

			</div>
</div>
</div>
  
	

		
		
<br><br><br><br><br><br>
		
<div id="copyright" class="container-fluid" >

             <div class="text-center right-center"> 
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:rupesh.singh@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
             <br>
	<p>&copy; Copyright QuizBuzz. All rights reserved. </p>

	</div>
	
</div>
	
</body>
</html>
