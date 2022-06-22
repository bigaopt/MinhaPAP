var clubeApp = clubeApp || {};

clubeApp.home = function () {

    var init = function () {
        $(".carousel-inner").on("click", function () {
            window.location.href = 'http://localhost:8080/noticias';
        });
    };

    


    return {
        init: init,
        jogador: delete_jogador,
    }

}();
