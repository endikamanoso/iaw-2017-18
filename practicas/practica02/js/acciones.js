$(function () {
    $("main figure")
        .on("click", function () {
            var nombreImagen = $(this).find("img").attr("src");
            $("#fondo").css("background-image", "url(" + nombreImagen + ")");
        })
        .on("mouseover", function () {
            $(this).find("p").stop().fadeIn();
        })
        .on("mouseout", function () {
            $(this).find("p").stop().fadeOut();
        })

    $("input")
        .on("focus", function () {
            $("input").css({
                "background-color": "transparent"
            });
            $("textarea").css({
                "background-color": "transparent"
            });
            $(this).css({
                "background-color": "white"
            });
        })
        .on("blur", function () {
            $("input").css({
                "background-color": "white"
            });
            $("textarea").css({
                "background-color": "white"
            });
        });
    $("textarea")
        .on("focus", function () {
            $("input").css({
                "background-color": "transparent"
            });
            $(this).css({
                "background-color": "white"
            });
        })
        .on("blur", function () {
            $("input").css({
                "background-color": "white"
            });
            $("textarea").css({
                "background-color": "white"
            });
        })
})
