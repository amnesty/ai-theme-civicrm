jQuery(function($) {
    // url
    var url = window.location.pathname;

    // Origenes
    var cat_source = "ut01";
    var get_source = getUrlVars()["origen"];
    var get_campaign = getUrlVars()["pk_campaign"];
    var contrib_source_input = $( "[name='submitted[civicrm_1_contribution_1_contribution_source]']");

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

    // Esconder otra cuota
    if ( $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-1").is(":checked") ||
        $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-2").is(":checked") ||
        $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-3").is(":checked")
    ){
        $(".otra_cuota").css("visibility", "hidden");
    }
    $(".cuota").click( function() {
      if ( $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-1").is(":checked") ||
          $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-2").is(":checked") ||
          $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-3").is(":checked")
      ){
          $(".otra_cuota").css("visibility", "hidden");
      }
      if ( $("#form-item form-type-radio form-item-submitted-caja-colaborar-fieldset-fila-1-0-donativo-4").is(":checked") ){
          $(".otra_cuota").css("visibility", "visible");
      }
    });


})
