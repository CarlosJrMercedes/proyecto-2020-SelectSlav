$(document).ready(function () {
    bsCustomFileInput.init();
    $("#tblPart").DataTable();
  });

  $(document).on("click","#cancelPart", function(){
    
    document.getElementById("formPart").reset();
    $('#textoB').attr('hidden', true);
    $('#textoC').attr('hidden', true);
    $("#modPart").attr("hidden",true);
    $("#eliPart").attr("hidden",true);
    $("#desactPart").attr("hidden",true);
    $("#ingPart").attr("hidden",false);
    $('#seccionC').attr('hidden', false);
    $('#seccionB').attr('hidden', false);
 });

 
 function habilitarBtn(){

  $("#modPart").attr("hidden",false);
  $("#eliPart").attr("hidden",false);
  $("#desactPart").attr("hidden",false);
  $("#ingPart").attr("hidden",true);

}

 $(document).on("click","#ingPart", function(){
  var bandera = $("#bandera").prop('files')[0];
  var candidato = $("#candidato").prop('files')[0];
  var nomPartido = $("#nomPartido").val();
  var nomCandi = $("#nomCandi").val();
  var formPartido = new FormData;
  
if(nomPartido.trim() != ""  && nomCandi.trim() != "" && bandera != null && candidato != null){
  formPartido.append("bandera",bandera);
  formPartido.append("candidato",candidato);
  formPartido.append("nomPartido",nomPartido);
  formPartido.append("nomCandi",nomCandi);
  formPartido.append("accion","I");
  $.ajax({
    type :"POST",
    cache : false,
    contentType : false,
    processData : false,
    url : "mantenimientoPartido.php",
    data :formPartido
  }).done(function(res){

    if(res == 1){

      Swal.fire("Informacion","Registro ingresado con exito","info");
      location.reload();
    }else{
      Swal.fire("Error","Acción fallido","error");
    }

  }).fail(function(){

  });
}else{
  Swal.fire("Error","Complete todos los campos","error");
}


 });


 $(document).on("click","#modPart", function(){
  var bandera = $("#bandera").prop('files')[0];
  var candidato = $("#candidato").prop('files')[0];
  var nomPartido = $("#nomPartido").val();
  var nomCandi = $("#nomCandi").val();
  var completo = $("#completo").val();
  var idPart = $("#idPartido").val();
  var fotoB = $("#fotoB").val();
  var fotoC = $("#fotoC").val();

  var formPartido = new FormData;
  if(completo.trim() == "SI"){
    if(nomPartido.trim() != ""  && nomCandi.trim() != "" && bandera != null && candidato != null){
      formPartido.append("bandera", bandera);
      formPartido.append("candidato", candidato);
      formPartido.append("nomPartido", nomPartido);
      formPartido.append("nomCandi", nomCandi);
      formPartido.append("idPart", idPart);
      formPartido.append("fotoB", fotoB);
      formPartido.append("fotoC", fotoC);
      formPartido.append("accion","M1");
      $.ajax({
        type :"POST",
        cache : false,
        contentType : false,
        processData : false,
        url : "mantenimientoPartido.php",
        data :formPartido
      }).done(function(res){
    
        if(res == 1){
    
          Swal.fire("Informacion","Registro Modificado con exito","info");
          location.reload();
        }else{
          Swal.fire("Error","Acción fallido","error");
        }
    
      }).fail(function(){
    
      });
    }else{
      Swal.fire("Error","Complete todos los campos","error");
    }
  }else{
    var nomPartido = $("#nomPartido").val();
    var nomCandi = $("#nomCandi").val();
    var idPart = $("#idPartido").val(); 
    if(nomPartido.trim() != "" && nomCandi.trim() != ""){
      $.ajax({
        type:"POST",
        data:"nomPartido="+nomPartido+"&nomCandi="+nomCandi+"&idPart="+idPart+"&accion=M2",
        url:"mantenimientoPartido.php"
      }).done(function(res){
        if(res == 1){
    
          Swal.fire("Informacion","Registro Modificado con exito","info");
          location.reload();
        }else{
          Swal.fire("Error","Acción fallido","error");
        }
      }).fail({

      });
    }
    else{
      Swal.fire("Error","Complete todos los campos","error");
    }

  }
 });



 $(document).on("click","#eliPart",function(){
  var idPart = $("#idPartido").val();
  var fotoB = $("#fotoB").val();
  var fotoC = $("#fotoC").val();

  Swal.fire({
    title: 'Esta seguro?',
    text: "El registro no se podra recuperar!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Eliminar!'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type:"POST",
        data:"idPart="+idPart+"&fotoB="+fotoB+"&fotoC="+fotoC+"&accion=E",
        url:"mantenimientoPartido.php"
      }).done(function(res){
        if(res == 1){
    
          Swal.fire("Informacion","Registro Eliminado con exito","info");
          location.reload();
        }else{
          Swal.fire("Error","Acción fallido","error");
        }
      }).fail({

      });
    }
  })

 });
 

 $(document).on("click","#desactPart",function(){
  var idPart = $("#idPartido").val();

  Swal.fire({
    title: 'Esta seguro?',
    text: "El registro se podra recuperar nuevamente!",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Desactivar!'
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type:"POST",
        data:"idPart="+idPart+"&accion=D",
        url:"mantenimientoPartido.php"
      }).done(function(res){
        if(res == 1){
    
          Swal.fire("Informacion","Registro Desactivado con exito","info");
          location.reload();
        }else{
          Swal.fire("Error","Acción fallido","error");
        }
      }).fail({

      });
    }
  })

 });


 $(document).on("click","#verInactivos", function(){
  $("#formPart").attr("hidden", true);
  $("#activos").attr("hidden", true);
  $("#regresar").attr("hidden",false);
     $.ajax({
         url : "inactivosPartidos.php"
     }).done(function(res){
         $("#tblInac").html(res);
         
     }).fail(function(){});
});

$(document).on("click","#regresar", function(){
 location.reload();
});


 function habilitarPart(){

  var id = $("#activarPart").val();
  $.ajax({
      type:"POST",
      data:"activar=yes"+"&idParti="+id,
      url : "inactivosPartidos.php"
  }).done(function(res){
      $("#activarUsu").val("");
      $("#tblInac").html(res);
      
  }).fail(function(){});

}
 