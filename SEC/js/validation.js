jQuery(document).on('submit','formlg',function(event){
event.preventDefault();
jQuery.ajax({

	url:'../login.php',
	type:'POST',
	dataType:'json',
	data:$(this).serialize(),
	beforeSend:function(){
			$('.btnlg').val('Validando....');
	}

	})
	.done(function(respuesta){
		console.log(respuesta);
		if (!respuesta.error) {
			if(respuesta.tipo == '1'){
				location.href = '../menu.php'; // Redirigir a la página de administrador
			} else if(respuesta.tipo == '2'){
				location.href = '../Vista.php'; // Redirigir a la página de usuario común
			} else if(respuesta.tipo == '3'){
				location.href = '../tablag.php'; // Redirigir a la página de promoción
			} else if(respuesta.tipo == '4'){
				location.href = '../VIsta.php'; // Redirigir a la página de gestión
			} else if(respuesta.tipo == '5'){
				location.href = '../vistasec.php'; // Redirigir a la página de jurídico
			}
		}
		else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
	
			},3000);
			$('.btnlg').val('Iniciar Sesion');
		}
	})
	.fail(function(resp){
	console.log(resp);

	})
	.always(function(){

	console.log("complete");


		});	
});