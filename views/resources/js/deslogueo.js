
$(document).on("click","#closeSesion", function(){
    $.ajax({
        type: "POST",
        url:"deslogueoController.php"
    }).done(function(res){
        location.href = "indexController.php";
    }).fail(function(){

    });
});