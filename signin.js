//From URL https://developers.google.com/identity/sign-in/web/

function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();
	
	console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	console.log('Full Name: ' + profile.getName());
	console.log('Given Name: ' + profile.getGivenName());
	console.log('Family Name: ' + profile.getFamilyName());
	console.log("Image URL: " + profile.getImageUrl());
	console.log("Email: " + profile.getEmail());
	
	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	console.log("ID Token: " + id_token);
	
	sessionStorage.setItem("Full name", profile.getName());
	sessionStorage.setItem("Given name", profile.getGivenName());
	sessionStorage.setItem("Family name", profile.getFamilyName());
	sessionStorage.setItem("Image URL", profile.getImageUrl());
	sessionStorage.setItem("Email", profile.getEmail());
}

function signOut(){
	sessionStorage.clear();
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.SignOut().then(function(){
		console.log("User signed out.");
	});
}