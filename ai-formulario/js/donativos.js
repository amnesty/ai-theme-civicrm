// URL Vars
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

jQuery(function($) {
    // url
    var url = window.location.pathname;

    // Origenes
    var cat_source = "ut01";
    var get_source = getUrlVars()["origen"];
    var get_campaign = getUrlVars()["pk_campaign"];
    var get_kw = getUrlVars()["pk_kwd"];
    var contrib_source_input = $( "[name='submitted[civicrm_1_contribution_1_contribution_source]']");
    var contrib_kw_input = $( "[name='submitted[civicrm_1_contribution_1_cg21_custom_102]']");

    // origen
    if( get_source != '' && get_source ){ // origen
        contrib_source_input.val(get_source);
    }
    else if(url.indexOf("/cat") > -1){ // AmnistiaCAT
        contrib_source_input.val(cat_source);
    }
    else if( get_campaign != '' && get_campaign ){ //pk_campaign
        contrib_source_input.val(get_campaign);
    }
    // pk_kwd
    if( get_kw != '' && get_kw ){
        contrib_kw_input.val(get_kw);
    }

    // Esconder otra cuota
    if ( $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-1").is(":checked") ||
        $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-2").is(":checked") ||
        $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-3").is(":checked")
    ){
        $(".otra_cuota").css("visibility", "hidden");
    }
    $(".cuota").click( function() {
      if ( $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-1").is(":checked") ||
          $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-2").is(":checked") ||
          $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-3").is(":checked")
      ){
          $(".otra_cuota").css("visibility", "hidden");
      }
      if ( $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-donativo-4").is(":checked") ){
          $(".otra_cuota").css("visibility", "visible");
      }
    });

    // CIF: borrar nombre y cambiar placeholder
    if($(".tipo_documento option:selected").val()=='cif'){
      $(".nombre").attr("placeholder", "Nombre de la entidad *");
      $(".content-datos").addClass("cif");
    }
    $(".tipo_documento").change( function() {
        if($(".tipo_documento option:selected").val()=='cif'){
          $(".nombre").val('');
          $(".primer-apellido").val('');
          $(".segundo-apellido").val('');
          $(".nombre").attr("placeholder", "Nombre de la entidad *");
          $(".content-datos").addClass("cif");
        }
        else {
          $(".nombre").val('');
          $(".nombre").attr("placeholder", "Nombre *");
          $(".content-datos").removeClass("cif");
        }
    });

    // Si cambia el ancho de la pantalla
    $(window).resize(function() {
      if ($(window).width() <= 800) {
        //alert("hola");
      }
    });

    // Añadir títulos a la página de preview

    if( $(".webform-client-form").first().hasClass("preview") ){
        // título confirma tus datos
        if(url.indexOf("/cat") > -1){
          $(".box-form-es").prepend("<h4 style='margin-top: 10px; margin-bottom: 20px; margin-left: 20px;'>¿Ens ajudes a confirmar que les teves dades són correctes?</h4>");
          $(".content-colaborar").prepend("<h2 style='margin-top: 15px; margin-bottom: 15px;'>Dades personals</h2>");
          $(".content-cuenta").prepend("<h2 style='margin-top: 15px; margin-bottom: 15px;'>Mètode de pagament</h2>");
        }else {
          $(".box-form-es").prepend("<h4 style='margin-top: 10px; margin-bottom: 20px; margin-left: 20px;'>¿Nos ayudas a confirmar que tus datos son correctos?</h4>");
          $(".content-colaborar").prepend("<h2 style='margin-top: 15px; margin-bottom: 15px;'>Datos personales</h2>");
          $(".content-cuenta").prepend("<h2 style='margin-top: 15px; margin-bottom: 15px;'>Forma de pago</h2>");
        }

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

    // Cut option values in Profesion

    // first time
    $(".profesion option:selected").text(
      function(i,t){
          return t.length > ($(".profesion").width()/11) ? t.substr(0,25) + "..." : t;
      }
    );
    // When it changes
    $( ".profesion" ).change(function() {
      $(".profesion option:selected").text(
        function(i,t){
            return t.length > ($(".profesion").width()/11) ? t.substr(0,25) + "..." : t;
        }
      );
    });

    // Sort the countries
    $( document ).ready(function() {
      var options = $('.pais option');
      var selected = $('.pais option:selected').val();
      var arr = options.map(function(_, o) { return { t: $(o).text(), v: o.value }; }).get();
      arr.sort(function(o1, o2) { return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0; });
      options.each(function(i, o) {
        o.value = arr[i].v;
        $(o).text(arr[i].t);
      });
      $(".pais").val(selected);
    });

    // Province label
    $('.provincia option[value=""]').text("-Provincia-");

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
      else {
          $(this).css("border", "#f00 2px solid");
      }
    });

    // Show or hide/erase "other quantity" field depending on which checkbox is checked
    $(".cuota").click(function() {
        $(".otra_cuota").val('');
    });

    // Cuenta entera en rojo
    if($('.account').hasClass('error') || $('.dc').hasClass('error') ){
            $('.entity').css("border", "#f00 2px solid");
            $('.office').css("border", "#f00 2px solid");
            $('.dc').css("border", "#f00 2px solid");
            $('.account').not(".first").css("border", "#f00 2px solid");
    }

    $('a.popup').colorbox({iframe:true, width:"50%", height:"50%"});
    $('a.popup_little').colorbox({iframe:true, width:"50%", height:"20%", "scrolling":false});

    // popups colorbox
    function refresh_popups(){
        var y = $('.cboxIframe html').height();
        $('a.popup_little').resize({ width:"50%", height:y });
    }

    // 0 del DNI
    $('.number-dni').first().focusout(function(){
        var dni = String($(this).val());
        if(dni.substring(0,1)=='0'){
            $(this).val(dni.substring(1));
        }
    });

    // Redes sociales

    function share(title, summary, url, image) {
        //var sharer="https://www.facebook.com/sharer/sharer.php?u=example.org";
        window.open(
            'https://www.facebook.com/sharer.php?u=' + encodeURIComponent(url)
            + '&t=' + encodeURIComponent(title),
            'accionafacebook',
            'width=800,height=600,scrollbars=yes,menubar=yes,resizable=yes,location=yes'
        );
    }
    $(".ai-accion-firma-compartir__facebook").each(function() {
        var n = $(this),
            i = urlActualFB, //n.data("ai-share-url")
            a = n.data("ai-share-title") || tituloActualFB,
            s = n.data("ai-share-summary-html"),
            l = n.data("ai-share-image") || "";
        n.click(function() {
            return share(a, s, i, l), !1
        });
    });

    function tw(e, t, v) {
        window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(e) + "&url=" + encodeURIComponent(t) + "&via=" + encodeURIComponent(v), "accionatwitter", "width=800,height=600,scrollbars=yes,menubar=yes,resizable=yes,location=yes")
    }
    $(".ai-accion-firma-compartir__twitter").each(function() {
        var n = $(this),
            r = n.data("ai-share-url") || urlActualTW,
            o = n.data("ai-share-summary-html"),
            v = n.data("ai-share-via");
            n.click(function() {
                return tw(o, r, v), !1
            });
    });

})
