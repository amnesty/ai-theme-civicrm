// URL Vars
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

jQuery(function($) {

    // Origenes
    var get_source = getUrlVars()["origen"];
    var get_campaign = getUrlVars()["pk_campaign"];
    var get_kwd = getUrlVars()["pk_kwd"];
    
    var source_input = $( "[name='submitted[civicrm_1_contact_1_contact_source]']");
    if( get_source != '' && get_source ){
        source_input.val(get_source);
    }
    else if( get_campaign != '' && get_campaign ){
        source_input.val(get_campaign);
    }

    // Añadir títulos a la página de preview 

    if( $(".webform-client-form").first().hasClass("preview") ){
        // título confirma tus datos
        $(".text-intro").append("<h4 style='margin-top: 40px; margin-bottom: -50px;'>¿Nos ayudas a confirmar que tus datos son correctos?</h4>");

        $(".content-colaborar").prepend("<h2 style='margin-top: 15px; margin-bottom: 15px;'>Datos personales</h2>");

        $(".content-cuenta").prepend("<h2 style='margin-top: 15px; margin-bottom: 15px;'>Forma de pago</h2>");

        $(".preview .element-invisible").each( function() {
                $(this).addClass('element-visible');
                $(this).toggleClass('element-invisible');
                $(this).append(': ');
        });

        $(".box-es-right").remove();
        $(".box-form-es").css("width", "100%");
    
    }
    
    // Scrolling the active block of fields

    if( $('.webform-client-form').hasClass('webform-conditional-processed') ){

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

    }
    else {
        $(".caja-content").removeClass('active');   
    }

  // Make the IBAN fields to automatically move the cursor through when any field is fullfilled.
  
  $(".country").keyup( function(){
    if($(".country").val().length >= 2){
        $(".entity").focus();        
    }
  });

  $(".entity").keyup( function(){
    if($(".entity").val().length >= 4){
        $(".office").focus();        
    }
  });

  $(".office").keyup( function(){
    if($(".office").val().length >= 4){
        $(".check").focus();        
    }
  });

  $(".check").keyup( function(){
    if($(".check").val().length >= 2){
        $(".account").focus();        
    }
  });

  // Mark errors in select boxes

  $(".error").not(".messages").each( function(){
    if ($(this).is("select")){
        $(this).parent().addClass("form-error");
        $(this).parent().css("border", "#f00 2px solid");
    }
  });

    // Show or hide/erase "other quantity" field depending on which checkbox is checked
    $(".cuota").click(function() {
        $(".otra_cuota").val('');
    });

    // Cuenta entera en rojo
    if($('.account').hasClass('error')){
            $('.entity').css("border", "#f00 2px solid");
            $('.office').css("border", "#f00 2px solid");
            $('.dc').css("border", "#f00 2px solid");
            $('.account').not(".first").css("border", "#f00 2px solid");
    }

    // popups colorbox
    $('a.popup').colorbox({iframe:true, width:"50%", height:"50%"});
    $('a.popup_little').colorbox({iframe:true, width:"50%", height:"auto"});


})