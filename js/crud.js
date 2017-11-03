$(document).ready(function() {
	//$("#alertas").hide();

	$("#btn_usuarios").click(function() {
		$.ajax({
			url: "../ajax/crud.php"
		}).done(function(html){
			$("#contenido").html(html)
		}).fail(function(){
			alert("Error Al Cargar El Contenido...");
		});
	});
});



function editar (id) {
	 $.ajax({
	 	url: "../ajax/crud.php",
	 	type: "POST",
	 	data: {operacion: 'update', id: id}
	 }).done(function (html){
	 	$("#contenido").html(html);
	 }).fail(function (){
	 	alert("Error Al Cargar El Contenido");
	 });
}


function eliminar(id, este){
	var vacio = "";

	if (confirm("Deseas Borrar Este Registro...?")) {
		$.ajax({
			url: "../func/func-crud.php",
			type: "POST",
			data: {id: id, operacion: 'delete', nombre: vacio, direccion: vacio, telefono: vacio, email: vacio, pwd: vacio }
		}).done(function (msg){
			alert(msg);
			//$("#alertas").show().html('Usuario Eliminado...').fadeOut(3000);
			$(este).parent().parent().remove();
		}).fail(function(){
			alert("Error Enviado Los Datos... Intente Nuevamente...");
		});
	}

	
}