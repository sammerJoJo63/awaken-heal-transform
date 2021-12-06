jQuery(document).ready(function ($) {
	//console.log("hello world");
	$("header#masthead .container .row .col-sm-12").prepend("<a href='https://joe.dev.samcarne.com/'><img id='siteLogo' src='	https://joe.dev.samcarne.com/wp-content/themes/joe_dulany_theme/assets/img/joe-trans-logo-full.svg'></a>");
	
	$("header#masthead .container .row .col-sm-12").addClass("hdr");
	
	$(".credit-text").html("Made with love by <a href='https://samcarne.com/'>Sam Carne</a>");
});