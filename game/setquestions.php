<?php
session_start();
$user_id=$_SESSION['u_id'];	
$file_name="questionlist".$user_id.".txt";
$time=time();
$score=0;
$no=0;
$topic_id=$_GET['t_id'];
$abc= mysqli_connect('localhost','root','','quizbuzz')or die("not connected to database");
$query="SELECT * FROM user_score WHERE u_id='$user_id' AND topic_id='$topic_id'";
$result=mysqli_query($abc,$query);
if(mysqli_num_rows($result)<1)
{
	$query="INSERT INTO user_score (u_id,topic_id,score,played) VALUES('$user_id','$topic_id','0','yes')";
	$result=mysqli_query($abc,$query)or die("dfad");
}
$query="DELETE FROM current WHERE user_id='$user_id' ";
$result=mysqli_query($abc,$query)or die("first query problem");
$query="INSERT INTO current (file_name,score,user_id,time,no,topic_id)".
        "VALUES('$file_name','$score','$user_id','$time','$no','$topic_id')";
$result=mysqli_query($abc,$query)or die("second query problem");


$query="SELECT id FROM questions WHERE topic_id='$topic_id'";
$result=mysqli_query($abc,$query);
$totn=mysqli_num_rows($result);
$ids=[];
$i=0;
while($row=mysqli_fetch_array($result))
{
	$ids[$i]=$row['id'];
	$i++;
	}
shuffle($ids);
$file=fopen($file_name,"w");
for($i=0;$i<10 && $i<$totn;$i++ )
{
	fwrite($file,$ids[$i]."_");
}	
fclose($file);
mysqli_close($abc);
?>