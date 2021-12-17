/**

Authors - Austin Rix & Sam Carne

Dynamic layout for dynamic blocks / Masonry Layout


*/
var b;
var cont;
var colCount = 7; // blocks in column 
var colWidth; 
var margin = 60; // spacing between blocks
var windowWidth;
var block;
var padding;
var blocksOnLoad = 25;
var maxHeight; // maxHeight gets the html height for footer position
var blocks = [];
var paddingTop = 50;
var timers = [];
var intCnt = 1;
/*
$(window).load(setupBlocks);
$(window).load(function() { 
	// on load
		cont = $("#main");
		if (navigator.platform.toUpperCase().indexOf('WIN')!==-1) {
			cont.css("margin-left", 15);
		} else {
			cont.css("margin-left", 8);
		}
		setupBlocks();
	
}); 
*/

jQuery(document).ready(function ($) {//doc ready
	
	block = $("article.post");
	cont = $("#main");
/*
	 if(checkMobile()){
		paddingTop = 15;
		cont.css("margin-left", 15);
*/
//}
/*
	$(".footerBtn").click(function(){
		blocksOnLoad += 15;
		setupBlocks();   
	});
*/
	
});

jQuery(document).ready(function ($) { // resized window adjust
	$(window).resize(function(){
		var intString = "int" + intCnt;
		intCnt++;
		timers.push(intString);
		setTimeout(function(){
			timers.pop();
			if(timers.length == 0){
				if(checkMobile()){
					paddingTop = 35;
				}
				else{
					paddingTop = 50;
				}
				setupBlocks();
			}  
		},100);
	   });


function setupBlocks() { // get Dimensions 
	block = $("article.post");
	cont = $("#main");
	windowWidth = cont.width();
	colWidth = block.outerWidth();
	blocks = [];
	colCount = Math.floor(windowWidth/(colWidth+margin*2));
	for(var i=0;i<colCount;i++){
		blocks.push(margin);
	}
	positionBlocks();
}

function positionBlocks() { // set the blocks in place
	b = $("article.post");
	cont = $("#main");
	 maxHeight = 1;
	 block = b.outerWidth();
	 padding = (cont.width() - (colCount*(block + margin)))/2; // padding for center
	 var cnt = 1;
	 b.each(function(){
		if(cnt >= blocksOnLoad){
			$(this).css("display", "none");
		} else {
			$(this).css("display", "block");
			var min = Array.min(blocks) ;
			var index = $.inArray(min, blocks);
			var leftPos = margin+(index*(colWidth+margin));
			var down = 20 + min;
			$(this).css({
				'left':leftPos+padding-margin+'px',
				'top':min + paddingTop + 'px'
			});
			blocks[index] = min+$(this).outerHeight()+margin;

			var temp =  min+$(this).outerHeight()+margin; 
			if(temp > maxHeight) 
				maxHeight= temp;                
		}
		
		//set height of container holding the elements
		cont.height(maxHeight + 125);
		//cnt++;        
	});
   
   //footer code if height of container isn't applied for some reason
/*
	var footerSize = $("footer").height();
	var wWidth = $(window).width(); //Adjust footer to bottom  
	$("footer").css("position", "absolute");
	$("footer").css("top", maxHeight + footerSize);
	$("footer").css("width", wWidth); 
*/   
}

function checkMobile(){
	if($(window).width() < 840){        
		return true;
	}
	return false;
}

// Function to get the Min value in Array
Array.min = function(array) {
	return Math.min.apply(Math, array);
};


setupBlocks();
});