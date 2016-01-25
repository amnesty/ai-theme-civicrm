jQuery(function() {

    $(".content-colaborar").hover( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });

    $(".content-colaborar").keyup( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });

    $(".content-datos").hover( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });

    $(".content-datos").keyup( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });

    $(".content-direccion").hover( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });

    $(".content-direccion").keyup( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');
    });

    $(".content-cuenta").hover( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });

    $(".content-cuenta").keyup( function(){
        $(".caja-content").removeClass('active');
        $(this).addClass('active');

    });    

});