$(document).ready(function(){
    $("#tblUsu").DataTable();
});

$(document).on("click","#cancelUsu", function(){
   $("#id").val("");
   $("#nombre").val("");
   $("#rol").val("0");
   $("#usuario").val("");
   $("#contra").val("");

   $("#modUsu").attr("hidden",true);
   $("#eliUsu").attr("hidden",true);
   $("#desactUsu").attr("hidden",true);
   $("#ingUsu").attr("hidden",false);
});

 
function habilitarBtn(){

   $("#modUsu").attr("hidden",false);
   $("#eliUsu").attr("hidden",false);
   $("#desactUsu").attr("hidden",false);
   $("#ingUsu").attr("hidden",true);

}
function reacargar(){
    location.reload();
  }

$(document).on("click","#ingUsu", function(){
    
    var nombre = $("#nombre").val();
    var rol = $("#rol").val();
    var usu = $("#usuario").val();
    var contra = $("#contra").val();


    if(nombre.trim() != "" && rol != "0" && usu.trim() != "" && contra.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombre="+nombre+"&rol="+rol+"&usu="+usu+"&contra="+contra+"&accion=I",
            url : "mantenimientoUsu.php"
        }).done(function(res){
            if(res == 1){

                Swal.fire({
                    icon: 'success',
                    title: 'Registro ingresado con exito',
                    showConfirmButton: false,
                    timer: 1300
                  });
                  window.setTimeout("reacargar()",1400);
            }else{
                Swal.fire("Error","Algo no esta bien","error");
            }
            
        }).fail(function(){});

    }else{
        Swal.fire("Info","complete todos los campos","error");
    }
 
 });



 $(document).on("click","#modUsu", function(){
    
    var nombre = $("#nombre").val();
    var rol = $("#rol").val();
    var usu = $("#usuario").val();
    var contra = $("#contra").val();
    var idUsu = $("#id").val();


    if(nombre.trim() != "" && rol != "0" && usu.trim() != "" && contra.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombre="+nombre+"&rol="+rol+"&usu="+usu+"&contra="+contra+"&idUsu="+idUsu+"&accion=M",
            url : "mantenimientoUsu.php"
        }).done(function(res){
            if(res == 1){

                Swal.fire({
                    icon: 'success',
                    title: 'Registro modificado con exito',
                    showConfirmButton: false,
                    timer: 1300
                  });
                  window.setTimeout("reacargar()",1400);
            }else{
                Swal.fire("Error","Algo no esta bien","error");
            }
            
        }).fail(function(){});

    }else{
        Swal.fire("Info","complete todos los campos","error");
    }
 });

 $(document).on("click","#eliUsu", function(){
    var idUsu = $("#id").val();
    Swal.fire({
        title: 'Esta seguro?',
        text: "Este registro no se recuperara",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, eliminar!'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                type : "POST",
                data :"idUsu="+idUsu+"&accion=E",
                url : "mantenimientoUsu.php"
            }).done(function(res){
                if(res == 1){
    
                    Swal.fire({
                        icon: 'success',
                        title: 'Registro eliminado con exito',
                        showConfirmButton: false,
                        timer: 1300
                      });
                      window.setTimeout("reacargar()",1400);
                }else{
                    Swal.fire("Error","Algo no esta bien","error");
                }
                
            }).fail(function(){});
        }
      });
 });

 $(document).on("click","#desactUsu", function(){

    var idUsu = $("#id").val();

    Swal.fire({
        title: 'Esta seguro?',
        text: "Este registro se puede activar nuevamente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, Desactivar!'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                type : "POST",
                data :"idUsu="+idUsu+"&accion=D",
                url : "mantenimientoUsu.php"
            }).done(function(res){
                if(res == 1){
    
                    Swal.fire({
                        icon: 'success',
                        title: 'Registro desactivado con exito',
                        showConfirmButton: false,
                        timer: 1300
                      });
                      window.setTimeout("reacargar()",1400);
                }else{
                    Swal.fire("Error","Algo no esta bien","error");
                }
                
            }).fail(function(){

            });
        }
      });
 });




 $(document).on("click","#verInactivos", function(){
     $("#tblActivos").attr("hidden",true);
     $("#formMantenimiento").attr("hidden",true);
     $("#regresar").attr("hidden",false);
        $.ajax({
            url : "usuariosInactivos.php"
        }).done(function(res){
            $("#tblInac").html(res);
            
        }).fail(function(){});
 });

 $(document).on("click","#regresar", function(){
    location.reload();
});


function habilitarUsu(){

    var id = $("#activarUsu").val();
    $.ajax({
        type:"POST",
        data:"activar=yes"+"&idUsu="+id,
        url : "usuariosInactivos.php"
    }).done(function(res){
        $("#activarUsu").val("");
        $("#tblInac").html(res);
        Swal.fire({
            icon: 'success',
            title: 'Registro activado con exito',
            showConfirmButton: false,
            timer: 1300
          });
    }).fail(function(){});
 
 }