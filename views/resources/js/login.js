
$(document).on("click","#log", function(){
    var usu = $("#usuario").val();
    var pass = $("#contra").val();

    if(usu.trim() != "" && pass.trim() != ""){
        $.ajax({
            type:"POST",
            data:$("#formLogin").serialize(),
            url: "loginController.php"
        }).done(function(res){
            if(res == "h"){
                location.href="dasboardAminController.php";
            }
            else{
                Swal.fire("Error","Usuario O Contaseña incorrectos","error");

            }
        }).faul(function(){

        });
    }else{
        Swal.fire("Eror","Complete los campos requeridos","error");
    }
});

$(document).on("click","#closeModal", function(){
    $("#usuario").val("");
    $("#contra").val("");
});






