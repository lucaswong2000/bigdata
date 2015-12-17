$("#login").click(function(){
	var username = $("#username").val();
	var password = $("#password").val();

	$.getJSON("./data/user.json", function( json ){
		//console.log(arguments);
		//alert("hello");
		var login = false;

		for(var i = 0; i<json.length; i++)
		{
			if(username.localeCompare(json[i].username) == 0 &&  password.localeCompare(json[i].password)== 0)
			{
				login = true;
			}

		}
		alert(login);
		if(login == true)
		{
			document.cookie="username="+username;
			window.location = "./index.html";
		}

	});
});