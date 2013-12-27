$( document ).ready(function() {
	//The Page is loaded. The USer is not logged in.
	//TODO: Check the cookies
	
	//Hide all navigation
	 $('#navigation').find('li').hide();
	

    
    //handlers for login
    $('#login').on('click', 'img.login', function (evt){
	   evt.preventDefault();
	   //TODO: load login modal dialog Login, pwd. -> Send login, md5(pwd) to php/login/login.php
	   //if ok: set logged in and  Load all avaiable Dashboards (mod_folder/php/dashboard.php) by appending them to #content and show all avaible modules
	   //set sessions
	   //change button
    });
    $('#login').on('click', 'img.logout', function (evt){
	   evt.preventDefault();
	   $.session.clear();
	   $('#navigation').find('li').hide();
	   $("#login img").removeClass("logout");
	   $("#login img").addClass("login");
	   $("#login img").attr("src", "img/lock.png");
	   $("#login img").attr("alt", "Login");
	   $("#login img").attr("title", "Login");
	   $('#content').text("You have been successfully logged out.");
    });
});
/*
Usage of md5:
$.md5(str)

Usage of Session
$.session.set('some key', 'a value');

$.session.get('some key');
> "a value"

$.session.clear();

$.session.get('some key');
> undefined

$.session.set('some key', 'a value').get('some key');
> "a value"

$.session.remove('some key');

$.session.get('some key');
> undefined
*/