var windowHeight;
var mianHeaderHeight;
function dynaValue () {
 	windowHeight = $(window).height();
 	mianHeaderHeight = $('header[role="main-header"]').outerHeight();

 	// Add Main Slider min-height
 	$('section[role="main-slider"]').css('height', windowHeight - mianHeaderHeight);
}

// Clients Slider Indicators
function clientSlider () {
	var sliderClient = $(".client-list");
	sliderClient.append("<ol class='carousel-indicators'></ol>");
	var indicators = $(".carousel-indicators"); 
	sliderClient.find(".carousel-inner").children(".item").each(function(index) {
		(index === 0) ? 
		indicators.append("<li data-target='#slider-client' data-slide-to='"+index+"' class='active'></li>") : 
		indicators.append("<li data-target='#slider-client' data-slide-to='"+index+"'></li>");

	}); 
	$('.client-list').carousel({
		interval: 10000
	});
}

// Header Fixed
function headerFixed () {
  var windowScroll = $(window).scrollTop();

   if ( windowScroll > mianHeaderHeight){
        $('header[role="main-header"]').addClass('fixed-header');
    } else {
         $('header[role="main-header"]').removeClass('fixed-header');
    }
}

// hamburgerMenu
function hamburgerMenu () {
	$('.hamburger-icon').on('click', function(){
		$('header[role="main-header"] nav[role="main-menu"]').slideToggle();
	});
}

//Document Ready
$(function(){
	dynaValue();
	clientSlider();
	hamburgerMenu();
});

// Window Scroll 
$(window).scroll(function(){
	headerFixed();
});

// Window Load
$(window).on('load', function(){
	AOS.init({
		offset: 100,
	  easing: 'ease-in-out',
	  delay: 200,
	  placement: 'center-center'
	});
});

// Window resize
$(window).on('resize',function(){
	dynaValue();
});