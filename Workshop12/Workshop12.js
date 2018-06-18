//part 1
//console.log('some text for console');

//part 2
/*
for(var i = 0; i < 10; i++)
{
	console.log("i = "+ i);
}
*/

//part 3
/*
var keepLooping = true;
var i = 1;
while(keepLooping)
{
	i++;
	console.log("i = " + i + "<br>");
	if(i == 10)
	{
		keepLooping = false;
	}
}
*/

//part 4
/*
var i = 1;
do
{	
	i++;
	console.log("i = " + i + "<br>");
}
while(i < 10)
*/

//part 5
/*
var i = 0;
do
{
	i++;
	console.log("rando = " + Math.floor(Math.random() * 11));
} while (i < 11)
*/

//part 6
function randomConsoleNumbers()
{
	var i = 0;
	do
	{
		i++;
		console.log("rando = " + Math.floor(Math.random() * 11));
	} while (i < 11)
}