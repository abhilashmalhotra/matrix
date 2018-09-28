
$(document).ready(function() { $('body').bootstrapMaterialDesign(); });
$('[data-toggle="tooltip"]').tooltip();

function modalAnimation(modal, animation) {
	$('#'+ modal +' .modal-dialog').attr('class', 'modal-dialog modal-dialog-centered modal-lg ' + animation + '  animated');
};

AOS.init({
	easing: 'ease-out-back',
	duration: 1000,
	disable: 'mobile'
});
// $(document).ready(function() {	
// 	$('#register').on('show.bs.modal', function (e) {
// 		modalAnimation('register', 'fadeIn');
// 	});
// 	$('#register').on('hide.bs.modal', function (e) {
// 		modalAnimation('register', 'fadeOut');
// 	});
// 	$('#login').on('show.bs.modal', function (e) {
// 		modalAnimation('login', 'fadeIn');
// 	});
// 	$('#login').on('hide.bs.modal', function (e) {
// 		modalAnimation('login', 'fadeOut');
// 	});

// 	$('#signUpCLick').click(function(event) {		
// 		$('#login').modal('hide');
// 		$('#register').modal('show');
// 	});
// 	$('#signInClick').click(function(event) {
// 		$('#register').modal('hide');		
// 		$('#login').modal('show');				
// 	});

// Link Scroll 

$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
	if (
		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		&& 
		location.hostname == this.hostname
		) {

		var target = $(this.hash);
	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

	if (target.length) {

		event.preventDefault();
		$('html, body').animate({
			scrollTop: target.offset().top
		}, 1000, function() {

			var $target = $(target);
			$target.focus();
			if ($target.is(":focus")) { 
				return false;
			} else {
				$target.attr('tabindex','-1');
				$target.focus();
			};
		});
	}
}
});

var windowWidth = $(window).width();
if(windowWidth < 768){
	new WOW().init();
}

ma5menu({
	position: 'right',
	closeOnBodyClick: true
});
