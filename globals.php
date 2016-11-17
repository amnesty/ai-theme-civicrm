<?php

// Global vars and parameters for the theme
global $base_url;
$theme_path = $base_url . "/sites/all/themes/ai-theme-civicrm";
$form_path = $theme_path . "/ai-formulario";
$images_path = $form_path . "/images/"; // directorio donde se encuentran las imágenes dentro del tema del formulario


//Seleccionamos la imagen de cabecera
$img_header = "header.jpg"; //Por defecto
$extra_class="";
if ($antevenio_form_B == $node->nid || $node->nid == $antevenio_gracias_B || $node->nid==$socixs_form_B || $node->nid==$socixs_gracias_B ){
        $img_header = "headerB.jpg";
        $extra_class="responsive--bg-b";
} else if ($antevenio_form_C == $node->nid || $antevenio_gracias_C == $node->nid ){
        $extra_class="responsive--bg-c";
        $img_header = "headerC.jpg";
} else if ($antevenio_form_D == $node->nid || $antevenio_gracias_D == $node->nid ){
        $extra_class="responsive--bg-d";
        $img_header = "headerD.jpg";
} else if ($antevenio_form_E == $node->nid || $antevenio_gracias_E == $node->nid ){
        $img_header = "headerE.jpg";
} else if( in_array($node->nid,$navidad_list) ){
        $img_header = "header-navidad.jpg";
} else if ( in_array($node->nid, $donativos_form_list) || $node->nid == $donativos_gracias || $node->nid == $donativos_gracias_cat){
        $extra_class="responsive--bg-don";
        $img_header = "header_donativo.jpg";
}


?>
