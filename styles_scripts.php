<!-- *************** CSS y JS ****************** -->

<link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
<!-- Cargamos los CSS que necesitamos para el contenido genérico -->
<link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
<!-- Añadimos la hoja CSS para el formulario de Socixs en concreto -->
<?php if ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $socixs_gracias_list) ){ ?>
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">
  <script type="text/javascript" src="<?php print $form_path; ?>/js/socixs-form.js"></script>
  <?php if ( in_array($node->nid, $donativos_form_list) ) { ?>
    <script type="text/javascript" src="<?php print $form_path; ?>/js/donativos.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/donativos-form.css">
  <?php } ?>
  <?php if ( in_array($node->nid, $navidad_list) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/navidad.css">
  <?php } ?>
<?php } ?>
