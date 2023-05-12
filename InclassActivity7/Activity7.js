var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	
};

function displayResults()
{
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}

	var highest=Math.max(...scores);
	var index =scores.indexOf(highest);
	
	document.getElementById("results").innerHTML=
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br \> "+"High score = "+names[index] +" with a score of "+scores[index]
}

function displayScores(){
	var html='';
	for (let i = 0; i < names.length; i++) {
		html+='<tr>'+names[i]+'</tr>'+' \t'+'<tr>'+scores[i]+'</tr> <br />'
		
	}


	document.getElementById("scores_table").innerHTML="<h2> Scores </h2><br />"+html
}
