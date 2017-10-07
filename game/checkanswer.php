<?php
session_start();
$user_id=$_SESSION['u_id'];
$stringfile=file_get_contents("questionlist".$user_id.".txt");
$aof=explode("_",$stringfile);
$pre_id=$_GET['b'];
$abc=mysqli_connect('localhost','root','','quizbuzz');
$query="SELECT no,score,time FROM current WHERE user_id='$user_id' ";
$result=mysqli_query($abc,$query);
if(mysqli_num_rows($result)!=1)
{
	exit("something's fishy!");
}

$row=mysqli_fetch_array($result);
$no=$row['no'];
$score=$row['score'];
$time=$row['time'];
$qs_id=$aof[$no-1];
$query="SELECT * FROM questions WHERE id='$qs_id'";
$result=mysqli_query($abc,$query)or die("problem here");
$row=mysqli_fetch_array($result);
$question=$row['question'];
$opt1=$row['opt1'];
$opt2=$row['opt2'];
$opt3=$row['opt3'];
$opt4=$row['opt4'];
$r_ans=$row['ans'];
$flag=false;
if($pre_id==$r_ans)
{
	$time2=time();
	
	$score=$score+10+(10+$time-$time2);
	$flag=true;
	$query="UPDATE  current SET score='$score' WHERE user_id='$user_id'";
    $result=mysqli_query($abc,$query)or die("problem here 3");
	
}
else
{
}
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
<?php
$j=0;
if($flag)
{
	switch($pre_id)
	{
	case 1: echo('<table><tr><td>
<button id="l" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
break;
case 2: echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="l" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
break;
case 3: echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="l" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
break;
case 4: echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="l" class="option">'.$opt4.'</button></td></tr>
</table>');
break;	
	}
}
else
{
	
		if($pre_id==1&&$r_ans==2)
		{
		 echo('<table><tr><td>
<button id="m" class="option">'.$opt1.'</button></td><td>
<button id="l" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==1&&$r_ans==3)
		{
		 echo('<table><tr><td>
<button id="m" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="l" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==1&&$r_ans==4)
		{
	 echo('<table><tr><td>
<button id="m" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="l" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==2&&$r_ans==1)
		{
		 echo('<table><tr><td>
<button id="l" class="option">'.$opt1.'</button></td><td>
<button id="m" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==2&&$r_ans==3)
		{
	 echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="m" class="option">'.$opt2.'</button></td></tr><td>
<button id="l" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==2&&$r_ans==4)
		{
			 echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="m" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="l" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==3&&$r_ans==1)
		{
		 echo('<table><tr><td>
<button id="l" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="m" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==3&&$r_ans==2)
		{
		 echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="l" class="option">'.$opt2.'</button></td></tr><td>
<button id="m" class="option">'.$opt3.'</button></td><td>
<button id="4" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==3&&$r_ans==4)
		{
	 echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="m" class="option">'.$opt3.'</button></td><td>
<button id="l" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==4&&$r_ans==1)
		{
			 echo('<table><tr><td>
<button id="l" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="m" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
		else if($pre_id==4&&$r_ans==2)
		{
			 echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="l" class="option">'.$opt2.'</button></td></tr><td>
<button id="3" class="option">'.$opt3.'</button></td><td>
<button id="m" class="option">'.$opt4.'</button></td></tr>
</table>');
		}else if($pre_id==4&&$r_ans==3)
		{
			echo('<table><tr><td>
<button id="1" class="option">'.$opt1.'</button></td><td>
<button id="2" class="option">'.$opt2.'</button></td></tr><td>
<button id="l" class="option">'.$opt3.'</button></td><td>
<button id="m" class="option">'.$opt4.'</button></td></tr>
</table>');
		}
	
}
?>
</div></div>
</body>
</html>