<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	$dbc=mysqli_connect('localhost','root','','quizbuzz') or die("can not connect to database ");
	$query="SELECT * FROM user_login WHERE username='$username' AND password='$password' ";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)
	{
		$row=mysqli_fetch_array($result);
		$u_id=$row['id'];
		$_SESSION['username']=$username;
		$_SESSION['u_id']=$u_id;
		header('Location:http://localhost/quizbuzz/quiz/home4.php');		
	}
	else
	{
		echo " wrong username or password";
	}
}
else
{
	echo "go to the login page";
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>
