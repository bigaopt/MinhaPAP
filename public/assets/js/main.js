var clubeApp = clubeApp || {};

clubeApp.home = function () {

    var init = function () {
        $(".carousel-inner").on("click", function()
         {
            window.location.href = 'http://localhost/ci_template/public/noticias';
         });       
    };

    
    return {
        init: init,
    }

}();
