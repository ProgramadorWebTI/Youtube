$(document).ready(function () {

let url_api  = "https://www.mercadobitcoin.net/api/BTC/ticker/";

    $.ajax({
        type: "get",
        url: url_api,
        dataType: "json",
        success: function (response) {
            $("#resultado").html(response.ticker.last);
            console.log(response.ticker.last);
        }
    });

});