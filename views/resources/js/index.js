$(document).ready(function(){
    $('.carousel').carousel();
    $('.js-example-basic-single').select2();





    $(document).on("change","#dept",function(){
        var dept = $("#dept").val();
        if(dept.trim() != "0"){
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
    
            Swal.fire("Error","Seleccione un departamento valido","error");
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
        }
    });

    $(document).on("change","#jR",function(){
        var jR = $("#jR").val();
        if(jR.trim() != "0"){
            // Swal.fire("Información","Municipio :"+ muni,"success");
            $(".bander").attr("hidden", false);
        }else{
    
            Swal.fire("Error","Seleccione un departamento valido","error");
        }
    });

    $(document).on("click","#voto",function(){

        Swal.fire("Información","Municipio :","success");
        
    });

});






