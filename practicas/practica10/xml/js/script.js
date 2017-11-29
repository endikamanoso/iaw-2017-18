$(function(){
    $("#mostrar").on("click",function(e){
       var jqxhr=$.ajax({
           method:"GET",
           url:"loteria.php"
       });
       jqxhr.done(function(xml){
           var premio=$(xml).find("premio");
           var texto="<h2>Premios</h2>";
           $("#mostrar").css("display","none");
           premio.each(function(indice){
               var tipo=$(this).attr("tipo");
               var cantidad=$(this).attr("cantidad");
               texto+="<p>" +
                   "<strong>"+tipo+"</strong>"+
                   "<strong> ("+cantidad+"&euro;): </strong>";
               var listaNumeros=$(this).find("numero");
               for(var i=0;i<listaNumeros.length;i++){
                 texto+=$(listaNumeros[i]).text()+" ";
               }

               texto+="</p>";
           });
           $("#principal").append(texto);
       })
    });
});