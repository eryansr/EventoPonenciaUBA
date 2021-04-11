function Asistente() {
	$.ajax({
		type: "POST",
		url: "procesos/mostrarAsistente.php",
		success: function (r) {
			$('#tablaDatos').html(r); // muestra la tabla con los datos de clientes
		}
	});
}

function eliminarAsistente(id_asist) {
	swal({ // script de alertas
		title: "¿Está seguro de eliminar este registro?",
		text: "Una vez eliminado no podrá recuperarse!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
                type: "POST",
                url: "procesos/eliminarAsistente.php",
                data:"id_asist=" + id_asist, // almacena datos es una cadena de texto
                success: function (r) {
                    if(r==1){
                        Asistente();
                        swal("¡Eliminado con Éxito!",":D","info");
                    } else {
                        swal("¡Error!", ":(", "error");
                    } 
                }
	       });
		} 
	});
}