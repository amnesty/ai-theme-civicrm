jQuery(function($) {
    // url
    var url = window.location.pathname;

    // Origenes
    var cat_source = "ut01";
    var get_source = getUrlVars()["origen"];
    var get_campaign = getUrlVars()["pk_campaign"];
    var get_kw = getUrlVars()["pk_kwd"];
    var contrib_source_input = $( "[name='submitted[civicrm_1_contribution_1_contribution_source]']");
    var contrib_kw_input = $( "[name='submitted[civicrm_1_contribution_1_cg21_custom_103]']");

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
      $(".nombre").val('');
      $(".apellidp1").val('');
      $(".apellido2").val('');
      $(".nombre").attr("placeholder", "Nombre de la entidad *");
      $(".nombre").css("width", "605px");
      $(".email").css("width", "470px");
    }
    $(".tipo_documento").change( function() {
        if($(".tipo_documento option:selected").val()=='cif'){
          $(".nombre").val('');
          $(".apellidp1").val('');
          $(".apellido2").val('');
          $(".nombre").attr("placeholder", "Nombre de la entidad *");
          $(".nombre").css("width", "605px");
          $(".email").css("width", "470px");
        }
        else {
          $(".nombre").val('');
          $(".nombre").attr("placeholder", "Nombre *");
          $(".nombre").css("width", "210px");
          $(".email").css("width", "350px");
        }
    });

    // Si cambia el ancho de la pantalla
    $(window).resize(function() {
      if ($(window).width() <= 800) {
        //alert("hola");
      }
    });

})
