<?php

// Global vars and parameters for the theme
global $base_url;
$theme_path = $base_url . "/sites/all/themes/ai-theme-civicrm";
$form_path = $theme_path . "/ai-formulario";
$images_path = $form_path . "/images/"; // directorio donde se encuentran las imágenes dentro del tema del formulario

// Seleccionamos la imagen de cabecera
$img_header = "header.jpg"; // Por defecto, A
$extra_class="";

if ($node->nid == $antevenio_form_B || $node->nid == $antevenio_gracias_B || $node->nid==$socixs_form_B || $node->nid==$socixs_gracias_B ){ // socixs antevenio B
        $img_header = "headerB.jpg";
        $extra_class="responsive--bg-b";
} else if ( $node->nid == $donativos_regalo ){ // formulario turquia regalo
        $extra_class="responsive--bg-regalo";
        $img_header = "header-turquia.jpg";
} else if ( $node->nid == $donativos_islamofobia ){ // formulario islamofobia
        $extra_class="responsive--bg-regalo";
        $img_header = "header-islamofobia.png";
} else if ($antevenio_form_C == $node->nid || $antevenio_gracias_C == $node->nid ){ // socixs antevenio C
        $extra_class="responsive--bg-c";
        $img_header = "headerC.jpg";
} else if ($antevenio_form_D == $node->nid || $antevenio_gracias_D == $node->nid ){ // socixs antevenio D
        $extra_class="responsive--bg-d";
        $img_header = "headerD.jpg";
} else if ($antevenio_form_E == $node->nid || $antevenio_gracias_E == $node->nid ){ // socixs antevenio E
        $img_header = "headerE.jpg";
} else if( in_array($node->nid,$navidad_list) ){ // campaña navidad 2016
        $img_header = "header-navidad.jpg";
        $extra_class="responsive--bg-nav";
} else if(in_array($node->nid,$loteria_navidad_list) ){ // campaña loteria de navidad 2017
        $img_header = "header-loteria.jpg";
        $extra_class="responsive--bg-nav";
} else if( in_array($node->nid,$nosevende_list) && ( in_array($node->nid,$donativos_form_list) || in_array($node->nid,$donativos_gracias_list) ) ) { // donativos campaña nosevende
        $img_header = "header-nosevende.jpg";
        $extra_class="responsive--bg-nosevende";
} else if( in_array($node->nid,$nosevende_list) ){ // socios campaña nosevende
        $img_header = "header-nosevende-2.jpg";
        $extra_class="responsive--bg-nav";
} else if( $node->nid == $socixs_mordaza ){ // socios campaña mordaza
        $img_header = "header-mordaza.jpg";
        $extra_class="responsive--bg-mordaza";
} else if( $node->nid == $socixs_google_1 || $node->nid == $gracias_socixs_google_1 ){ // socios campaña adowrds 1
        $img_header = "header-google1.jpg";
        $extra_class="responsive--bg-mordaza";
} else if( $node->nid == $socixs_google_2 || $node->nid == $gracias_socixs_google_2 ){ // socios campaña adwords 2
        $img_header = "header-google2.jpg";
        $extra_class="responsive--bg-mordaza";
} else if ( in_array($node->nid, $donativos_form_list) || $node->nid == $donativos_gracias || $node->nid == $donativos_gracias_cat){ // resto de donativos
        $extra_class="responsive--bg-don";
        $img_header = "header_donativo.jpg";
}
?>
