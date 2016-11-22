<!-- *************** CSS y JS ****************** -->

<!-- Estilos genéricos de la WEB -->
<?php if($node->nid != $firma_navidad ){ // PROVISIONAL ?>
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/webform.css">
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
  <!-- Estilos genéricos de formularios -->
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
<?php } ?>

<!-- Estilos especificos de formularios de Socixs, Donativos, Área privada, etc -->
<?php if ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $socixs_gracias_list)
      || in_array($node->nid, $donativos_form_list) || in_array($node->nid, $donativos_gracias_list) ){ ?>

  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">
  <script type="text/javascript" src="<?php print $form_path; ?>/js/socixs-form.js"></script>

  <?php if ( in_array($node->nid, $donativos_form_list) ) { ?>
      <script type="text/javascript" src="<?php print $form_path; ?>/js/donativos.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/donativos-form.css">
  <?php } ?>

<?php } ?>

<!-- Campaña Navidad -->
<?php if($node->nid == $firma_navidad ){ ?>
      <script type="text/javascript" src="<?php print $form_path; ?>/js/navidad.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/bootstrap-flex.css">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/firma-navidad.css">
<?php  } else if ( in_array($node->nid, $navidad_list) && !in_array($node->nid, $socixs_gracias_list) && !in_array($node->nid, $donativos_gracias_list) ) { ?>
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/navidad.css">
<?php } ?>
