<?php 
	
	setcookie("username","", time()-3600, "/"); //expired the cookies
	header('Location: index.php');



 ?>