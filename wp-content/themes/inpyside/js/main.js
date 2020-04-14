var userListBtn = document.getElementById("users-list-btn");
var usersListContainer = document.getElementById("users-lists-container");
var title = document.getElementById("exampleModalLabel");
var username = document.getElementById("username");
var address = document.getElementById("address");
var phone = document.getElementById("phone");
var email = document.getElementById("email");
var company = document.getElementById("company");

  userListBtn.addEventListener("click", function() {
	
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://jsonplaceholder.typicode.com/users');
    ourRequest.onload = function() {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        createHTML(data);
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };

    ourRequest.onerror = function() {
      console.log("Connection error");
    };	
    ourRequest.send();
  });	

    function createHTML( data ) {
	  	var ourHTMLString = '';
	  	for ( i=0; i<data.length; i++ ){
	  		ourHTMLString += '<tr onclick="getData('+data[i].id+');"><td><a href="#">'+data[i].id+'</a></td><td><a href="#">'+data[i].name+'</a></td><td><a href="#">'+data[i].username+'</a></td></tr>';
	  	}
  		usersListContainer.innerHTML = ourHTMLString;
  	}

  function getData( params ){
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://jsonplaceholder.typicode.com/users/'+params);
    ourRequest.onload = function() {
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        createModalHTML(data);
      } else {
        console.log("We connected to the server, but it returned an error.");
      }
    };

    ourRequest.onerror = function() {
      console.log("Connection error");
    };	
    ourRequest.send();
  }

  function createModalHTML( data ) {
  	console.log(data);
  	var ourHTMLString = '';
	title.innerHTML = data.name;
	username.innerHTML = data.username;
	address.innerHTML = data.address.street+' '+data.address.city;
	phone.innerHTML = data.phone;
	email.innerHTML = data.email;
	company.innerHTML = data.company.name;
  }

  function close(){
  	alert("Salio")
  }
  //Activate Modal
  $('#myModal').on('shown.bs.modal', function () {
  	$('#myInput').trigger('focus')
  })