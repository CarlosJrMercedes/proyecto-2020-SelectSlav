$(document).ready(function(){
    $("#tblCentroV").DataTable();
});

$(document).on("click","#cancelUsu", function(){
   $("#id_centro").val("");
   $("#nombre").val("");
   $("#id_munici").val("0");
   $("#direccion").val("");

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


$(document).on("click","#ingUsu", function(){
    
 
    var nombre = $("#nombre").val();
    var muni = $("#muni").val();
    var direccion = $("#direccion").val();


    if(nombre.trim() != ""  && muni != "0" &&  direccion.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombre="+nombre+"&id_munici="+muni+"&direccion="+direccion+"&accion=I",
            url : "mantenimientoCentroV.php"
        }).done(function(res){
            if(res == 1){

                Swal.fire("Info","Registro ingresado con exito","info");
                location.reload();
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
    var muni = $("#muni").val();
    var direccion = $("#direccion").val();
    var idCv = $("#id").val();
    if(nombre.trim() != "" && muni != "0" && direccion.trim() != "" && idCv.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombre="+nombre+"&id_munici="+muni+"&direccion="+direccion+"&id_centro="+idCv+"&accion=M",
            url : "mantenimientoCentroV.php"
        }).done(function(res){
            if(res == 1){

                Swal.fire("Info","Registro modificado","info");
                location.reload();
            }else{
                Swal.fire("Error","Algo no esta bien","error");
            }
            
        }).fail(function(){});

    }else{
        Swal.fire("Info","complete todos los campos","error");
    }
 });

 $(document).on("click","#eliUsu", function(){
    var idCv = $("#id").val();
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
                data :"id_centro="+idCv+"&accion=E",
                url : "mantenimientoCentroV.php"
            }).done(function(res){
                if(res == 1){
    
                    Swal.fire("Info","El registro se elimino con exito","success");
                    location.reload();
                }else{
                    Swal.fire("Error","Algo no esta bien","error");
                }
            }).fail(function(){

            });
        }
      });
 });

 $(document).on("click","#desactUsu", function(){
    var idCv = $("#id").val();
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
                data :"id_centro="+idCv+"&accion=D",
                url : "mantenimientoCentroV.php"
            }).done(function(res){
                if(res == 1){
    
                    Swal.fire("Info","El registro se desactivo con exito","success");
                    location.reload();
                }else{
                    Swal.fire("Error","Algo no esta bien","error");
                }
                
            }).fail(function(){

            });
        }
      });
 });


 $(document).on("click","#verInactivos", function(){
    $("#tablaData").attr("hidden",true);
    $("#formMantenimiento").attr("hidden",true);
    $("#regresar").attr("hidden",false);
       $.ajax({
           url : "centrosInactivos.php"
       }).done(function(res){
           $("#tabalInactivoa").html(res);
           
       }).fail(function(){});
});

$(document).on("click","#regresar", function(){
   location.reload();
});


function habilitarCentro(){

   var id = $("#activarUsu").val();
   $.ajax({
       type:"POST",
       data:"activar=yes"+"&idUsu="+id,
       url : "centrosInactivos.php"
   }).done(function(res){
       $("#activarUsu").val("");
       $("#tabalInactivoa").html(res);
       
   }).fail(function(){

   });

}