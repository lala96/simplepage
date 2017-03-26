

	<!DOCTYPE html>
	<html>
	<head>
		<?php
    		require'header.php';
    	?>
	</head>
	<body>


	<!-- login start -->
	<!-- color -->
    <body class="#8e24aa purple darken-1">
    <br>
    <br>
    <br>

	<div class="row">
    <form action="process.php" method="post" class="col s12 m4 offset-m4 #ffffff white" style="border:#000000 black; border-radius: 15px">
    <h4>LOGIN</h4>
      <div class="row">
        <div class="input-field col s12 m12">
          <input  id="name" type="text" class="validate" name="myname">
          <label for="name">Name</label>
        </div>
      <div class="row">
        <div class="input-field col s12 m12">
          <input id="password" type="password" class="validate" name="mypass">
          <label for="password">Password</label>
        </div>
      </div>
      </div>
     
      <!-- submit button -->
       <button class="btn waves-effect waves-light col m12" type="submit" name="username" value="submit_login">Submit
    		<i class="material-icons right">send</i>
  	   </button>
  	   <!-- end button -->
  	   <br>
  	   <br>
    </form>
  	</div>
        

     <!--login end  -->

      <?php 
      		require'script.php';
       ?>
        
        <script >
    $(document).ready(function(){
      $('.slider').slider();
    });
    </script>
	</body>
	</html>
	