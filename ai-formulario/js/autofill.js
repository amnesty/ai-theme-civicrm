// URL Vars
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

jQuery(function($) {
  // Rellena a partir de parámetros GET
  var urlVars = getUrlVars();

  // cuota
  $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-1").attr("checked", false);
  $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-2").attr("checked", false);
  $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-3").attr("checked", false);
  $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-4").attr("checked", true);
  $(".otra_cuota").attr("disabled", false);
  $(".otra_cuota").attr("enabled", true);
  $(".otra_cuota").val(urlVars['cuota']);
  // frecuencia
  $(".frecuencia").val(urlVars['frec']);

  $(".nombre").val(urlVars['nombre']);
  $(".primer-apellido").val(urlVars['apellido1']);
  $(".segundo-apellido").val(urlVars['apellido2']);
  $(".tipo_documento").val(urlVars['tipo-doc']);
  $(".number-dni").val(urlVars['num-doc']);
  $(".genero").val(urlVars['genero']);
  $(".email").val(urlVars['email']);
  $(".mobile").val(urlVars['telefono']);
  $(".language").val(urlVars['idioma']);

  $(".tipo-via").val(urlVars['tipo-via']);
  $(".nombre-via").val(urlVars['nombre-via']);
  $(".numero-bloque").val(urlVars['dir-add']);
  $(".postal").val(urlVars['cp']);
  $(".poblacion").val(urlVars['poblacion']);
  $(".provincia").val(urlVars['provincia']);
  $(".pais").val(urlVars['pais']);

  $(".iban-letras").val(urlVars['iban-letras']);
  $(".iban-numero").val(urlVars['iban-numero']);
  $(".entidad").val(urlVars['entidad']);
  $(".oficina").val(urlVars['oficina']);
  $(".dc").val(urlVars['dc']);
  $(".ncuenta").val(urlVars['cuenta']);

  /*
    https://pruebacrm.es.amnesty.org/unete-a-amnistia/?origen=taskphone&cuota=X&frec=X&otra=X&nombre=X&apellido1=X&apellido2=X
      &tipo-doc=X&num-doc=X&genero=X
      &email=X&telefono=X&idioma=X
      &tipo-via=X&nombre-via=X&dir-add=X&cp=X&poblacion=X&provincia=X&pais=X
      &iban-letras=X&iban-numero=X&entidad=X&oficina=X&dc=X&cuenta=X

    https://pruebacrm.es.amnesty.org/unete-a-amnistia/fundraising/
        ?cuota=6&frec=12
        &nombre=carlos&apellido1=gomez&apellido2=sanchez
        &tipo-doc=nif&num-doc=12345678P&genero=2&email=emaildeprueba@prueba.com&telefono=666778899&idioma=es_ES
        &tipo-via=341&nombre-via=delicias&dir-add=1,2&cp=28004&poblacion=madrid&provincia=1&pais=1198
        &iban-letras=ES&iban-numero=11&entidad=2222&oficina=3333&dc=44&cuenta=55555555

    frec => 12:mensual; 6:bimestral; 4:trimestral; 3:cuatrimestral; 2:semestral; 1:anual
    tipo-doc => nif; nie; pasaporte
    genero => 1:Mujer; 2:Hombre; 3:No declara
    idioma => es_ES:castellano; ca_ES:catalan; eu_ES:euskera; gl_ES:galego
    tipo-via => calle=341;avenida=27;urbanizacion=319;travesía=311;paseo=239;plaza=271;carretera=93;ronda=283;otra=160;
    provicia => listado adjunto (si el país no es españa, se deja vacío)
    pais => listado adjunto
  */
});
