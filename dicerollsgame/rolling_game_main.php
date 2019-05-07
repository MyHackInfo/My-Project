<?php
session_start();
if($_SESSION['name']=="")
{
	header("location: index.php");
	exit();
}

if(!empty($_GET['logout']))
{
	session_unset();
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,600" rel="stylesheet" type="text/css">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="resources/css/style_rolling.css" >

        <title>Dice Rolling Play</title>
    </head>

    <body>
        <p> Welcome <?php echo $_SESSION['name'];?></p>
        <div class="wrapper clearfix">
            <div class="player-0-panel active">
                <div class="player-name" id="name-0">Rolling 1</div>
                <div class="player-score" id="score-0">0</div>
                <div class="player-current-box">
                    <div class="player-current-label">Score</div>
                    <div class="player-current-score" id="current-0">0</div>
                </div>
            </div>

            <div class="player-1-panel">
                <div class="player-name" id="name-1">Rolling 2</div>
                <div class="player-score" id="score-1">0</div>
                <div class="player-current-box">
                    <div class="player-current-label">Score</div>
                    <div class="player-current-score" id="current-1">0</div>
                </div>
            </div>

            <button class="btn-new"><i class="ion-ios-plus-outline"></i>New game</button>
            <button class="btn-roll"><i class="ion-ios-loop"></i>Play Roll</button>
            <button class="btn-hold"><i class="ion-ios-download-outline"></i>Hold</button>
            <button class="btn-exit"><i class="ion-ios-download-outline"></i><a href="loginform.php?logout=successfully Logout">Logout</a></button>

            <!--<img src="dice-5.png" alt="Dice" class="dice"> old-code-->
            <img src="dice-3.png" alt="Dice" class="dice" id="dice-1">
            <img src="dice-3.png" alt="Dice" class="dice" id="dice-2">
        </div>

        <script src="resources/js/rolling_js.js" ></script>
    </body>
</html>
