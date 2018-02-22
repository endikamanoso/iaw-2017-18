const E_SIN_ERROR=0;
const E_YA_VOTADO=1;
const E_ACCESO_INDEBIDO=2;
const E_BD_SIN_CONEXION=3;
const E_BD_INSTRUCCION=4;
const E_FALTAN_DATOS=5;
const E_DATOS_INCORRECTOS=6;

const MENSAJES=[
    "No hay errores",
    "Ya se ha votado en esta sesión",
    "Acceso indebido",
    "No hay conexion con la base de datos",
    "Fallo al ejecutar la instrucción en la base de datos",
    "Faltan datos",
    "Datos incorrectos"
];



$(function(){
    $(".ficha .btn-primary").on("click",function(e){
        e.preventDefault();
        var id=$(this).data("id");
        var $capaBici=$("#"+id);
        console.log($capaBici.find("h2").text());
        $("#bici").val($capaBici.find("h2").text());
    });

    $(".ficha img").on("click",function(e){
        $("#fotoBiciGrande")
            .empty()
            .append("<img src='"+$(this).attr("src")+"' alt='Bici'>");
        $("#imagenGrande").fadeIn(1000);
    });

    $("#imagenGrande").on("click",function(e){
        $(this).fadeOut(1000);
    });

    $("#votar").on("click",function(e){
        console.log("aqui");
        e.preventDefault();
        var jqxhr=$.ajax({
            url: "votar.php",
            method:"get",
            dataType:"json",
            data:{
                bici:$("#bici").val()
            }
        }).done(function(data){
            if(data["error"]["codigo"]==E_SIN_ERROR){
                $("#contenidoMensajeVotar").empty().append("<p class='text-success'>Voto realizado correctamente</p>");
            }
            else{
                $("#contenidoMensajeVotar").empty().append("<p class='text-danger'>"+MENSAJES[data["error"]["codigo"]]+"</p>");
            }
            $("#mensajeVotar").modal("show");
        }).fail(function(){
            $("#contenidoMensajeVotar").empty().append("<p class='text-danger'>"+MENSAJES[E_BD_SIN_CONEXION]+"</p>");
        })
    })

    $("#votacion").on("click",function(e){
        $("#contenidoVotacion").empty();
        var jqxhr=$.ajax({
            url: "votacion.php",
            method:"get",
            dataType:"json",
            data:{
                bici:$("#bici").val()
            }
        }).done(function(data){
            if(data["error"]["codigo"]==E_SIN_ERROR){
                let bicis=data["bicis"];
                $("#contenidoVotacion").append("<ol id='listaVotacion'></ol>");
                for(bici of bicis){
                    $("#listaVotacion").append("<li><strong>"+bici["modelo"]+
                        "</strong><br> Votos:<strong>"+bici["votos"]+"</strong> Porcentaje: <strong>"+
                        parseFloat(Math.round(bici["porcentaje"] * 100) / 100).toFixed(2)+"%</strong></li>");
                }

            }
            else{
                $("#contenidoVotacion").append("<p class='text-danger'>"+MENSAJES[data["error"]["codigo"]]+"</p>");
            }
            $("#modalVotacion").modal("show");
        }).fail(function(){
            $("#contenidoVotacion").append("<p class='text-danger'>"+MENSAJES[E_BD_SIN_CONEXION]+"</p>");
        })
    })


});