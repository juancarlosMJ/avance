$(document).ready(function(){
    $('#tablaPersonasLoad').load('vistas/personas/tablaPersonas.php');
});
function agregarNuevaPersona() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregaPersona').serialize(),
        url: "procesos/personas/agregarPersona.php",
        success:function (respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaPersonasLoad').load('vistas/personas/tablaPersonas.php');
                $('#frmAgregaPersona')[0].reset();
                swal(":)","agregado con exito!","success");
            } else {
                swal(":(","no se pudo agregar"+respuesta,"error");
            }
        }
    });
    return false;
}

function eliminarPersona(idPersona){
    swal({
        title: "Estas seguro de eliminar esta persona?",
        text: "Una vez eliminada, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "POST",
                data: "idPersona="+idPersona,
                url: "procesos/personas/eliminarPersona.php",
                success:function (respuesta) {
                    respuesta = respuesta.trim();
                    if (respuesta == 1) {
                        $('#tablaPersonasLoad').load('vistas/personas/tablaPersonas.php');
                        swal(":)","se elimino con EXITO !","success");
                    } else {
                        swal(":(","no se pudo eliminar"+respuesta,"error");
                    }
                }
            });
        } 
    });
}
function obtenerDatos(idPersonas) {
    $.ajax({
        type: "POST",
        data: "idPersona="+idPersonas,
        url: "procesos/personas/obtenerDatos.php",
        success:function(respuesta) {
            respuesta = jQuery.parseJSON(respuesta);
            $('#paternou').val(respuesta['paterno']);
            $('#maternou').val(respuesta['materno']);
            $('#nombreu').val(respuesta['nombre']);
            $('#telefonou').val(respuesta['telefono']);
            $('#emailu').val(respuesta['email']);
            $('#idpersona').val(respuesta['idpersona']);
        }
    });
}
function actualizarPersona() {
    $.ajax({
        type:"POST",
        data: $('#frmActualizaPersona').serialize(),
        url: "procesos/personas/actualizarPersona.php",
        success:function(respuesta) {
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaPersonasLoad').load('vistas/personas/tablaPersonas.php')
                swal(":)","Se actualizo con exito!","success")
            } else {
                swal(":(","no se pudo actualizar"+respuesta,"error");
            }
        }
    });
    return false;
}