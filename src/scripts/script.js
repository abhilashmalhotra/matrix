
$(document).ready(function() { $('body').bootstrapMaterialDesign(); });
$('[data-toggle="tooltip"]').tooltip();

function modalAnimation(modal, animation) {
	$('#'+ modal +' .modal-dialog').attr('class', 'modal-dialog modal-dialog-centered modal-lg ' + animation + '  animated');
};

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

AOS.init();	
ma5menu({
	position: 'right',
	closeOnBodyClick: true
});
