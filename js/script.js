$(document).ready(function () {
  	$('.contact').click(function() {
	  $('html, body').animate({
	    scrollTop: $("#contact").offset().top
	  }, 1000)
	}), 
  	$('.hardware').click(function (){
	    $('html, body').animate({
	      scrollTop: $("#hardware").offset().top
	    }, 1000)
  	}),
	$('div.home').click(function (){
	    $('html, body').animate({
	      scrollTop: $("#header").offset().top
	    }, 1000)
	})
});

