jQuery(document).ready(function($) {

    //BACKTOTOP SMOOTH SCROLL
	$('a.backtotop').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
				scrollTop: target.offset().top
			}, 800);
			return false;
			}
		}
	});

	$('#text-2').addClass('coupon');
	$('#text-6').addClass('coupon');
	$('#text-7').addClass('coupon');
	$('#text-8').addClass('form');
	$('#text-3').addClass('form');
	$('#text-4').addClass('why-us');
	$('#text-5').addClass('hours');
	$('#menu-item-173').addClass('logo');


	$('.hero-slider').slick({
		infinite:true,
		autoplay:true,
		fade:true,
		arrows:true,
		autoplaySpeed:4500,
		speed:1000
	});

	$('.test-slider').slick({
		infinite:true,
		autoplay:true,
		autoplaySpeed:6500,
		arrows:false,
		dots:true,
		slidesToShow:2,
		speed:2500,
		responsive: [
			{
				breakpoint:768,
				settings: {
					slidesToShow:1
				}
			}
		]
	});

	AOS.init();

	var d = new Date();
    var n = d.getDay();
    n = n>0 ? n-1 : 6;
    $('.hours li').eq(n).addClass('active');

    $('.gallery-item').magnificPopup({
    	delegate: 'a',
    	type: 'image',
    	tLoading: 'Loading image #%curr%...',
    	mainClass: 'mfp-img-mobile',
    	gallery: {
    		enabled:true,
    		navigateByImgclick:true,
    		preload: [0,1]
    	}
    });

});

const nav = document.querySelector('.navbar-default');
var topOfNav = nav.offsetTop;

function fixNav() {
	if(window.scrollY >= topOfNav) {
		document.body.style.paddingTop = nav.offsetHeight + 'px';
		document.body.classList.add('fixed-nav');
	} else {
		document.body.style.paddingTop = 0;
		document.body.classList.remove('fixed-nav');
	}
}

window.addEventListener('scroll', fixNav);

function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 43.1076019, lng: -88.0812507},
		scrollwheel:false,
		zoom:8,
		mapTypeId:'roadmap'
	});
	var features =[
		{
			position:new google.maps.LatLng(43.3678771,-88.0673914),
			type:'info'
		},
		{
			position:new google.maps.LatLng(43.0053489, -88.2743512),
			type:'info'
		},
		{
			position:new google.maps.LatLng(43.0580569, -88.1075125),
			type:'info'
		},
		{
			position:new google.maps.LatLng(42.7298012, -87.8580762),
			type:'info'
		},
		{
			position:new google.maps.LatLng(42.5879923, -87.9372616),
			type:'info'
		},
		{
			position:new google.maps.LatLng(43.3678056, -88.3696524),
			type:'info'
		},
		{
			position:new google.maps.LatLng(42.531546, -88.6033047),
			type:'info'
		},
		{
			position:new google.maps.LatLng(44.132189, -91.5542829),
			type:'info'
		},
		{
			position:new google.maps.LatLng(43.0060995, -88.823205),
			type:'info'
		},
		{
			position:new google.maps.LatLng(43.4623502, -89.5352255),
			type:'info'
		},
		{
			position:new google.maps.LatLng(43.0697578, -89.5640529),
			type:'info'
		},
		{
			position:new google.maps.LatLng(42.6699461, -89.214272),
			type:'info'
		}
	];
	features.forEach(function(feature) {
		var marker = new google.maps.Marker({
			position:feature.position,
			map:map
		});
	});
}

$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if(scroll >= 1000) {
		$('.van-area img').addClass('animated');
	}
});
