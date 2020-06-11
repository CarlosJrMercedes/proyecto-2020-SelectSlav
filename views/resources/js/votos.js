$(document).ready(function(){
    $("#tblVotos").DataTable();
});

function reacargar(){
    location.reload();
}

$(document).on("click","#verInactivos", function(){
    $("#tblActivos").attr("hidden",true);
    $("#regresar").attr("hidden",false);
       $.ajax({
           type: "POST",
           url : "votosInactivos.php",
           data: "tblInactivos=yes"
       }).done(function(res){
           $("#tblInac").html(res);
           
       }).fail(function(){});
});

$(document).on("click","#regresar", function(){
   location.reload();
});



function desavilitarVoto(){

    var id = $("#id").val();
    $.ajax({
        type:"POST",
        data:"desactivar=yes"+"&idVoto="+id,
        url : "mantenimientoVoto.php"
    }).done(function(res){
        if(res == 1){
            Swal.fire({
                icon: 'success',
                title: 'Registro anulado',
                showConfirmButton: false,
                timer: 1300
            });
            $("#id").val("");
            window.setTimeout("reacargar()",1400);
        }else{
            Swal.fire({
                icon: 'error',
                title: 'El registro no fue anulado',
                showConfirmButton: false,
                timer: 1300
            });
            $("#id").val("");
            window.setTimeout("reacargar()",1400);
        }


        
    }).fail(function(){
        
    });
 }

 function habilitarUsu(){

    var activarVoto = $("#activarVoto").val();
    $.ajax({
        type: "POST",
        url : "votosInactivos.php",
        data: "activarVoto="+activarVoto
    }).done(function(res){

        Swal.fire({
            icon: 'success',
            title: 'El registro validado',
            showConfirmButton: false,
            timer: 1300
        });
        $("#tblInac").html(res);
        
    }).fail(function(){});
 }