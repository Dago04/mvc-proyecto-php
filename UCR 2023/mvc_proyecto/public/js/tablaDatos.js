$(document).ready(function () {
    $("#search").keyup(function (e) { 
        var valor = $(this).val().toLowerCase();
        $("#tablaDatos tr").filter(
            function () {  
            $(this).toggle($(this).text().toLowerCase().indexOf(valor)> -1);
        });
    });
});