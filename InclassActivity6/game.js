/*
Abdulkadir Emre ELP
19050111052
*/
//I declared the variables
var button = document.getElementById("button");
var count = 0;
var level = 1;
var timeout = 500;

//To change position of the button I coded this function
//To try you can decrease 600 to 20 (So I tried like this)
function randomMargin() {
	var marginLeft = Math.random() * 600;
	var marginTop = Math.random() * 600;
	button.style.marginLeft = marginLeft + "px";
	button.style.marginTop = marginTop + "px";
}

//When we click the button ı increased the count until 3 and then ı increase level until 6
//When increase the level become more harder because I decrased the timeout
button.addEventListener("click", function () {
	count++;
	if (count >= 3) {
		count = 0;
		level++;
		timeout -= 100;
		if (level > 6) {
			alert("You won the game!");
		} else {
			alert("You won level " + (level - 1) + "!");
			setTimeout(function () {
				runLevel();
			}, timeout);
		}
	}
});
//When we click the 3 times start other level
function runLevel() {
	randomMargin();
	setTimeout(function () {
		runLevel();
	}, timeout);
}
//I add this to start 
runLevel();

