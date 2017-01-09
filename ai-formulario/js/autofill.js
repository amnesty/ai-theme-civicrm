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
  $(".capa-other-quant").css("display", "block");
  $(".otra_cuota").css("display", "block");
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

  $(".check-politica").attr("checked", false);

  /*
  https://pruebacrm.es.amnesty.org/unete-a-amnistia/fundraising/
      ?cuota=6&frec=12
      &nombre=carlos&apellido1=gomez&apellido2=sanchez
      &tipo-doc=nif&num-doc=47963690L&genero=2&email=emaildeprueba@prueba.com&telefono=666778899&idioma=es_ES
      &tipo-via=341&nombre-via=delicias&dir-add=1,2&cp=28004&poblacion=madrid&provincia=AL&pais=1198
      &iban-letras=ES&iban-numero=48&entidad=1491&oficina=0001&dc=29&cuenta=2071583229

    frec => 12:mensual; 6:bimestral; 4:trimestral; 3:cuatrimestral; 2:semestral; 1:anual
    tipo-doc => nif; nie; pasaporte
    genero => 1:Mujer; 2:Hombre; 3:No declara
    idioma => es_ES:castellano; ca_ES:catalan; eu_ES:euskera; gl_ES:galego
    tipo-via => 341:calle; 27:avenida; 319:urbanizacion; 311:travesía; 239:paseo; 271:plaza; 93:carretera; 283:ronda; 160:otra;
    provicia => listado adjunto (si el país no es españa, se deja vacío)
    pais => listado adjunto
  */
});
