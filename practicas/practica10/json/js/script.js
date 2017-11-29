$(function(){
    $("#mostrar").on("click",function(e){
       var jqxhr=$.ajax({
           method:"GET",
           url:"loteria.php"
       });
       jqxhr.done(function(json){
           $("#mostrar").css("display","none");
           var texto="<h2>Premios</h2>";
           var premios=json["premios"];
           for(var i=0;i<premios.length;i++){
               var premio=premios[i];
               var tipo=premio["tipo"];
               var cantidad=premio["cantidad"];
               texto+="<p>" +
                   "<strong>"+tipo+"</strong>"+
                   "<strong> ("+cantidad+"&euro;): </strong>";
               var listaNumeros=premio["numeros"];
               for(var j=0;j<listaNumeros.length;j++){
                   texto+=listaNumeros[j]+" ";
               }
           }
           texto+="</p>";
           $("#principal").append(texto);
       }).fail(function(jqXHR,textStatus){
           console.log(textStatus);
        });
    });
});