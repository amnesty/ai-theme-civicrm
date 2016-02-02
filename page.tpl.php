<div id="page-wrapper" onload="errors()"><div id="page"><div id="content" class="clearfix">

<?php

// globals
include_once('config.php');

if ($node->nid==$form_node){ // Sólo para el formulario de Socixs

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Cargamos los CSS que necesitamos para el contenido genérico -->
<link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
<link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
<!-- Añadimos la hoja CSS para el formulario de Socixs en concreto -->
<link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">

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
                <span class="heading--tape--dark">Únete a Amnistía Internacional</span>
            </h2>
        </div>
    </div>
</div><!-- Image after header -->


<!-- Page content -->
<div class="container--wide"><!-- Bootstrap Grid -->
    <div class="grid">
   	 <div id="content-area">
            <!-- Formulario -->
         	<div class="content-form clearfix">
			     <p class="text-intro">
                     <span>Tu ayuda hace posible que podamos renunciar a subvenciones de gobiernos y partidos políticos, porque nuestra independencia está por encima de todo. </span>
                     <span>Es gracias a personas como tú que nos apoyáis económicamente por lo que podemos denunciar sin presiones de ningún tipo cualquier violación de los derechos humanos. </span>
                     <span><b>Gracias por creer en un mundo más justo.</b></span>
                </p>
		        <div class="box-form-es">
                	<p>Los campos marcados con * son obligatorios.</p>
                    <?php print $messages; ?> <!-- Errors -->
                    <?php print render($page['content']); ?>
                </div>
                <div class="box-es-right">
                    <div class="three-column ventajas">
                        <img src="<?php print $images_path; ?>pig.png" alt="pig"/>
                        <h3>¿Conoces las ventajas fiscales de ser socio/a?</h3>
                        <p>Todas tus aportaciones desgravan un 50% los primeros 150€. A partir de esa cifra, el 27,5%. En el País Vasco y Navarra, la deducción es del 20% y 25% respectivamente.</p>
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
			</div>
		</div>    
	</div>
</div>

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

<?php
}
else {
?>
<!-- Cargamos los CSS que necesitamos para el contenido de diseño base de CiviCRM -->
<link rel="stylesheet" type="text/css" href="<?php print $base_url; ?>/modules/system/system.theme.css">
<link rel="stylesheet" type="text/css" href="<?php print $base_url; ?>/sites/all/modules/webform_layout/layout_box.css">
<link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/webform_add.css">

<!-- Contenido básico de una página si no es la del formulario de socixs -->
    <div class="content-area">
        <!-- Errors -->
        <?php print $messages; ?>

        <!-- Content -->
        <?php print render($page['content']); ?>
    </div>
<?php } ?>
</div></div></div>
