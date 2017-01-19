jQuery(function($) {

  function calculate_fee() {
    $cuota = 0;
    $(".cuota").each( function() {
        if( $(this).is(":checked") ){
          $cuota = $(this).val();
        }
    });
    $otra = $(".otra_cuota").val();
    $cuota = ($cuota > 0 ? $cuota : $otra);
    $frecuencia = $(".frecuencia").val();

    $cuota_anual = $cuota*$frecuencia;
    if($cuota_anual >= 24 && $cuota_anual < 48){
      alert("Recuerda que estás seleccionando una cuota entre 24€ y 48€ anuales. Esta cuota reducida se aplica en el caso de personas jubiladas, en paro o estudiantes. Si no es tu caso, la cuota mínima es de 4€ mensuales o de 48€ anuales. Muchas gracias.");
    }
  }

  $(".cuota").click(function() {
    if( $(this).attr("id") != "edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-4"
      && $(this).attr("id") != "edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48" ){
      calculate_fee();
      //console.log( $(this).attr("id") );
    }
  });

  $(".otra_cuota").focusout(function(){
    calculate_fee();
  });

  $(".frecuencia").change(function(){
    calculate_fee();
  });



});
