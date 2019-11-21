$(document).ready(function () {
	$("#logo, #main-menu, #btn-anchor1, #btn-anchor2").on("click", "a", function (event) {
		event.preventDefault();
		var id = $(this).attr('href');
		var	top = $(id).offset().top
		$('body,html').animate({
			scrollTop: top
		}, 1000);
	});
});

$(document).ready(function() {
		$('.menu-trigger').click(function() {
		$('header nav ul').slideToggle(500);
	});
});

$('#catalog .catalog-items').slick({
	infinite: true,
  	slidesToShow: 4,
  	slidesToScroll: 1,
  	arrows: true,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	pauseOnHover: false
});

$('.catalog-mob .catalog-items').slick({
	infinite: true,
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: true,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	pauseOnHover: false
});

$('.portfolio-items').slick({
	infinite: true,
  	slidesToShow: 2,
  	slidesToScroll: 1,
  	arrows: false,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 3000,
	pauseOnFocus: false,
	pauseOnHover: false,
	dots: true
});

$('.testimotials-items').slick({
	infinite: true,
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: false,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 5000,
	pauseOnFocus: false,
	pauseOnHover: false,
	dots: true,
	fade: true
});

$('.instagram-mob .instagram-items').slick({
	infinite: true,
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: true,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnFocus: false,
	pauseOnHover: false
});


lightbox.option({
	'wrapAround': true
})