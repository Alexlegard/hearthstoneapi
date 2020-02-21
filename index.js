window.onload = pageReady;

function pageReady(){
	//alert("In pageready");
	var name = "";
	var debug = document.getElementById("debug");
	var picbox = document.getElementById("card-picture");
	
	//Get the links
	//var cardlinks = document.getElementsByClassName("hs-card-hover");
	var cardlinks = document.querySelectorAll(".hs-card-hover");
	
	console.log(cardlinks);
	console.log("cardlinks length: " + cardlinks.length);
	console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	
	
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
	cardlinks[5].onmouseover = function(){ switchpic("EX1_144") };
	cardlinks[5].onmouseout = revert;
	cardlinks[6].onmouseover = function(){ switchpic("EX1_279") };
	cardlinks[6].onmouseout = revert;
	
	function switchpic(id){
		
		var url = "https://art.hearthstonejson.com/v1/render/latest/enUS/256x/" + id + ".png";
		
		document.getElementById("card-picture").src = url;
	}
	
	function revert(){
		document.getElementById("card-picture").src = "images/whitebox.png";
	}
}