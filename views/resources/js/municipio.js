$(document).ready(function(){
    $("#tblUsu").DataTable();
});

$(document).on("click","#cancelMunici", function(){
   
   $("#nombremun").val("");
   $("#dept").val("0");
   $("#idMuni").val("");
 

   $("#modifyMunici").attr("hidden",true);
   $("#deleteMunici").attr("hidden",true);
   $("#desactivarMunici").attr("hidden",true);
   $("#insertMunici").attr("hidden",false);
});


function habilitarBtn(){

   $("#modifyMunici").attr("hidden",false);
   $("#deleteMunici").attr("hidden",false);
   $("#desactivarMunici").attr("hidden",false);
   $("#insertMunici").attr("hidden",true);

}

function reacargar(){
    location.reload();
  }
    

    $(document).on("click","#insertMunici", function(){
    
        var nombre = $("#nombremun").val();
        var dept = $("#dept").val();
    
    
        if(nombre.trim() != "" && dept != "0"){
            $.ajax({
                type : "POST",
                data :"nombre="+nombre+"&dept="+dept+"&accion=I",
                url : "mantenimientoMuni.php"
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

 $(document).on("click","#modifyMunici", function(){
    
    var nombre = $("#nombremun").val();
    var dept = $("#dept").val();
    var idMuni = $("#idMuni").val();


    if(nombre.trim() != "" && dept != "0" && idMuni.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombre="+nombre+"&dept="+dept+"&idMuni="+idMuni+"&accion=M",
            url : "mantenimientoMuni.php"
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

 $(document).on("click","#deleteMunici", function(){
    var idMuni = $("#idMuni").val();
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
                data :"idMuni="+idMuni+"&accion=E",
                url : "mantenimientoMuni.php"
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

 $(document).on("click","#desactivarMunici", function(){
    var idMuni = $("#idMuni").val();
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
                data :"idMuni="+idMuni+"&accion=D",
                url : "mantenimientoMuni.php"
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

 $(document).on("click","#verMInactivos", function(){
    $("#tblActivos").attr("hidden",true);
    $("#formMuni").attr("hidden",true);
    $("#regresar").attr("hidden",false);
       $.ajax({
           url : "municipiosInactivos.php"
       }).done(function(res){
           $("#tblInac").html(res);
           
       }).fail(function(){});
});

$(document).on("click","#regresar", function(){
   location.reload();
});


function habilitarMunici(){

   var id = $("#activarMunici").val();
   $.ajax({
       type:"POST",
       data:"activar=yes"+"&id="+id,
       url : "municipiosInactivos.php"
   }).done(function(res){
       $("#activarMunici").val("");
       $("#tblInac").html(res);
       Swal.fire({
        icon: 'success',
        title: 'Registro activado con exito',
        showConfirmButton: false,
        timer: 1300
      });
       
   }).fail(function(){});

}
