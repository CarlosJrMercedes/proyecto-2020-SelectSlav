$(document).ready(function(){
    $("#tblJuntas").DataTable();
});

$(document).on("click","#cancelJR", function(){
   
   $("#nombre").val("");
   $("#centro").val("0");
   
 

   $("#updaJunta").attr("hidden",true);
   $("#delJunta").attr("hidden",true);
   $("#desactivarJR").attr("hidden",true);
   $("#ingJR").attr("hidden",false);
});


function habilitarBtn(){

   $("#updaJunta").attr("hidden",false);
   $("#delJunta").attr("hidden",false);
   $("#desactivarJR").attr("hidden",false);
   $("#ingJR").attr("hidden",true);

}

function reacargar(){
    location.reload();
  }
    

    $(document).on("click","#ingJR", function(){
    
        var nombre = $("#nombre").val();
        var centro = $("#centro").val();
    
    
        if(nombre.trim() != "" && centro != "0"){
            $.ajax({
                type : "POST",
                data :"nombre="+nombre+"&centro="+centro+"&accion=I",
                url : "mantenimientoJuntaReceptora.php"
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

 $(document).on("click","#updaJunta", function(){
    
    var nombre = $("#nombre").val();
    var centro = $("#centro").val();
    var id_Junta = $("#id_Junta").val();


    if(nombre.trim() != "" && centro != "0" && id_Junta.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombre="+nombre+"&centro="+centro+"&id_Junta="+id_Junta+"&accion=M",
            url : "mantenimientoJuntaReceptora.php"
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

 $(document).on("click","#delJunta", function(){
    var id_Junta = $("#id_Junta").val();
    Swal.fire({
        title: 'Esta seguro?',
        text: "Si elimina ester egistro, no podrá recuperarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, eliminar!'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                type : "POST",
                data :"id_Junta="+id_Junta+"&accion=E",
                url : "mantenimientoJuntaReceptora.php"
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

 $(document).on("click","#desactivarJR", function(){
    var id_Junta = $("#id_Junta").val();
    Swal.fire({
        title: 'Esta seguro?',
        text: "Usted podra reactivar este registro en la opcion de 'Ver registros desactivados' ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, Desactivar!'
      }).then((result) => {
        if (result.value) {
            $.ajax({
                type : "POST",
                data :"id_Junta="+id_Junta+"&accion=D",
                url : "mantenimientoJuntaReceptora.php"
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
    $("#formJunta").attr("hidden",true);
    $("#regresar").attr("hidden",false);
       $.ajax({
           url : "juntasInactivas.php"
       }).done(function(res){
           $("#tblInac").html(res);
           
       }).fail(function(){});
});

$(document).on("click","#regresar", function(){
   location.reload();
});


function habilitarJunta(){

   var id_Junta = $("#habilitarJunta").val();
   $.ajax({
       type:"POST",
       data:"activar=yes"+"&id_Junta="+id_Junta,
       url : "juntasInactivas.php"
   }).done(function(res){
       $("#habilitarJunta").val("");
       $("#tblInac").html(res);
       Swal.fire({
        icon: 'success',
        title: 'Registro avilitado con exito',
        showConfirmButton: false,
        timer: 1300
      });
       
   }).fail(function(){});

}
