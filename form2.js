 
 
 var firebaseConfig = {
    apiKey: "AIzaSyDUFPWhNV56mxLr17TYqASRil5ZYJ8ru6E",
    authDomain: "weblogin-c6d9a.firebaseapp.com",
    databaseURL: "https://weblogin-c6d9a.firebaseio.com",
    projectId: "weblogin-c6d9a",
    storageBucket: "weblogin-c6d9a.appspot.com",
    messagingSenderId: "637480198318",
    appId: "1:637480198318:web:a3e2d296ee2b34b5518d3f",
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  const auth = firebase.auth();
 
 function login(){
     
	 var email = document.getElementById("email");
		var password = document.getElementById("password");
   
           const promise = auth.signInWithEmailAndPassword(email.value, password.value);
		   promise.catch(e => alert(e.message));
		   alert("Signed In " + email);
 }
 
 auth.onAuthStateChanged(function(user){
    
	if(user){
		var email = user.email;
		alert("Active User " + email);
	}else{
	 alert("No Active User");
	}
 })