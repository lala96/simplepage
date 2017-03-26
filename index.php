<?php 
if (isset($_COOKIE['username'])) {
  $current_user = $_COOKIE['username'];
} 
?>
<!DOCTYPE html>
<html>
<head>

  <?php 
    require'header.php'
  ?>
</head>

<body>
	<!-- Navigation here-->
	 <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php 
          if(isset($current_user)){

            echo '<li><a class="dropdown-button" href= "#"  data-activates="dropdown1" >Hello, '.$current_user.' </a></li>';
          // Dropdown Structure
         echo' <ul id="dropdown1" class="dropdown-content">
                 <li><a href="logout.php">Logout</a></li>
              </ul>';


          } else {
            echo ' <li><a href= "login.php"> Login </a></li>';
          }

       ?>
      </ul>
    </div>
  </nav>
	<!-- Navigation end-->
  <div class="container">
    <h1>
        Welcome to This Page
    </h1>
  </div>  

    <!-- slider -->


  <div class="slider">
    <ul class="slides">
      <li>
        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
    <!-- slider end -->

    <!-- cards -->
    <div class="row">
    <!-- 1st card -->
    <div class="col s12 m4">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="http://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
    <!-- 2nd card -->
   <div class="col s12 m4">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="http://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
    <!-- 3rd card -->
   <div class="col s12 m4">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="http://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
  </div>

    <!-- cards end -->

	  <?php 
        require'script.php';
     ?>
     <script >
    $(document).ready(function(){
          $('.dropdown-button').dropdown();
      $('.slider').slider();
    });
    </script>


</body>
</html>