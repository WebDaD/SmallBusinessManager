$( document ).ready(function() {
	//The Page is loaded. The USer is not logged in.
	//TODO: Check the cookies
	
	//Hide all navigation
	 $('#navigation').find('li').hide();
	
	//Handlers for Navigation
    $('#navigation').on('click', ' .nav_button', function(evt) {
        evt.preventDefault();
        //TODO: load php file in $(this).data("link") using ajax into #content
    });
    
    //handlers for login
    $('#login').on('click', ' .login', function (evt){
	   evt.preventDefault();
	   //TODO: load login modal dialog
	   //if ok: set logged in and  Load all avaiable Dashboards by appending them to #content and show all avaible modules
	   
    });
    $('#login').on('click', ' .logout', function (evt){
	   evt.preventDefault();
	   $.session.clear();
	   $('#navigation').find('li').hide();
	   $("#login").find("img").removeClass("logout");
	   $("#login").find("img").addClass("login");
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