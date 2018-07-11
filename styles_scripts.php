<!-- *************** CSS y JS ****************** -->
<!--script>
  //var cabecera = "<?php if(isset($_POST["submitted"]["foto"])){ echo $_POST['submitted']['foto']; } ?>";
</script-->

<?php if($email_saver){ ?>
  <script type="text/javascript" src="<?php print $form_path; ?>/js/saver.js"></script>
<?php } ?>

<!-- Estilos genéricos de la WEB -->
<?php if($node->nid != $firma_navidad ){ // PROVISIONAL ?>
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
  <!-- Estilos genéricos de formularios -->
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
  <!-- Script Cookies -->
    <script type="text/javascript" src="<?php print $form_path; ?>/js/cookielawinfo.js"></script>
<?php } ?>

<!-- Estilos especificos de formularios de Socixs, Donativos, Área privada, etc -->
<?php if ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $socixs_gracias_list)
      || in_array($node->nid, $donativos_form_list) || in_array($node->nid, $donativos_gracias_list) && !$mobile){ ?>
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">
  <script type="text/javascript" src="<?php print $form_path; ?>/js/socixs-form.js"></script>
  <?php if ( in_array($node->nid, $donativos_form_list) ) { ?>
      <script type="text/javascript" src="<?php print $form_path; ?>/js/donativos.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/donativos-form.css">
  <?php } ?>

  <?php if ( in_array($node->nid, $socixs_form_list) && !in_array($node->nid, $telemkg_form_list) ) { ?>
      <script type="text/javascript" src="<?php print $form_path; ?>/js/membership-validator.js"></script>
  <?php } ?>

<?php } ?>

<!-- AUTO COMPLETE PARA FORMULARIOS DE TELEMARKETING -->
<?php if( in_array($node->nid, $telemkg_form_list) ){ ?>
    <script type="text/javascript" src="<?php print $form_path; ?>/js/autofill.js"></script>
<?php } ?>

<?php if ( in_array($node->nid, $socixs_form_list) && !in_array($node->nid, $telemkg_form_list) ) { ?>
    <script type="text/javascript" src="<?php print $form_path; ?>/js/membership-validator.js"></script>
<?php } ?>
<!-- Si es dipositivo móvil -->
<?php if( !empty($socixs_form_list_mobile) && in_array($node->nid, $socixs_form_list_mobile) && $mobile){ ?>
  <script type="text/javascript" src="<?php print $form_path; ?>/js/socixs-form-m.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/donativos-form.css">-->
<?php } ?>
<?php if( !empty($donativos_form_list_mobile) && in_array($node->nid, $donativos_form_list_mobile)  && $mobile){ ?>
  <script type="text/javascript" src="<?php print $form_path; ?>/js/donativos-m.js"></script>
<?php } ?>
<?php if( !empty($donativos_form_list_mobile) && (in_array($node->nid, $socixs_gracias_list_mobile) ||
        in_array($node->nid, $donativos_gracias_list_mobile) ) && $mobile){ ?>
  <script type="text/javascript" src="<?php print $form_path; ?>/js/gracias-m.js"></script>
<?php } ?>

<!-- Campañas específicas -->
<?php if($node->nid == $firma_navidad ){ ?>
      <script type="text/javascript" src="<?php print $form_path; ?>/js/navidad.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/bootstrap-flex.css">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/hover.min.css">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/firma-navidad.css">
<?php  } else if ( in_array($node->nid, $navidad_list) && !in_array($node->nid, $socixs_gracias_list) && !in_array($node->nid, $donativos_gracias_list) ) { ?>
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/navidad.css">
<?php  } else if ( in_array($node->nid, $nosevende_list) /*&& !in_array($node->nid, $socixs_gracias_list) && !in_array($node->nid, $donativos_gracias_list)*/ ) { ?>
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/nosevende.css">
<?php  } else if ( in_array($node->nid, $loteria_navidad_list) && !in_array($node->nid, $socixs_gracias_list) && !in_array($node->nid, $donativos_gracias_list) ) { ?>
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<?php if(!$mobile){?>
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/loteria.css">
<?php }else{ ?>
      <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/loteria-m.css">
<?php }
}
?>
<!-- Script Click to Call -->
<script type="text/javascript" id="libWebphone" src="<?php print $theme_path; ?>/js/webphone.js"></script>
<script type="text/javascript" id="libWebphone" src="//llamamegratis.es/amnesty/js/webphone.dinamics.js"></script>
