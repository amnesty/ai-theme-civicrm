<?php

//Idioma
$cat = 0;
$url = $_SERVER['REQUEST_URI'];
if (preg_match('/\/cat/',$url)){
  $cat = 1;
}

// Globals
include_once('config.php'); // variables dependientes del entorno
include_once('globals.php'); // textos, estructura, etc comun
include_once('meta-tags.php'); // meta tags para redes sociales
include_once ($lib_path.'/Mobile_Detect/Mobile_Detect.php'); // Class Mobile Detect

// Patch para justicia por navidad
$url = $_SERVER['REQUEST_URI'];
if (preg_match('/haz-un-donativo-por-navidad/', $url)) {
  header('Location: ' . $base_url . '/haz-un-donativo-justicia');
}
else if (preg_match('/unete-a-amnistia-por-navidad/', $url)) {
  header('Location: ' . $base_url . '/unete-a-amnistia-justicia');
}

// AB Testing
$splitter_url = 'sites/all/themes/ai-theme-civicrm/splitter/ab.php';
if (file_exists($splitter_url)) {
  include_once( $splitter_url );
}

// Origen
if (!isset($_GET["origen"]) ){
    $_GET["origen"] = "web";
}

// Comprobamos si es dispositivo móvil
$detect = new Mobile_Detect;
$mobile = 0;
if ($detect->isMobile() || $detect->isTablet()){
    $mobile = 1;
}

/*Formulario Móvil de Donativo */
if (preg_match('/haz-un-donativo/', $url)) {
	if (explode("/", $url)[1] == 'haz-un-donativo' && explode("/", $url)[2] != 'm' && explode("/", $url)[2] != 'gracias') {
	  if ($mobile == 1){
    		header('Location: ' . $base_url . '/haz-un-donativo/m/'.explode("/", $url)[2]);
	  }
	}
}

/*Formulario Móvil de Asociación*/
if (preg_match('/unete-a-amnistia/', $url)) {
  if ($mobile == 1 && explode("/", $url)[1] == 'unete-a-amnistia'){
    if (explode("/", $url)[2] != 'cat' && substr(explode("/", $url)[2],0,1) != 'm' && explode("/", $url)[2] != 'gracias') {
      header('Location: ' . $base_url . '/unete-a-amnistia/m/'.explode("/", $url)[2]);
    }elseif (explode("/", $url)[2] == 'cat' && substr(explode("/", $url)[3],0,1) != 'm' && explode("/", $url)[3] != 'gracias' ){
      /*Formulario Móvil de Asociación Catalán*/
      header('Location: ' . $base_url . '/unete-a-amnistia/cat/m/'.explode("/", $url)[3]);
    }
   }elseif ($mobile != 1 && explode("/", $url)[1] == 'unete-a-amnistia'){
      if (explode("/", $url)[2] != 'cat' && substr(explode("/", $url)[2],0,1) == 'm') {
        header('Location: ' . $base_url . '/unete-a-amnistia');
      } elseif (explode("/", $url)[2] == 'cat' && substr(explode("/", $url)[3],0,1) == 'm'){
        /*Formulario Móvil de Asociación Catalán*/
        header('Location: ' . $base_url . '/unete-a-amnistia/cat/');
      }
    }
}

//RECIBE PARAMETROS DE CAMPAÑAS GOOGLE Y FACEBOOK. LOS ASIGNAMOS A LA SESSION RESPECTIVAMENTE PARA NO PERDERLOS
if(isset($_GET['pk_campaign'])) {
	$_SESSION['pk_campaign'] = $_GET['pk_campaign'];
}
if(isset($_GET['utm_campaign'])) {
	$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
}

?>

<?php
  // Estilos y scripts
  include_once('styles_scripts.php');
?>

<?php if($node->nid == $firma_navidad) { ?>

    <?php print $messages; ?> <!-- Errors -->
    <?php print render($page['content']); ?>

<?php } else { ?>

<div id="page-wrapper" onload="errors()">
  <div id="page">
    <div id="content" class="clearfix">
      <?php
        // Header
        include_once('header.php');
      ?>
      <?php
        // Contenido
        include_once('content.php');
      ?>
    </div>
    <?php include_once('footer.php'); ?>
  </div>
</div>

<?php } ?>

<!-- Política de cookies -->
<?php include_once('cookies.php'); ?>

<!-- Estadísticas en Piwik (si aplica, sino debe estar vacío) -->
<?php include_once('piwik.php'); ?>

<!-- Pixel de Facebook (si aplica) -->
<?php include_once('pixel-fb.php'); ?>
<!-- Pixel de Twitter (si aplica) -->
<?php include_once('pixel-twitter.php'); ?>
<!-- Pixel de Adwords (si aplica) -->
<?php include_once('adwords.php'); ?>
