<?php

DEFINE("TIPO_FORMULARIO","tipo_formulario");
DEFINE("IMG_CABECERA","img_cabecera");
//DEFINE TIPO DE FORMULARIOS
DEFINE("FORMULARIO_ASOCIACION",1);
DEFINE("FORMULARIO_ASOCIACION_GRACIAS",2);
DEFINE("FORMULARIO_DONACION",3);
DEFINE("FORMULARIO_DONACION_GRACIAS",4);
DEFINE("FORMULARIO_ASOCIACION_MOVIL",5);
DEFINE("FORMULARIO_ASOCIACION_MOVIL_GRACIAS",6);
DEFINE("FORMULARIO_DONACION_MOVIL",7);
DEFINE("FORMULARIO_DONACION_MOVIL_GRACIAS",8);

//Si el tipo de formulario está configurado en la pantalla de Civi se categorita aqui
$aComponentTipoForm = getArrayComponentByType($node->webform['components'], TIPO_FORMULARIO);

if ($aComponentTipoForm[form_key] == TIPO_FORMULARIO && $aComponentTipoForm[type] == 'select'){
  switch ($aComponentTipoForm[value]) {
    case FORMULARIO_ASOCIACION:
      array_push($socixs_form_list,$node->nid);
      break;
    case FORMULARIO_ASOCIACION_GRACIAS:
      array_push($socixs_gracias_list,$node->nid);
      break;
    case FORMULARIO_DONACION:
      array_push($donativos_form_list,$node->nid);
      break;
    case FORMULARIO_DONACION_GRACIAS:
      array_push($donativos_gracias_list,$node->nid);
      break;
    case FORMULARIO_ASOCIACION_MOVIL:
      array_push($socixs_form_list_mobile,$node->nid);
      break;
    case FORMULARIO_ASOCIACION_MOVIL_GRACIAS:
      array_push($socixs_gracias_list_mobile,$node->nid);
      break;
    case FORMULARIO_DONACION_MOVIL:
      array_push($donativos_form_list_mobile,$node->nid);
      break;
    case FORMULARIO_DONACION_MOVIL_GRACIAS:
      array_push($donativos_gracias_list_mobile,$node->nid);
      break;
    }
}

//Comprobamos si tiene imagen de cabecera esta configurada en el formulario de civi
$aComponentTipoForm = getArrayComponentByType($node->webform['components'], IMG_CABECERA);

if ($aComponentTipoForm[form_key] == IMG_CABECERA){
    $exite_img_cabecera_form = 1;
    $img_cabecera = $aComponentTipoForm[value];
}

//Función que busca un componenete del formulario dentro del array que contiente todos los componentes.
function getArrayComponentByType($arrayComponentes, $TipoComponente)
{
  foreach ($arrayComponentes as $aComponents)
  {
        if ($aComponents[form_key] == $TipoComponente){
            return $aComponents;
        }
  }
}
?>
