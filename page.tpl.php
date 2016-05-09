<div id="page-wrapper" onload="errors()"><div id="page"><div id="content" class="clearfix">

<?php
// Origen
if (!isset($_GET["origen"]) ){
    $_GET["origen"] = "web";
}

// Globals
include_once('config.php');

// ****************************************************** CSS *********************************************************************

// *********** Sólo para el formulario de Socixs y su página de gracias ***************
if ( $node->nid==$socixs_form || $node->nid==$socixs_gracias ){
?>
    <!-- WEB -->
    <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
    <!-- Cargamos los CSS que necesitamos para el contenido genérico -->
    <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
    <!-- Añadimos la hoja CSS para el formulario de Socixs en concreto -->
    <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">

<?php
// **** Contenido general del resto de páginas o si es página de confirmación ******* 
} 
else {
?>
    <!-- Cargamos los CSS que necesitamos para el contenido de diseño base de CiviCRM -->
    <link rel="stylesheet" type="text/css" href="<?php print $base_url; ?>/modules/system/system.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php print $base_url; ?>/sites/all/modules/webform_layout/layout_box.css">
    <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/webform_add.css">
<?php 
} ?>    

<!-- ************************************************** CONTENIDO *************************************************************************-->

<?php
// *********** HEADER: Sólo para el formulario de Socixs ***************
if ($node->nid==$socixs_form || $node->nid==$socixs_gracias){ 
?>
<!-- Header -->
<nav class="navbar navbar-fixed-top">
<header class="header" data-header="" role="banner">
    <div class="header__container" data-header-container="">
        <div class="header__slogan-container">
            <div class="header__slogan"> Actuamos por los derechos humanos en todo el mundo </div>
        </div>
        <h1 class="logo" data-logo=""><a class="logo__link" href="https://www.es.amnesty.org">Amnistía Internacional España</a></h1>
    </div>
</header>
</nav>
<!-- Image after header-->
<div class="image-header image-header--has-credits-sm image-header--actua">
    <div style="background-image: url('<?php print $form_path; ?>/images/header.jpg?anchor=topcenter');" class="responsive--bg  lazyloaded"
        data-bgset="<?php print $form_path; ?>/images/header.jpg?anchor=topcenter">
    </div>
    <noscript> 
        <img src="<?php print $form_path; ?>/images/header.jpg?anchor=topcenter" class=responsive__img> 
    </noscript>
    <div class="image-header__content--medium">
        <div class="image-headline--full">
            <h2 class="image-headline__actua-title">
                <?php if ( $node->nid==$socixs_form) { ?>
                    <span class="heading--tape--dark">Únete a Amnistía Internacional</span>
                <?php } else if ( $node->nid==$socixs_gracias) { ?>
                    <span class="heading--tape--dark">¡Te damos la bienvenida!</span>
                <?php } ?>
            </h2>
        </div>
    </div>
</div>
<!-- Image after header -->
<?php } ?>

<!-- Page content -->
<div class="container--wide">
    <!-- Bootstrap Grid -->
    <div class="grid">
<?php
// ************************************************ Solo formulario socixs ******************************************************** 
if ( $node->nid==$socixs_form || $node->nid==$socixs_gracias) {  ?>
   	 <div id="content-area">
            <!-- Formulario -->
         	<div class="content-form clearfix">
            <?php
            // ********* Sólo mostramos el texto de intro en el formulario
            if ($node->nid==$socixs_form ){ ?>
			    <p class="text-intro">
                     <span>Tu ayuda hace posible que podamos renunciar a subvenciones de gobiernos y partidos políticos, porque nuestra independencia está por encima de todo. </span>
                     <span>Es gracias a personas como tú que nos apoyáis económicamente por lo que podemos denunciar sin presiones de ningún tipo cualquier violación de los derechos humanos. </span>
                     <span><b>Gracias por creer en un mundo más justo.</b></span>
                </p>
            <?php } ?>
		        <div class="box-form-es">
                    <?php print $messages; ?> <!-- Errors -->
                    <?php print render($page['content']); ?>

                    <?php // ****************  Sólo mostramos los botones de compartir en la página de gracias ******************
                        if ($node->nid==$socixs_gracias ){ ?>
                        <div id="share-buttons" class="ai-accion-firma-compartir">
                            <!--h4 class="ai-accion-firma-compartir__header">¿Nos ayudas a conseguir más apoyo?</h4-->
                            <a class="ai-accion-firma-compartir__facebook" href="javascript:" data-ai-share-title="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo">
                                Compartir en <span class="ai-accion-firma-compartir__facebook-icon"></span><span class="sr-only">Facebook</span>
                            </a>
                            <a class="ai-accion-firma-compartir__twitter" href="javascript:" data-ai-share-summary-html="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo">
                                Compartir en <span class="ai-accion-firma-compartir__twitter-icon"></span>
                            </a>
                        </div>
                    <?php } ?>
                <?php if($node->nid==$socixs_form) { 
                    print '</div><!-- Box FORM_ES -->'; ?>
                <div class="box-es-right">
                        <div class="three-column ventajas">
                            <img src="<?php print $images_path; ?>pig.png" alt="pig"/>
                            <h3>¿Conoces las ventajas fiscales de ser socio/a?</h3>
                            <p>Todas tus aportaciones desgravan un 75% los primeros 150€. A partir de esa cifra, el 30%. Si en los últimos tres años se han mantenido o aumentado las aportaciones a la organización, la desgravación sube a un 35% para premiar tu fidelidad. Estas deducciones no aplican en País Vasco y Navarra.
                            </p>
                        </div>
                        <div class="three-column formas-pago">
                            <img src="<?php print $images_path; ?>cartera.png" alt="cartera"/>
                            <h3>Otras formas de pago</h3>
                            <p>Si tienes algún problema al realizar tu donación o quieres información sobre otras formas de pago o sobre cuotas reducidas, llámanos a <b>913101277</b> (extensiones <b>30</b> y <b>37</b>) o escribe a <a href="mailto:socios@es.amnesty.org" title="socios@es.amnesty.org">socios@es.amnesty.org</a></p>
                        </div>
                        <div class="three-column compromiso">
                            <img src="<?php print $images_path; ?>ventana.png" alt="ventana"/>
                            <h3>Transparencia, nuestro compromiso</h3>
                            <p>El 100% de nuestros recursos los destinamos a luchar por los derechos humanos en todo el mundo. Nuestras cuentas son públicas y puedes verlas en nuestra web.</p>
                        </div>
                </div><!-- /box-es-right -->
                <?php } ?>
                <?php if($node->nid==$socixs_gracias) { print '</div><!-- Box FORM_ES -->'; }?>
			 </div>
		</div>    
<?php
// *********************** Contenido básico de una página si no es la del formulario de socixs ****************************
} else { ?>
    <div class="content-area">
        <!-- Errors -->
        <?php print $messages; ?>
        <!-- Content -->
        <?php print render($page['content']); ?>
    </div>
<?php } ?>

    </div>
</div>

<?php
// *********** Footer: Sólo para el formulario de Socixs ***************
if ($node->nid==$socixs_form || $node->nid==$socixs_gracias){ 
?>
<!-- Footer -->
<footer class="footer print-hidden">
    <div class="footer__container">
        <div class="grid footer__bottom">
            <div class="footer__col--right">
                <ul class="social-list print-hidden">
                    <li class="social-list__item"><a href="http://www.facebook.com/amnistia.internacional.espana" class="social-list__link--facebook" data-ga="event,Social,click,facebook">Haznos Me Gusta en Facebook</a></li>
                    <li class="social-list__item"><a href="http://twitter.com/amnistiaespana" class="social-list__link--twitter" data-ga="event,Social,click,amnestytwitter">Síguenos en Twitter</a></li>
                    <li class="social-list__item"><a href="http://www.youtube.com/amnistiaespana" class="social-list__link--youtube" data-ga="event,Social,click,youtube">Suscríbete a nuestro canal de YouTube</a></li>
                    <li class="social-list__item"><a href="http://instagram.com/amnistiaespana/" class="social-list__link--instagram" data-ga="event,Social,click,instagram">Síguenos en Instagram</a></li>
                </ul>
            </div>
            <div class="footer__col--left">
                <p class="footer-legal"> 
                    <a href="https://www.es.amnesty.org/contacto/" class="footer-legal__link">Contacto</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
                    <a href="https://www.es.amnesty.org/politica-de-privacidad/" class="footer-legal__link">Política de privacidad</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
                    <a href="https://www.es.amnesty.org/mapa-del-sitio/" class="footer-legal__link">Mapa del sitio</a> 
                </p>
                <p class="footer-copyright">© 2016 Amnistía Internacional España</p>
            </div>
        </div>
    </div>
</footer>
<?php } ?>

</div></div></div>

<?php
// ****************** Estadísticas en Piwik, si aplica (el fichero tiene que existir aunque sea vacío) *********
include_once('piwik.php');
?>
