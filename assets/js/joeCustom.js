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
		$(".main-banner").addClass("homePage");
	}
	
	if (window.location.origin + "/about/" == window.location.href ) {
		$(".fullSpanCont").addClass("about");
	}
	
	if (window.location.href.indexOf('blog') > -1) {
		$("#content").addClass("blogPage");
		$("#content > div").removeClass("container");
		$("#content > div > dev").removeClass("container");
		$("#content").find($(".main-content-area")).removeClass("col-sm-12");
		$("<article id='blog' class='page type-page status-publish hentry'><div class='detail-wrap'><header class='entry-header'><h1 class='entry-title'>Musings</h1></header><div class='entry-content'></div></div></article>").prependTo($("#content").find($(".main-content-area")));
	}
	
	if (window.location.origin + "/contact/" == window.location.href ) {
		$(".entry-content > div").addClass("contactCont");
		//$(".main-banner").addClass("homePage");
	}
	
	
	
	var arr = [1, 2, 3];
	a = 3;
	$("#polaroidSlider").data( "slideLeft", 0 );
	$(document).on("click", ".next", function () {
		a++;
		arr.push(a); a++;
		arr.push(a); a++;
		arr.push(a); a++;
		
		console.log(arr);
		var i = "next";
		var cnt = $("#polaroidSlider").data("slideLeft");
		//console.log("here");
		counteritems(i, cnt, arr);
	});		
	
	$(document).on("click", ".prev", function () {
		i = "prev";
		var cnt = $("#polaroidSlider").data("slideLeft");
		counteritems(i, cnt);
	});			
	
	function counteritems (clicked, num, arrayitems) {
		if (clicked == "next") {
			num+=100;
			
			let text = num.toString();
			text = text.charAt(0);
			//console.log(text);
			item = parseInt(text);
			//console.log(item);
			
			itemreferencess = arr.slice(Math.max(arrayitems.length - 6, 0))
			console.log(itemreferencess);
				var dslides1 = $('.items' + itemreferencess[0]).clone();
				var dslides2 = $('.items' + itemreferencess[1]).clone();
				var dslides3 = $('.items' + itemreferencess[2]).clone();
				
				
				//console.log(dslides2);
				//console.log(dslides3);
	
			items = arr.slice(Math.max(arrayitems.length - 3, 0))
			console.log(items);
				var one = items[0];
				var two = items[1];
				var three = items[2];
				
				dslides1.addClass("items" + one);
				dslides2.addClass("items" + two);
				dslides3.addClass("items" + three);
				
				dslides1.removeClass("items" + itemreferencess[0]);
				dslides2.removeClass("items" + itemreferencess[1]);
				dslides3.removeClass("items" + itemreferencess[2]);
				
				console.log(dslides1);
				
			
				
				dslides1.appendTo("#polaroidSlider");
				dslides2.appendTo("#polaroidSlider");
				dslides3.appendTo("#polaroidSlider");
				
				// if (arrayitems.indexOf(item += 3) === 1) {
				// 	$("#polaroidSlider .containerWrapper:3n+3").removeClass("items1").addClass("items" + text);
				// }
				// var middleitem = item + 1;
				// if (arrayitems.indexOf(middleitem += 3) == 1) {
				// 	$("#polaroidSlider .containerWrapper:3n+4").removeClass("items1").addClass("items" + text);
				// }
				// var enditem = item + 1;
				// if (arrayitems.indexOf(enditem += 3) == 1) {
				// 	$("#polaroidSlider .containerWrapper:5n+3").removeClass("items1").addClass("items" + text);
				// }
				
				console.log()
				//dslides.removeClass('.items1').addClass()
				
				
			//}
		} else if (clicked == "prev") {
			 		//
			 	num-=100;
			     	//} //else {
			 // 	num = 100;
			 // }
			//if (num == 0) {
				// var dslides1 = $('.items1').clone();
				// var dslides2 = $('.items2').clone();
				// var dslides3 = $('.items3').clone();
				// 
				// dslides3.prependTo("#polaroidSlider");
				// dslides2.prependTo("#polaroidSlider");
				// dslides1.prependTo("#polaroidSlider");
			//}
		}
		if (num >= 0) {
			$("#polaroidSlider").data( "slideLeft", num );
			var lft = $("#polaroidSlider").data( "slideLeft");
			lft = -Math.abs(lft);
			$("#polaroidSlider").css('left', lft + "vw");
		}
		console.log(lft);
		
		}	
	
});