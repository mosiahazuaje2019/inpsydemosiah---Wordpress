var userListBtn = document.getElementById("users-list-btn");
var usersListContainer = document.getElementById("users-lists-container");

  userListBtn.addEventListener("click", function() {
	
    var ourRequest = new XMLHttpRequest();
    console.log("Has hecho click")
    ourRequest.open('GET', 'https://jsonplaceholder.typicode.com/users');
    ourRequest.onload = function() {
    	//console.log("IN");
      if (ourRequest.status >= 200 && ourRequest.status < 400) {
        var data = JSON.parse(ourRequest.responseText);
        createHTML(data);
        console.log(data);
        //userListBtn.remove();
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
  	console.log("Genera tabla")
  	var ourHTMLString = '';
  	for ( i=0; i<data.length; i++ ){
  		ourHTMLString += '<tr><td onclick="alert();">'+data[i].id+'</td><td>'+data[i].name+'</td><td>'+data[i].username+'</td></tr>';
  	}
  	console.log(ourHTMLString);
  	usersListContainer.innerHTML = ourHTMLString;
  }
