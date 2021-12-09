jQuery(document).ready(function ($) {
	//console.log("hello world");
	$("header#masthead .container .row .col-sm-12").prepend("<a href='https://joe.dev.samcarne.com/'><img id='siteLogo' src='	https://joe.dev.samcarne.com/wp-content/themes/joe_dulany_theme/assets/img/joe-trans-logo-full.svg'></a>");
	
	$("header#masthead .container .row .col-sm-12").addClass("hdr");
	
	var currentTime = new Date();
	var year = currentTime.getFullYear();
	
	$(".copyright-text").html("Copyright &#169;Joe Dulany " + year + ". All rights reserved.");
	
	$(".credit-text").html("Made with love by <a href='https://samcarne.com/'>Sam Carne</a>");
	
	if (window.location.origin + "/" == window.location.href ) {
		$("#content").addClass("homePage");
	}
});