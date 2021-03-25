<?php
// include('../src/getData.php');
$message = "";
if(isset($_POST['Submit'])){ //check if form was submitted
  $message = "Success! Thank you for registering.";
}    
?>

<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
  </head>
  <body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="indexJS.js"></script>
    <script src="indexCSS.js"></script>
    <script src="validation.js"></script>
<header>
    <nav>
        <ul class="nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="pigDiceGame.php">Omar's Dice Game</a></li>
        </ul>
      </nav>
    </header>

    <div class="main">        
      <div class="carousel-container carousel-container0">
      </div>
      <div class="carousel-container carousel-container1">
      </div>
      <div class="carousel-container carousel-container2">
      </div>
      <div class="carousel-container carousel-container3">
      </div>
      <div class="carousel-container carousel-container4">
      </div>
      <div class="carousel-container carousel-container5">
      </div>
      <div class="carousel-container carousel-container6">
      </div>
      <div class="carousel-container carousel-container7">
                
                
        </div>
    </div>

      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="column">
              <h6>About</h6>
              <p class="text-justify">Project </p>
            </div>
  
            <div class="column">
              <div class="common_box_body test">
                <h6>Registration</h6>
                <p id="show_message" style="display: none">Thanks for registering! </p>
                <span id="error" style="display: none"></span>
                <form action=""  name="registration" id="registration" method="post">
               
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" placeholder="John">
              
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="john@doe.com">
               
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" placeholder="">
                  <label for="password"> Re enteeer password</label>
                  <input type="password" name="validatePassword" id="validatePassword" placeholder=""><br>
                  <span id='message'></span>
               
                  <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                </form>
                <?php echo $message; ?>
              </div>
            </div>
  
            <div class="column">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">About Us</a></li>
                <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">Omar Hussein</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
  </body>
</html>