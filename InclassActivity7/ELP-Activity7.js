var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;


};

function displayResults() {
	var average = 0;
	for (var i = 0; i < scores.length; i++) {
		average = (average * (i) + scores[i]) / (i + 1);
	}
	//I used math function to find maximum score and index of this number
	var highest = Math.max(...scores);
	var index = scores.indexOf(highest);

	document.getElementById("results").innerHTML =
		document.getElementById("results").innerHTML = "<h2> Results </h2><br /> Average score is " + average + "<br \> " + "High score = " + names[index] + " with a score of " + scores[index]
}

function displayScores() {
	//var html='<tr>'+'<th>'+'Name'+'</th>'+'<th>'+'Score'+'</th>'+'</tr>';
	var html = '<tr>' + '<td>' + '<b>Name</b>' + '</td>' + '<td>' + '<b>Score</b>' + '</td>' + '</tr>'
	for (let i = 0; i < names.length; i++) {
		html += '<tr>' + '<td>' + names[i] + '</td>' + '<td>' + scores[i] + '</td>' + '</tr>'

	}

	document.getElementById("scores_table").innerHTML = "<h2> Scores </h2>" + html
}

function addScore() {
	//I added this condition to prevent invalid input
	if (String(document.getElementById("name").value) == '' || (parseInt(document.getElementById("score").value) >= 101 ||
		parseInt(document.getElementById("score").value) <= 0 || String(document.getElementById("score").value) == '')) {

		alert("You must enter a name and a valid score");
	}

	else {

		boxvalue = document.getElementById("name").value;
		names.push(String(boxvalue));
		boxvalue = document.getElementById("score").value;
		scores.push(parseInt(boxvalue));
	}
}