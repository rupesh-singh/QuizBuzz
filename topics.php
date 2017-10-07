<!DOCTYPE html>
<html lang="en">

<head>
    <title>QuizBuzz</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="default.css" rel="stylesheet">
 
    <!-- Custom Fonts  -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	
	<style>
  .containt
  {
	  padding-top:50px;
	  position:relative;
  }
  #slider{
	 
  }
  #topics
  {
	  padding-left:50px;
  }
  #cover_img
  {
	  width:100%;
  }
  </style>
	
	
	
	</head>

	
	
<body>
 <?php

	 include("nav.php");      ?>
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
            <li data-target="#myCarousel" data-slide-to="8"></li>
            <li data-target="#myCarousel" data-slide-to="9"></li>
            
        
			
			</ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('slider/got.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
            <div class="item">
                <div class="fill" style="background-image:url('slider/friends.jpg');"></div>
                <div class="carousel-caption">
				
                     <div class="btn-group" role="group">
                       </div>
			   
                </div>
            </div>
			
            <div class="item">
                <div class="fill" style="background-image:url('slider/sports.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			<div class="item">
                <div class="fill" style="background-image:url('slider/animals.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			<div class="item">
               <div class="fill" style="background-image:url('slider/harrypotter.jpg');"></div>
                <div class="carousel-caption">
                    <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			<div class="item">
                <div class="fill" style="background-image:url('slider/body.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			<div class="item">
                <div class="fill" style="background-image:url('slider/java.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			<div class="item">
                <div class="fill" style="background-image:url('slider/brands.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			
			<div class="item">
                <div class="fill" style="background-image:url('slider/history.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
			
			<div class="item">
                <div class="fill" style="background-image:url('slider/math.jpg');"></div>
                <div class="carousel-caption">
                     <div class="btn-group" role="group">
                       </div>
                </div>
            </div>
			
        </div>

        <!-- Controls for slider-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

	
	<?php
	
	$conn=mysqli_connect("localhost","root","","quizbuzz")
	or die("failed to connect...");
     $u_id=$_SESSION['u_id'];
     
$query="SELECT * FROM topics";
$result=mysqli_query($conn,$query);
$no_topics=mysqli_num_rows($result);
$no=3;
$no_rows=$no_topics/$no;
?>

	
<!-- content -->
<div class="container-fluid">
    <!-- content body -->
    <!-- main content -->
    <div id="topics" >

           <div class="col-lg-12">
                <h1 class="page-header">
                    &#9733;Topics
                </h1>
            </div>
			
	<?php
	  $i=$j=0;
       for(;$i<$no_rows+1;$i++)
	   {
		   /* if($i==$no_rows)
			   for(;$j=0;j<$no_last){
			   else */
			   ?>
			   
<div class="row">


<?php
for($j=0;$j<$no;$j++){	
    if($row=mysqli_fetch_array($result))
    {	

      $name=$row['name'];
	  $t_id=$row['id'];
	  $image=$row['image'];
	  $file=$row['file'];
	  if(empty($image))
	  {
		  $image="images/demo/got.jpg";
	  }
	  ?>
        <!-- article 1 -->
		<div class="col-lg-<?php echo 12/$no; ;?>">
            <div class="panel panel-success">
               
           <div class="panel-heading">
           <h4><strong><i class="fa fa-fw fa-spinner fa-spin"></i><?php echo $name ?></strong></h4>
           </div>
                    
		
		<!-- <h2><?php //echo $name ?></h2> -->
        
        <div class="panel-body">
        <!--
		<img src="<?php echo $image ?>" alt="got">
		<br><br>
                -->         
		 <p>
		  Play QuizBuzz module <?php echo $name ?>. You can Play Quiz By clicking the button below.
		  There are some test on topicwise.Enhance Your GK module having various topics.DID YOU KNOW 
		  is the Module where you can find some FACTS that is very surprise as well as increase your knowledge.
		  </p><br>
           <a href="topics1.php?t_id=<?php echo $t_id ;?>"><button type="button" class="btn btn-success" >More About This</button></a>
		</div>
		</div>
		</div>
	   <?php
	} 
	else
	{
		
		break;
	}
	}
	echo "</div>";
	}
	   ?>
   </div>
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

	</div>
	
	
	
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
</body>
</html>