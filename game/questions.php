<?php
session_start();
$user_id=$_SESSION['u_id'];
$stringfile=file_get_contents("questionlist".$user_id.".txt");
$aof=explode("_",$stringfile);
$abc=mysqli_connect('localhost','root','','quizbuzz');
$query="SELECT no FROM current WHERE user_id='$user_id' ";
$result=mysqli_query($abc,$query);
if(mysqli_num_rows($result)!=1)
{
	exit("something's fishy!");
}

$row=mysqli_fetch_array($result);
$no=$row['no']; 
if($no>count($aof)-2)
{
	echo"end";
	exit();
}
$qs_id=$aof[$no];
$query="SELECT * FROM questions WHERE id='$qs_id'";
$result=mysqli_query($abc,$query)or die("problem here");
$row=mysqli_fetch_array($result);
$question=$row['question'];
$opt1=$row['opt1'];
$opt2=$row['opt2'];
$opt3=$row['opt3'];
$opt4=$row['opt4'];
$no+=1;
$time=time();
$query="UPDATE  current SET no='$no' WHERE user_id='$user_id'";
$result=mysqli_query($abc,$query)or die("problem here 2");
$query="UPDATE  current SET time='$time' WHERE user_id='$user_id'";
$result=mysqli_query($abc,$query)or die("problem here 2");
mysqli_close($abc);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="questions.css"/>
</head>
<body>
<div id="question_container">
<p id="question"> <?php echo "$question";?></p>
<div id="options">
<table><tr><td>
<button id="1" class="option"> <?php echo "$opt1";?> </button></td><td>
<button id="2" class="option"> <?php echo "$opt2";?></button></td></tr><td>
<button id="3" class="option"> <?php echo "$opt3";?></button></td><td>
<button id="4" class="option"> <?php echo "$opt4";?></button></td></tr>
</table>
</div></div>
</body>
</html>