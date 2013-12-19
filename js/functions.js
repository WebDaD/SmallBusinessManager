$( document ).ready(function() {
	//TODO: initialze page, basic functions here
	
	// handlers for Navigation
    $('#navigation').on('click', ' .nav_button', function(evt) {
        evt.preventDefault();
        //TODO: call function in $(this).data("link") to load module ajax call
    });
});