<?php 

 	if (isset($_POST['username'])){
 		
 		// separate array in $POST
 		json_encode($_POST);

 		$subname = $_POST['myname'];
 		$subpass = $_POST['mypass'];

 		if ($subname == 'admin' && $subpass == 'admin') {
 			$cookie_name = 'username';
 			$cookie_value = $subname;
 			setcookie($cookie_name, $cookie_value,  time() + (86400 * 30), "/");
 			header('Location: index.php ');
 		} else {
 			echo 'Wrong answer';
 		}

 		
 	} else {

 		die('we all die');
 	}
?>