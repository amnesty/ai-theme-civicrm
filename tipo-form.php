<?php

//DEFINE TIPO DE FORMULARIOS
DEFINE("TIPO_FORMULARIO","tipo_formulario");
DEFINE("FORMULARIO_ASOCIACION",1);
DEFINE("FORMULARIO_ASOCIACION_GRACIAS",2);
DEFINE("FORMULARIO_DONACION",3);
DEFINE("FORMULARIO_DONACION_GRACIAS",4);
DEFINE("FORMULARIO_ASOCIACION_MOVIL",5);
DEFINE("FORMULARIO_ASOCIACION_MOVIL_GRACIAS",6);
DEFINE("FORMULARIO_DONACION_MOVIL",7);
DEFINE("FORMULARIO_DONACION_MOVIL_GRACIAS",8);

$aComponentTipoForm = getArrayTipoFormulario($node->webform['components']);

if ($aComponentTipoForm[form_key] == TIPO_FORMULARIO){
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

//Bucamos el id que contiene el tipo de componente Tipo Formulario
function getArrayTipoFormulario($arrayComponentes)
{
  foreach ($arrayComponentes as $aComponents)
  {
        if ($aComponents[form_key] == TIPO_FORMULARIO && $aComponents[type] == 'select'){
            return $aComponents;
        }
  }
}
?>
