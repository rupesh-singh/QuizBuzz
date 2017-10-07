<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
if(isset($_SESSION['username']))
{
	
session_unset();
session_destroy();
?>
<script>
window.location.assign("http://localhost/quizbuzz/quiz/index.html");
</script>
<?php 
}
else
{
die();
}
?>
</body>

</html>