/*Makes the whole search result box clickable*/
(function( $ ) {
$( window ).load(function() {
	  "use strict";
	  $(document).delegate(".search_results", "click", function() {
	 window.location = $(this).find(".searchattr").attr("href");
  });
});

/*Edits the look of the search box*/

$(document).ready(function(){ 
	$( "#s" ).attr( "placeholder","" );
	$(".search_results").on({
	  mouseenter: function () {
		  $(this).find("a").css("text-decoration","underline");
	  },
	  mouseleave: function () {
		  $(this).find("a").css("text-decoration","none");
	  }
	});
	
	$('.search form').submit(function(e) {
	   if (!$('#s').val()) {
		   e.preventDefault();
		   $( "#s" ).attr( "placeholder","Type Inquiry Here" );
	   }       
	});
	
	/*Edits the look of the category boxes*/
	
	
	$(document).delegate(".category-spot", "click", function() {
	   window.location = $(this).find("a").attr("href")
	});
	
		$(document).delegate(".article-block", "click", function() {
	   window.location = $(this).find("a").attr("href");
	});
	
	/*Edits the look of the popular/recent article boxes*/
	
		$(".article-block").on({
	  mouseenter: function () {
		  $(this).find("a").css("text-decoration","underline");
	  },
	  mouseleave: function () {
		  $(this).find("a").css("text-decoration","none");
	  }
	});
	
	/*Resizes popular/recent article boxes to look appropriate on all screen sizes*/
	
	function resize(){
    $(".articleattr").text(function(index, currentText) {
		if($(window).width()<980)
		{
				return(currentText.substr(0, 30));
		}
	});
	};
	/*Adds search help on #s:focus on about page*/
	resize();
	$(window).resize(function(){
		resize();
	});
	
	  $('#searchresultinput #s').focusin(function(){
	  $('.search-help').css('display','block').fadeIn();
  });
  
  $('#searchresultinput #s').focusout(function(){
	  $('.search-help').css('display','none').fadeOut();
  });

});


}(jQuery));