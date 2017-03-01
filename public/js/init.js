$(document).ready(function(){

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	// $(".button-collapse").sideNav();

	$('.slider').slider({full_width: true});

	$('select').material_select();

	Materialize.updateTextFields();

	$('#textarea').trigger('autoresize');

	$('.modal').modal({ dismissible: false   });

  	$('.modal_lido').modal({ dismissible: true  });

    $('#texto').trigger('autoresize');

    swal({
  title: "Error!",
  text: "Here's my error message!",
  type: "error",
  confirmButtonText: "Cool"
});


	// document.getElementById('e').value = new Date().toISOString().substring(0, 10);
	// document.getElementById('f').value = new Date().toISOString().substring(0, 10);

});



// ----------------------------------



