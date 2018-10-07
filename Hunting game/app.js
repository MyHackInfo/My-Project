/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he whishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/
var scores , roundscore, activePlayer,dice,gameplay;

init();
  //document.querySelector('.dice').style.display='none';


document.querySelector('.btn-roll').addEventListener('click',function(){
  if(gameplay){
    //Random number
    // var dice=Math.floor(Math.random()*6)+1; old-code;
    var dice1=Math.floor(Math.random()*6+1);//new-code
    var dice2=Math.floor(Math.random()*6+1);//new-code
     // display the result
     // var diceDOM=document.querySelector('.dice'); old-code
     //diceDOM.src='dice-' + dice + '.png';old-code all 4 line
     document.getElementById('dice-1').style.display ='block'; //new-code
     document.getElementById('dice-2').style.display ='block'; //new-code
     document.getElementById('dice-1').src='dice-'+ dice1 +'.png'; //new-code
     document.getElementById('dice-2').src='dice-'+ dice2 +'.png'; //new-code
     // update the round score if the rolled number was not a 1
     /*if(dice !== 1){
       roundscore +=dice;
       document.querySelector('#current-' + activePlayer).textContent=roundscore;
     }*/ //old-code
     if(dice1 !== 1 && dice2 !==1){ //new-code
       //add score
       roundscore +=dice1 + dice2;
       document.querySelector('#current-' + activePlayer).textContent=roundscore;
                  }
     else{
       nextPlayer();
       //document.querySelector('.player-0-panel').classList.remove('active');
       //document.querySelector('.player-1-panel').classList.add('active');
         }
               }
       });
    document.querySelector('.btn-hold').addEventListener('click',function(){
      if(gameplay){
        //add current score to Gloval scores
        scores[activePlayer] +=roundscore;

        // update the ui
        document.querySelector('#score-' + activePlayer).textContent= scores[activePlayer];

        // chek if plyer won the Game
          if(scores[activePlayer]>=c){

            if(activePlayer == 0){
               document.querySelector('#name-' + activePlayer).textContent=a+" Won the game";
            }else{
              document.querySelector('#name-' + activePlayer).textContent=b+" Won the Game";
            }
            //document.querySelector('.dice').style.display ='none'; old-code
            document.getElementById('dice-1').style.display ='none'; //new-code
            document.getElementById('dice-2').style.display ='none'; //new-code
            document.querySelector('.player-'+activePlayer + '-panel').classList.add('winner');
            document.querySelector('.player-'+activePlayer + '-panel').classList.remove('active');
            gameplay=false;
          }else {
            // nextPlayer
                 nextPlayer();
          }
      }

    })
    function nextPlayer(){
      //next player
      activePlayer === 0 ? activePlayer =1 : activePlayer =0;
      roundscore =0;

      document.getElementById('current-0').textContent='0';
      document.getElementById('current-1').textContent='0';
      document.querySelector('.player-0-panel').classList.toggle('active');
      document.querySelector('.player-1-panel').classList.toggle('active');

      document.getElementById('dice-1').style.display ='none';
      document.getElementById('dice-2').style.display ='none';

    }
    document.querySelector('.btn-new').addEventListener('click', init);
    function init(){
      a=prompt('Enter player first name');
      b=prompt('Enter player second name');
      c=prompt('Enter winningscore');
      scores=[0,0];
      activePlayer=0;
      roundscore=0;
      gameplay=true;
      //document.querySelector('.dice').style.display='none'; old-code
      document.getElementById('dice-1').style.display ='none'; //new-code
      document.getElementById('dice-2').style.display ='none'; //new-code

      document.getElementById('score-0').textContent='0';
      document.getElementById('score-1').textContent='0';
      document.getElementById('current-0').textContent='0';
      document.getElementById('current-1').textContent='0';
      document.getElementById('name-0').textContent=a;
      document.getElementById('name-1').textContent=b;
      document.querySelector('.player-0-panel').classList.remove('winner');
      document.querySelector('.player-1-panel').classList.remove('winner');
      document.querySelector('.player-0-panel').classList.remove('active');
      document.querySelector('.player-1-panel').classList.remove('active');
      document.querySelector('.player-0-panel').classList.add('active');
    }
