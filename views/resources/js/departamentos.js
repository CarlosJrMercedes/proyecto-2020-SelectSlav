$(document).ready(function(){
    $("#tblUsu").DataTable();
});

$(document).on("click","#cancelDept", function(){
   
   $("#nombrese").val("");
 

   $("#modDept").attr("hidden",true);
   $("#eliDept").attr("hidden",true);
   $("#desactDept").attr("hidden",true);
   $("#ingDept").attr("hidden",false);
});


function habilitarBtn(){

   $("#modDept").attr("hidden",false);
   $("#eliDept").attr("hidden",false);
   $("#desactDept").attr("hidden",false);
   $("#ingDept").attr("hidden",true);

}


$(document).on("click","#ingDept", function(){
    
    var nombre = $("#nombrese").val();

    

    if(nombre.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombrese="+nombre+"&accion=I",
            url : "mantenimientoDept.php"
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



 $(document).on("click","#modDept", function(){
    
    var nombre = $("#nombrese").val();
    var idDept = $("#id").val();


    if(nombre.trim() != "" && idDept.trim() != ""){
        $.ajax({
            type : "POST",
            data :"nombrese="+nombre+"&id="+idDept+"&accion=M",
            url : "mantenimientoDept.php"
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

 $(document).on("click","#eliDept", function(){
    var idDept = $("#id").val();
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
                data :"id="+idDept+"&accion=E",
                url : "mantenimientoDept.php"
            }).done(function(res){
                if(res == 1){
    
                    Swal.fire("Info","El registro se elimino con exito","success");
                    location.reload();
                }else{
                    Swal.fire("Error","Algo no esta bien","error");
                }
                
            }).fail(function(){});
        }
      });
 });

 $(document).on("click","#desactDept", function(){
    var idDept = $("#id").val();
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
                data :"id="+idDept+"&accion=D",
                url : "mantenimientoDept.php"
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