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

  // Cuota
  if((urlVars['cuota'])){
    $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-1").attr("checked", false);
    $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-2").attr("checked", false);
    $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-3").attr("checked", false);
    $("#edit-submitted-caja-colaborar-fieldset-fila-1-0-civicrm-1-contact-1-cg15-custom-48-4").attr("checked", true);
    $(".otra_cuota").attr("disabled", false);
    $(".otra_cuota").attr("enabled", true);
    $(".capa-other-quant").css("display", "block");
    $(".otra_cuota").css("display", "block");
    $(".otra_cuota").val(urlVars['cuota']);
  }
  if((urlVars['frec'])){
    $(".frecuencia").val(urlVars['frec']);
  }

  // Datos Personales
  if((urlVars['nombre'])){
    $(".nombre").val(decodeURIComponent(urlVars['nombre']));
  }
  if((urlVars['apellido1'])){
    $(".primer-apellido").val(decodeURIComponent(urlVars['apellido1']));
  }
  if((urlVars['apellido2'])){
    $(".segundo-apellido").val(decodeURIComponent(urlVars['apellido2']));
  }
  if((urlVars['tipo-doc'])){
    $(".tipo_documento").val(urlVars['tipo-doc']);
  }
  if((urlVars['num-doc'])){
    $(".number-dni").val(urlVars['num-doc']);
  }
  if((urlVars['genero'])){
    $(".genero").val(urlVars['genero']);
  }
  if((urlVars['email'])){
    $(".email").val(decodeURIComponent(urlVars['email']));
  }
  if((urlVars['telefono'])){
    $(".mobile").val(urlVars['telefono']);
  }
  if((urlVars['idioma'])){
    $(".language").val(urlVars['idioma']);
  }
  if((urlVars['profesion'])){
    $(".profesion").val(urlVars['profesion']);
  }
  if((urlVars['nacimiento'])){
    $nacimiento = urlVars['nacimiento'].split("-");
    $(".day").val($nacimiento[0]);
    $(".month").val($nacimiento[1]);
    $(".year").val($nacimiento[2]);
  }

  // Dirección
  if((urlVars['tipo-via'])){
    $(".tipo-via").val(urlVars['tipo-via']);
  }
  if((urlVars['nombre-via'])){
    $(".nombre-via").val(decodeURIComponent(urlVars['nombre-via']));
  }
  if((urlVars['dir-add'])){
    $(".numero-bloque").val(decodeURIComponent(urlVars['dir-add']));
  }
  if((urlVars['cp'])){
    $(".postal").val(urlVars['cp']);
  }
  if((urlVars['poblacion'])){
    $(".poblacion").val(decodeURIComponent(urlVars['poblacion']));
  }
  if((urlVars['provincia'])){
    $(".provincia").val(urlVars['provincia']);
  }
  if((urlVars['pais'])){
    $(".pais").val(urlVars['pais']);
  }

  // Cuenta corriente
  if((urlVars['iban-letras'])){
    $(".iban-letras").val(urlVars['iban-letras']);
  }
  if((urlVars['iban-numero'])){
    $(".iban-numero").val(urlVars['iban-numero']);
  }
  if((urlVars['entidad'])){
    $(".entidad").val(urlVars['entidad']);
  }
  if((urlVars['oficina'])){
    $(".oficina").val(urlVars['oficina']);
  }
  if((urlVars['dc'])){
    $(".dc").val(urlVars['dc']);
  }
  if((urlVars['cuenta'])){
    $(".ncuenta").val(urlVars['cuenta']);
  }

  // Política desactivada por defecto
  //$(".check-politica").attr("checked", false);

});
