var pigGame = {
    p1: 0,
    p2: 0,
    turnScore: 0,
    activePlayer: 1,
    rollDice: function(){
    "use strict";
      var roll = Math.floor(Math.random() * 6) + 1;
      if (roll === 1) {
        this.turnScore = 0;
        this.activePlayerToggle();
      }
      else {
        this.turnScore += roll;
      }
      console.log(roll);
      return roll;
    },
    activePlayerToggle: function(){
    "use strict";
    // if player rolls a 1, end the turn
      if(this.activePlayer === 1){
        this.p1 += this.turnScore;
        this.activePlayer = 2;
      }else{
        this.p2 += this.turnScore;
        this.activePlayer = 1;
      }
    },
    // reset turn score after turn
    hold: function(){
    "use strict";
      this.activePlayerToggle();
      this.turnScore = 0;
    }
  };
  
  $(document).ready(function(){
  "use strict";
    var game = Object.create(pigGame);
    var p1wins = 0;
    var p2wins = 0;
    // who's turn is it
    var checkPlayer = function() {
      var player = game.activePlayer;
      if (player === 1) {
        $("h2#p1").css('color', 'blue');
        $("h2#p2").css('color', '#ffff');
        $("#p2buttons").hide();
        $("#p1buttons").show();
      } else {
        $("h2#p2").css('color', 'blue');
        $("h2#p1").css('color', '#fff');
        $("#p1buttons").hide();
        $("#p2buttons").show();
      }
    };
  
    checkPlayer();
  
  
    var playerRoll = function() {
      var dice = game.rollDice();
      
  //   Die faces using unicodes
      var output = "&#x268" + (dice-1) + ";";
       $("#displaydice").html(output);
       $("#dice").text(dice);
       changePlayerAndRestartScores();
    }
  
    // roll dice
    $("button#roll").click(function(){
      playerRoll();
    });
  
    // hold turn
    $("button#hold").click(function(){
      game.hold();
      changePlayerAndRestartScores();
    });
  
    // keyboard controls
    $(document).keypress(function(event) {
      if((event.which == 122) && (game.activePlayer===1)){
        playerRoll();
      }else if((event.which == 47) && (game.activePlayer == 2)){
        playerRoll();
      }else if((event.which == 32)){
        game.hold();
        changePlayerAndRestartScores();
      }
    });
  
  
    // Update scores
    var changePlayerAndRestartScores = function(){
      winCheck();
      restartScores();
      checkPlayer();
    }
  
    // check for winnner
  
    // winCheck function checks for when a player has won the game. Its a if statment where {game.p1} is player 1 and {game.p2} is player 2. If a player reaches or equals 100 points a javascript alert is triggered. Once the alert is triggered it prints out the the winner.
    var winCheck = function(){
      if(game.p1 >= 100){
        alert("Player one wins!!");
        game = Object.create(pigGame);
        p1wins+=1;
        $("#p1wins").text(p1wins);
      } else if (game.p2 >= 100){
        alert("Player two wins!!");
        game = Object.create(pigGame);
        p2wins+=1;
        $("#p2wins").text(p2wins);
      }
    };
  
    var restartScores = function(){
      $("#p1score").text(game.p1);
      $("#p2score").text(game.p2);
      $("#current").text(game.turnScore);
    }
  
  });