<?php
 
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

</style>

   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />

   
</style>

</head>

<body>

<?php
//include("nav.php");
?>

<div class="container-fluid">
    
	
	<h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file"  class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="firstname" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="lastname" name="lastname">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Email" name="email">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="username" name="username">
            </div>
          </div>
          
		  <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="password" name="password">
            </div>
          </div>
          
		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
            </div>
          </div>
        </form>
     
	 </div>
  </div>
</div>
<br><br><br><br>


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


