var playerHitPoints = 100;
var monsterHitPoints = 100;
var fightOn = true;

function attack()
{
	if(fightOn){
		playerHitPoints -= Math.floor(Math.random() * 11);
		monsterHitPoints -= Math.floor(Math.random() * 11)
		console.log("Players Hit Points: " + playerHitPoints);
		console.log("Monster Hit Points: " + monsterHitPoints);
		console.log("---------------------------------------");
	}

	if(monsterHitPoints < 1 && playerHitPoints < 1) {
		console.log("Everyone is dead");
		fightOn = false;
	} else if (monsterHitPoints < 1) {
		console.log("Monster is dead. Player wins!");
		fightOn = false;
	} else if (playerHitPoints < 1) {
		console.log("Player is dead. Monster wins!");
		fightOn = false;
	} else {
		console.log("Fight another round");
	}
}

function runCombat()
{
	do
	{
		playerHitPoints -= Math.floor(Math.random() * 11);
		monsterHitPoints -= Math.floor(Math.random() * 11)
		console.log("Players Hit Points: " + playerHitPoints);
		console.log("Monster Hit Points: " + monsterHitPoints);
		console.log("---------------------------------------");
	} while (playerHitPoints > 0 && monsterHitPoints > 0)

	if(playerHitPoints > 0) 
	{
		console.log("Player Wins");
	} else if(monsterHitPoints > 0) {
		console.log("Monster Wins");
	} else {
		console.log("nobody wins");
	}
}

function healAll()
{
	playerHitPoints = 100;
	monsterHitPoints = 100;
	fightOn = true;
	console.log("Healing combatants!!")
	console.log("Player Hit Points: " + playerHitPoints);
	console.log("Monster Hit Points: " + monsterHitPoints);
	console.log("All Combatants ready!!");
	console.log("---------------------------------------");
}