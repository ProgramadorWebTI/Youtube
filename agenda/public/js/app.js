$(document).ready(function () {
    var formCadastro = $(".fmCadastro");

    formCadastro.on("submit", function(e){
        e.preventDefault();
        // var dados = new FormData(formCadastro);
        var dados = formCadastro.serialize();
        $.ajax({
            url: "http://192.168.1.100/Youtube/agenda/processa.php?p=adiciona",
            method: "POST",
            dataType: "JSON",
            data: dados,
            mimeType: "multipart/form-data",
            success: function (response) {
               if(response.status == 1){                   
                   $(".resposta").text(response.msg);
                  $(".fmCadastro input").val("");
               }
            }
        });
    });


    // SCRIPT PARA EDITAR O CONTATO;
    var formEditar = $(".fmEditar");
    formEditar.on("submit", function(e){
        e.preventDefault();
         var dados = formEditar.serialize();

          $.ajax({
            url: "http://192.168.1.100/Youtube/agenda/processa.php?p=edita",
            method: "POST",
            dataType: "JSON",
            data: dados,
            mimeType: "multipart/form-data",
            success: function (response) {
               if(response.status == 1){                   
                   $(".resposta").text(response.msg);
                  $(".fmCadastro input").val("");
               }
            }
            
        });

    })

});