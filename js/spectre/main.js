$(function() {
	// jQuery Goes here!
	//when the user clicks on the menu icon, display the menu.
	$('#menu-icon').on('click', function(){
		$('.nav-header').toggleClass('show-menu');
		$(this).toggleClass('fa-times fa-bars');
	})

	$('.nav-header li').on('click', function(){
		$('.nav-header').removeClass('show-menu');
		$('#menu-icon').toggleClass('fa-times fa-bars');
	})
	//show icon when the menu is shown to indicate how they can close the menu
	//then hide the menu when you click on the icon


});