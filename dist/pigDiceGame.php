<!DOCTYPE html>
<html>
  <head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.2.js"
  	integrity="sha256-WMJwNbei5YnfOX5dfgVCS5C4waqvc+/0fV7W2uy3DyU="
  	crossorigin="anonymous"></script>
    <!-- <script src="indexCSS.js"></script>
    <script src="indexJS.js"></script> -->
    <script src="pigDiceGameJS.js"></script>
    <script src="pigDiceGameCSS.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Omar's Pig Dice Game</title>
  </head>
  <body>
  <header>
    <nav>
        <ul>
          <li><a href="../dist/index.php">Home</a></li>
          <li class="active"><a href="../dist/pigDiceGame.php">Omar's Pig Dice Game</a></li>
        </ul>
      </nav>
    </header>

    <div class="header">
      <div class="container">
        <h1>Omar's Pig Dice</h1>
      </div>
    </div>

    <div class="container">
      <div class="row" id="main">

        <div class="col-md-4">
          <h2 id="p1">Player 1</h2>
          <h3>Score: <span id="p1score"></span></h3>
          <h3>Wins: <span id="p1wins"></span></h3>
          <div id="p1buttons">
            <button id="roll" class="btn btn-large btn-danger">roll dice</button>
            <button id="hold" class="btn btn-large btn-success">hold</button>
          </div>
        </div>

        <div class="col-md-4">
          <h2>Roll: <span id = "dice"></span></h2>
          <span id="displaydice"></span>
          <h3>Current score: <span id="current"></span></h3>
        </div>

        <div class="col-md-4">
          <h2 id="p2">Player 2</h2>
          <h3>Score: <span id="p2score"></span></h3>
          <h3>Wins: <span id="p2wins"></span></h3>
          <div id="p2buttons">
            <button id="roll" class="btn btn-large btn-danger">roll dice</button>
            <button id="hold" class="btn btn-large btn-success">hold</button>
          </div>
        </div>
    </div>
    <div class = "instructions">
      <h4>Player one roll: "z"</h4>
          <h4>Player two roll: "/"</h4>
          <h4>Hold:            Space</h4>
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
            
            </div>
  
            <div class="column">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Contribute</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Sitemap</a></li>
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