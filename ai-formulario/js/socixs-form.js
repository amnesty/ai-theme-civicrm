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
    $('#civicrm_1_contact_1_contact_source').val(get_source);

    // Scrolling the active block of fields

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

    // Navbar
    //$('.navbar-fixed').autoHidingNavbar();
    $('.navbar-fixed').autoHidingNavbar();

    // Cuenta entera en rojo
    if($('.account').hasClass('error')){
            $('.entity').css("border", "#f00 2px solid");
            $('.office').css("border", "#f00 2px solid");
            $('.check').css("border", "#f00 2px solid");
            $('.account').css("border", "#f00 2px solid");
    }
})