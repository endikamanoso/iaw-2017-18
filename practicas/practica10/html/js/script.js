$(function(){
    $("#mostrar").on("click",function(e){
       var jqxhr=$.ajax({
           method:"GET",
           url:"loteria.php"
       });
       jqxhr.done(function(html){
           $("#mostrar").css("display","none");
           $("#principal").append(html);
       }).fail(function(jqXHR,textStatus){
           console.log(textStatus);
        });
    });
});