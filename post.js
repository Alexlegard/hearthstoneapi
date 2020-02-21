window.onload = pageReady;

function pageReady(){
	//alert("In pageready");
	var name = "";
	var id = "";
	var t = "";
	var debug = document.getElementById("debug");
	var picbox = document.getElementById("card-picture");
	var loginmessage = document.getElementById("signin-prompt");
	var hiddencontent = document.getElementById("signin-content");
	var isLoggedIn = checkIfLoggedIn();
	
	function checkIfLoggedIn()
	{
	  if(sessionStorage.getItem('Full name') == null){
		console.log("User is not signed in.");
		return false;
	  } else {
		console.log("User is signed in");
		console.log("Name: " + sessionStorage.getItem("Full name"));
		return true;
	  }
	}
	
	//Display the hidden content and hide the login message if user is signed in
	if(isLoggedIn){
		//console.log("Time to hide login message!");
		loginmessage.style.display = "none";
		hiddencontent.style.display = "block";
	}
	
	
	//Get the links
	var cardlinks = document.querySelectorAll(".hs-card-hover");
	
	//console.log(cardlinks);
	//console.log("cardlinks length: " + cardlinks.length);
	//console.log("Leeroy ID: " + cardlinks[0].id);
	
	/*I wanted to set each of the links in a for loop, but I don't know if it's possible
	because it just sets the id value of each link to the final id of the loop.
	Unfortunately this means it'll take a lot more coding to add new links.
	For the commented code, I used this stack overflow page:
	https://stackoverflow.com/questions/34110539/applying-a-mouseover-event-listener-inside-of-a-loop
	Answered by Josh Crozier (first answer) on December 5, 2015.
	
	for(var i = 0; i < cardlinks.length; i++){
		//For each card link, set the onmouseover and onmouseout functions.
		//id = cardlinks[i].id;
		alert("In loop i = " + i + "ID is " + cardlinks[i].id);
		id = cardlinks[i].id;
		//console.log("id: " + id);
		(function(i) {
			alert("In immediate function. cardlinks["+i+"] is " + cardlinks[i].id);
			cardlinks[i].addEventListener("mouseover", function() {
				clearTimeout(t);
				t = setTimeout(function() {
					//switchpic(id);
					var url = "https://art.hearthstonejson.com/v1/render/latest/enUS/256x/" + id + ".png";
					document.getElementById("card-picture").src = url;
				}, 500);
			});
			
		})(i);
	}*/
	
	cardlinks[0].onmouseover = function(){ switchpic("EX1_116") };
	cardlinks[0].onmouseout = revert;
	cardlinks[1].onmouseover = function(){ switchpic("EX1_564") };
	cardlinks[1].onmouseout = revert;
	cardlinks[2].onmouseover = function(){ switchpic("CS2_029") };
	cardlinks[2].onmouseout = revert;
	cardlinks[3].onmouseover = function(){ switchpic("EX1_279") };
	cardlinks[3].onmouseout = revert;
	cardlinks[4].onmouseover = function(){ switchpic("KAR_114") };
	cardlinks[4].onmouseout = revert;
	cardlinks[5].onmouseover = function(){ switchpic("OG_042") };
	cardlinks[5].onmouseout = revert;
	//cardlinks[6].onmouseover = function(){ switchpic("EX1_279") };
	//cardlinks[6].onmouseout = revert;
	
	function switchpic(id){
		
		var url = "https://art.hearthstonejson.com/v1/render/latest/enUS/256x/" + id + ".png";
		
		document.getElementById("card-picture").src = url;
	}
	
	function revert(){
		document.getElementById("card-picture").src = "images/whitebox.png";
	}
}