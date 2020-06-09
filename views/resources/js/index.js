function reacargar(){
    location.reload();
  }
$(document).ready(function(){
    $('.carousel').carousel();
    $('.js-example-basic-single').select2();

    $(document).on("change","#dept",function(){
        var valDui = /^\d{8}-\d$/;
        var dept = $("#dept").val();
        var dui = $("#dui").val();
        if(dept.trim() != "0" && valDui.test(dui)){
            // Swal.fire("Información","Departamentoi :"+ dept,"success");
            $.ajax({
                type: "POST",
                url: "selectIndex.php",
                data: "muni=si"+"&dept="+dept
            }).done(function(res){
                $("#muni").html(res);
            }).fail(function(){
    
            });
        }else{
    
            Swal.fire("Error","DUI no valido ó no se a seleccionado departamento","error");
            $("#dept").val("0");
        }
    });

    $(document).on("change","#muni",function(){
        var muni = $("#muni").val();
        if(muni.trim() != "0"){
            // Swal.fire("Información","Municipio :"+ muni,"success");
            $.ajax({
                type: "POST",
                url: "selectIndex.php",
                data: "cV=si"+"&muni="+muni
            }).done(function(res){
                $("#cV").html(res);
            }).fail(function(){
    
            });
        }else{
    
            Swal.fire("Error","Seleccione un departamento valido","error");
            $("#muni").val("0")
        }
    });

    $(document).on("change","#cV",function(){
        var cV = $("#cV").val();
        if(cV.trim() != "0"){
            // Swal.fire("Información","Municipio :"+ muni,"success");
            $.ajax({
                type: "POST",
                url: "selectIndex.php",
                data: "junta=si"+"&cV="+cV
            }).done(function(res){
                $("#jR").html(res);
            }).fail(function(){
    
            });
        }else{
    
            Swal.fire("Error","Seleccione un departamento valido","error");
            $("#cV").val("0")
        }
    });

    $(document).on("change","#jR",function(){
        var jR = $("#jR").val();
        
        if(jR.trim() != "0"){

            $(".bander").attr("hidden", false);
            
        }else{
    
            Swal.fire("Error","Seleccione una Junta valida","error");
            $("#jR").val("0");
        }
    });

    $(document).on("click","#voto",function(){

        var valDui = /^\d{8}-\d$/;
        var idPartido = $("#idPartido").val();
        var dui = $("#dui").val();
        var dept = $("#dept").val();
        var muni = $("#muni").val();
        var centro = $("#cV").val();
        var junta = $("#jR").val();
        var bandera = $("#fotoVoto").val();
        var nombreP = $("#nombreP").val();
        if(dept.trim() != "0" && dept.trim() != "0" && muni.trim() != "0" 
        && centro.trim() != "0" && junta.trim() != "0" && valDui.test(dui)){

            Swal.fire({
                title: 'Esta completamente seguro?',
                text: "Desea darle su voto al partido " + nombreP,
                imageUrl: bandera,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, le dare mi voto!'
              }).then((result) => {
                if (result.value) {


                    $.ajax({
                        type: "POST",
                        url: "selectIndex.php",
                        data: "verificarDui=si"+"&dui="+dui
                    }).done(function(res){

                        if(res == 0){

                            $.ajax({
                                type: "POST",
                                url: "selectIndex.php",
                                data: "insertVoto=si&dui="+dui+"&muni="+muni+"&junta="+junta+"&idPartido="+idPartido
                            }).done(function(res){
                                if(res == 1){
                                    Swal.fire({
                                    icon: 'success',     
                                    title: 'Le a dado su voto a '+ nombreP,
                                    showConfirmButton: false,
                                    timer: 1500
                                    });
                                    $("#dui").val("");
                                    $("#dept").val("0");
                                    window.setTimeout("reacargar()",1599);
                                }else{
                                    Swal.fire({
                                        icon: 'error',     
                                        title: 'Surgio un error al realizar la acción',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    $("#dui").val("");
                                    $("#dept").val("0");
                                    window.setTimeout("reacargar()",1599);
                                }

                            }).fail(function(){

                            });
                            
                            // Swal.fire("Información","hasta aca estamos bien","warning");
                            
                        }else{
                            Swal.fire("Error","Este DUI ya ha ejercido su derecho","error");
                        }

                    }).fail(function(){

                    });



                    
                }
              });

        }else{
            Swal.fire("Error","Los campos han sido modificados, valide la información","error");
        }


        
    });

});






