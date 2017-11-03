$(document).ready(function() {
	
	$("#alerta").hide();

	$("#formulario").submit(function(e) {
		e.preventDefault();

		if ($("#pwd").val() !== $("#pwd2").val()) {
			$("#alerta").show().text('Las Contraseñas No Coinciden').attr('class', 'text-center');
			$("#pwd").focus();
			return;
		}

		var ope = 'insert';
		var id = '';

		if ($("#id").length > 0) {
			if ($("#id").val() !== "") {
				ope = 'update';
				id = $("#id").val();
			}
		}

		var nombre = $("#nombre").val();
		var direccion = $("#direccion").val();
		var telefono = $("#telefono").val();
		var email = $("#email").val();
		var pwd = $("#pwd").val();

		$.ajax({
			type: "POST",
			url: "../func/func-crud.php",
			data: {nombre: nombre, direccion: direccion, telefono: telefono, email: email, pwd: pwd, operacion: ope, id: id}
		}).done(function(msg){
			alert(msg);
			window.location.replace("../projects/project00x.php");
			//$("#alertas").show().html('Usuario Agregado...').fadeOut(3000);

			if (msg == "Datos De Usuario Actualizados Exitosamente...") {
				$.ajax({
					url: "../ajax/crud.php",
				}).done(function(html){
					$("#contenido").html(html);
					window.location.replace("../projects/project00x.php");
					//$("#alertas").show().html('Datos Actualizados...').fadeOut(3000);
				}).fail(function(){
					alert("Error Al Cargar El Contenido");
				});
			}else{
				$("#alerta").hide();
				$("#nombre").val('');
				$("#direccion").val('');
				$("#telefono").val('');
				$("#email").val('');
				$("#pwd").val('');
				$("#pwd2").val('');
			}
		}).fail(function(){
			alert("Se Ha Producido Un Error En El Envío, Consulte Con El Administrador");
		});
	});
});