<?php
session_start();
if(isset($_SESSION['username']))
{
	function compress_image($source_url,$destination_url,$quality)
	{
		
	
		
		$info=getimagesize($source_url);
		
		if($info['mime']=='image/jpeg')
		{
			$image=imagecreatefromjpeg($source_url);
		}
		else if($info['mime']=='image/gif')
		{
			$image=imagecreatefromgif($source_url);
		}
		else if($info['mime']=='image/png')
		{
			$image=imagecreatefrompng($source_url)or die("not done");
		}
		imagejpeg($image,$destination_url,$quality)or die("not done");
		return $destination_url;
	}
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
	$size=$_FILES['profilepic']['size'];
	echo $size;
	 $tmp_name=$_FILES['profilepic']['tmp_name'];
	 
	 $name=$_SESSION['u_id'].time().'.jpg';
	 
	 $target="profile_pic/".$name;
	 $filename=compress_image($tmp_name,$target,70);
	 $abc=mysqli_connect('localhost','root','','quizbuzz');
	 $query="SELECT profile_pic FROM user_info WHERE u_id='$_SESSION[u_id]'";
     $result=mysqli_query($abc,$query);
	 $row=mysqli_fetch_array($result);
	 @unlink($row['profile_pic']);
	 $query="UPDATE user_info SET profile_pic='$filename' WHERE u_id='$_SESSION[u_id]'";
     $result=mysqli_query($abc,$query);
	 mysqli_close($abc);
	 header("Location:account.php");
	 }
}
else
{
		echo "not there";
}
?>