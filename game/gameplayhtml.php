	<?php
	session_start();
	$topic_id=$_GET['t_id'];
	$_SESSION['topic_id']=$topic_id;
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<script>
	</script>
	<script src="utility.js"></script>
	<script>
	
	window.onload=initiat;

	function initiat()                    //////     initiat
	{
	
	     req2=createrequest();
		if(req2!=null)
		{
	    req2.open("GET","setquestions.php?t_id=<?php echo $topic_id;?>",false);
		req2.send(); 		
		}
	 waitt=3;	
	v=waitt;
	 d = new Date();
	 time=d.getTime();
     t= time;
	 int1=setInterval(gameinitiat,10);
	}
	function gameinitiat()      ///////     gameinitiat
	{
		var dd=new Date();
		var ctime=dd.getTime();
		
	 var timer =document.getElementById("timer");
	timer.innerHTML=v;
	var num=100-(ctime-t)/(waitt*10);
	var bar=document.getElementById("time_bar");
	bar.style.width=num+'%'; 	
	if(v==0)
	{
	timer.innerHTML="play";
	bar.style.width="0%";
window.setTimeout(gamestart,500);
	window.clearInterval(int1);	
	}
	if((ctime-time)/1000>1)
	{
	v-=1;
	time=ctime;
	}
	}
	function gamestart()             ////////   gamestart
	{
		
	 req1=createrequest();
	 if(req1!=null)
	 {
		 waitt=10;
		 timerv=window.setTimeout(newquestion,waitt*1000);
		 	
	v=waitt;
	 d = new Date();
	 time=d.getTime();
     t= time;
	 int1=setInterval(timetrack,10);
	 req1.open("GET","questions.php",false);
	 req1.onreadystatechange=changetext;
		req1.send(); 		
	}
	else
	{
	alert("null req");
	}
	}
	function timetrack()
	{
		var dd=new Date();
		var ctime=dd.getTime();
		
	 var timer =document.getElementById("timer");
	timer.innerHTML=v;
	var num=100-(ctime-t)/(waitt*10);
	var bar=document.getElementById("time_bar");
	bar.style.width=num+'%'; 	
	if(v==0)
	{
	timer.innerHTML="next";
	window.clearInterval(int1);
	}
	if((ctime-time)/1000>1)
	{
	v-=1;
	time=ctime;
	}
	}
	function changetext() /////          changetext 
	{
		
	if(req1.readyState==4)
	{
	  if(req1.status==200)
	  {	 
    	   
	   var cont=document.getElementById("game_frame");
	   if(req1.responseText=="end")
	   {
		   
		   
		    var id = window.setTimeout(function() {}, 0);
  while (id--) {
     window.clearTimeout(id); // will do nothing if no timeout with id is present
   }
   
    var interval_id = window.setInterval("", 9999); // Get a reference to the last
                                                // interval +1
    for (var i = 1; i < interval_id; i++)
	{
        window.clearInterval(i);
	}     
	 //for clearing all intervals
		    
		 <!------------------------------------------------------------------------------>
		    		 
				
		    window.location.assign("http://localhost/quizbuzz/quiz/game/score.php");   
	   }
	   cont.innerHTML=req1.responseText;
	   var opts=cont.getElementsByClassName("option");
	   for(var i=0;i<opts.length;i++)
	   {
		   var opt=opts[i];
		   opt.onclick=checkanswer;
         
	 }
	  }
    }
	}
	function showscore()
	{
		
			
		if(reqf.readyState==4)
	{			
	  if(reqf.status==200)
	  {	  
  
	   var cont=document.getElementById("game_frame");
	   cont.innerHTML=reqf.responseText;
	   var tim=document.getElementById("timer");
	   tim.innerHTML=" ";
	   var bar=document.getElementById("time_bar");
	   bar.innerHTML=" ";
	   var tit=document.getElementById("title");
	   tit.innerHTML=" game over"
	  }
    }
	}
	function newquestion()
	{
	req4=createrequest();
	 if(req4!=null)
	 {
		 
	 req4.open("GET","showanswer.php",false);
	 req4.onreadystatechange=changetext2;
		req4.send(); 		
	}	
	}
	function checkanswer()
	{
		window.clearTimeout(timerv);
		var id=this.id;
		req3=createrequest();
	 if(req3!=null)
	 {
	 req3.open("GET","checkanswer.php?b="+id,false);
	 req3.onreadystatechange=changetext1;
		req3.send(); 		
	}
	}
	function changetext1()      ///          changetext1
	{
			
		if(req3.readyState==4)
	{			
	  if(req3.status==200)
	  {	  
	   var cont=document.getElementById("game_frame");
	   cont.innerHTML=req3.responseText;
       window.setTimeout(gamestart,1000);
	  }
    }
	}
	function changetext2()
	{
		
	if(req4.readyState==4)
	{
			
	  if(req4.status==200)
	  {	  
	   var cont=document.getElementById("game_frame");
	   cont.innerHTML=req4.responseText;
	   if(cont.innerHTML=="")
	   {
		   alert("Game Over");
	   }
       window.setTimeout(gamestart,1000);
	   window.clearTimeout(timerv);
	  }
    }
	
	}
	
	</script>
	<link rel="stylesheet" href="gameplay.css">
	</head>
	<body>
	<div id="time_bar"><br></div>
	<div id="title">
	<h1>Game will start in </h1></div>
	<h2 id="timer"></h2>
	<div id="game_frame"></div>
	</body>

	</html>