
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

$(window).scroll(()=> {    
	var scroll = $(window).scrollTop();
	if (scroll >= 150) {			
		$("#toTop").show();
	} else {			
		$("#toTop").hide();
	}
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



var windowWidth = $(window).width();
if(windowWidth < 768){
	new WOW().init();
}

ma5menu({
	position: 'right',
	closeOnBodyClick: true
});
$(document).ready(function() {
	$('.feedback_container .content').each(function() {
		if($(this).text().length > 140){
			$(this).text($(this).text().substr(0,137));
			$(this).append('...');
		}
	});
	$('.single-service p').each(function() {
		if($(this).text().length > 125){
			$(this).text($(this).text().substr(0,123));
			$(this).append('...');
		}
	});
	$('#gallerydata li a').click(function(event) {
		$(this).addClass('active')
		$(this).parent().siblings().find('a').removeClass('active');
	});

	$('[data-fancybox="photo-gallery"]').fancybox({});
	$('.datepicker').dateDropper();
	$("#compare-img").twentytwenty();

	
});