<?php
session_start();
 if(isset($_SESSION['u_id'])&&isset($_SESSION['topic_id']))
 {
	 $user_id=$_SESSION['u_id'];
	 $topic_id=$_SESSION['topic_id'];
	 $abc=mysqli_connect('localhost','root','','quizbuzz');
     $query="SELECT score FROM current WHERE user_id='$user_id' ";
     $result=mysqli_query($abc,$query);
	 $row=mysqli_fetch_array($result);
	 $score=$row['score'];
	 $query="SELECT score FROM user_score WHERE u_id='$user_id' AND topic_id='$topic_id' ";
     $result=mysqli_query($abc,$query);
	 $row=mysqli_fetch_array($result);
	 $hscore=$row['score'];
	 if($score>$hscore)
	 {
		 $query="UPDATE user_score set score='$score' WHERE u_id='$user_id' AND topic_id='$topic_id' ";
     $result=mysqli_query($abc,$query);
	 $hscore=$score;
	 }
	?>
	
	<html>
	<head>
	<style>
	body
	{
		background-color:#333;
	text-align:center;
	}
	
	h1
	{
	
	font-size:300%;
	color:lightgreen;
		
	}
	h3
	
		{
	font-size:300%;
	color:lightblue;
		
	}
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
	
	#containt
	{
		padding-top:100px;
	}
	.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
	</style>
	
	</head>
	<body>
	<div id="containt">
	<h1 style="color:red;"> GAME OVER</h1>
	<h1>Your Score</h2>
	<h3><?php echo $score ;?></h4>
	
	<h1>Your HighScore</h2>
	<h3><?php echo $hscore ;?></h4>
	
	<div class="container">
 <a href="../home4.php"><button class="button button2">LET'S GOTO HOME</button></a>
</div>

	</div>
	</body>
	</html>
	
	<?php
	
 }
 else
 {
	 
 }
?>