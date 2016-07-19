<?php //include_once('sites/all/themes/blank/ab.php'); ?>
<div id="page-wrapper" onload="errors()"><div id="page"><div id="content" class="clearfix">

<?php
// Origen
if (!isset($_GET["origen"]) ){
    $_GET["origen"] = "web";
}

//Idioma
$cat = 0;
$url = $_SERVER['REQUEST_URI'];
if (preg_match('/cat/',$url)){
  $cat = 1;
}

// Globals
include_once('config.php');

// ****************************************************** CSS *********************************************************************
?>
  <!-- WEB -->
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
  <!-- Cargamos los CSS que necesitamos para el contenido genérico -->
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
  <!-- Añadimos la hoja CSS para el formulario de Socixs en concreto -->
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">

<!-- ************************************************** CONTENIDO *************************************************************************-->

<!-- Header -->
<nav class="navbar navbar-fixed-top">
<header class="header" data-header="" role="banner">
    <div class="header__container" data-header-container="">
        <div class="header__slogan-container">
        <?php if($cat){ ?>
            <div class="header__slogan"> Actuem pels drets humans arreu del món. </div>
        <?php }else{ ?>
              <div class="header__slogan"> Actuamos por los derechos humanos en todo el mundo </div>
        <?php } ?>
        </div>
        <?php if($cat){ ?>
          <h1 class="logo" data-logo=""><a class="logo__link" href="https://www.amnistiacatalunya.org">Amnistia Internacional Catalunya</a></h1>
        <?php }else{ ?>
          <h1 class="logo" data-logo=""><a class="logo__link" href="https://www.es.amnesty.org">Amnistía Internacional España</a></h1>
        <?php } ?>
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
                <?php if ( $node->nid!=$socixs_gracias && $node->nid!=$socixs_gracies ) { ?>
                  <?php if($cat){ ?>
                              <span class="heading--tape--dark">Uneix-te a Amnistia Internacional</span>
                  <?php }else{ ?>
                              <span class="heading--tape--dark">Únete a Amnistía Internacional</span>
                  <?php } ?>
                <?php } else { ?>
                  <?php if($cat){ ?>
                              <span class="heading--tape--dark">Et donem la benvinguda!</span>
                  <?php }else{ ?>
                              <span class="heading--tape--dark">¡Te damos la bienvenida!</span></span>
                  <?php } ?>
                <?php } ?>
            </h2>
        </div>
    </div>
</div>
<!-- Image after header -->

<!-- Page content -->
<div class="container--wide">
    <!-- Bootstrap Grid -->
    <div class="grid">
   	 <div id="content-area">
            <!-- Formulario -->
         	<div class="content-form clearfix">
            <?php
            // ********* Sólo mostramos el texto de intro en el formulario
            if ($node->nid!=$socixs_gracias && $node->nid!=$socixs_gracies){ ?>
			      <p class="text-intro">
              <?php if($cat == 0){ ?>
                       <span>Tu ayuda hace posible que podamos renunciar a subvenciones de gobiernos y partidos políticos, porque nuestra independencia está por encima de todo. </span>
                       <span>Es gracias a personas como tú que nos apoyáis económicamente por lo que podemos denunciar sin presiones de ningún tipo cualquier violación de los derechos humanos. </span>
                       <span><b>Gracias por creer en un mundo más justo.</b></span>
              <?php }else{ ?>
                       <span>La teva ajuda fa possible que puguem renunicar a subvencions de governs i partits polítics, perquè la nostra independència està per sobre de tot. </span>
                       <span>És gràcies a persones com tu que ens doneu suport econòmic que podem denunciar sense pressions de cap mena qualsevol violació dels drets humans. </span>
                       <span><b>Gràcies per creure en un món més just.</b></span>
              <?php } ?>
              </p>
            <?php } ?>
		        <div class="box-form-es">
                    <?php print $messages; ?> <!-- Errors -->
                    <?php print render($page['content']); ?>

                    <?php // ****************  Sólo mostramos los botones de compartir en la página de gracias ******************
                        if ($node->nid==$socixs_gracias || $node->nid==$socixs_gracies ){ ?>
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
                <?php if($node->nid!=$socixs_gracias && $node->nid!=$socixs_gracies) {
                    print '</div><!-- Box FORM_ES -->'; ?>
                <div class="box-es-right">
                        <div class="three-column ventajas">
                            <img src="<?php print $images_path; ?>pig.png" alt="pig"/>
                            <?php if($cat){ ?>
                              <h3>Coneixes els avantatges fiscals de ser soci/a?</h3>
                              <p>Totes les teves aportacions desgraven un 75% els primers 150€. A partir d'aquesta xifra, el 30%. Si en els últims 3 anys s'han mantingut o augmentat les aportacions a l'organització, la desgravació puja a un 35% per a premiar la teva fidelitat. Aquestes deduccions no s'apliquen al País Basc i a Navarra.
                            <?php }else{ ?>
                              <h3>¿Conoces las ventajas fiscales de ser socio/a?</h3>
                              <p>Todas tus aportaciones desgravan un 75% los primeros 150€. A partir de esa cifra, el 30%. Si en los últimos tres años se han mantenido o aumentado las aportaciones a la organización, la desgravación sube a un 35% para premiar tu fidelidad. Estas deducciones no aplican en País Vasco y Navarra.
                            <?php } ?>
                            </p>
                        </div>
                        <div class="three-column formas-pago">
                            <img src="<?php print $images_path; ?>cartera.png" alt="cartera"/>
                            <?php if($cat){ ?>
                              <h3>Altres mètodes de pagament</h3>
                              <p>Si tens algún problema en realitzar la teva donació o vols informació sobre altres mètodes de pagament o sobre quotes reduïdes, truca'ns al <b>913101277</b> (extensions <b>30</b> i <b>37</b>) o escriu-nos a <a href="mailto:socios@es.amnesty.org" title="socios@es.amnesty.org">socios@es.amnesty.org</a></p>
                            <?php }else{ ?>
                              <h3>Otras formas de pago</h3>
                              <p>Si tienes algún problema al realizar tu donación o quieres información sobre otras formas de pago o sobre cuotas reducidas, llámanos a <b>913101277</b> (extensiones <b>30</b> y <b>37</b>) o escribe a <a href="mailto:socios@es.amnesty.org" title="socios@es.amnesty.org">socios@es.amnesty.org</a></p>
                            <?php } ?>
                        </div>
                        <div class="three-column compromiso">
                            <img src="<?php print $images_path; ?>ventana.png" alt="ventana"/>
                            <?php if($cat){ ?>
                              <h3>Transparència, el nostre compromís</h3>
                              <p>El 100% dels nostres recursos els destinem a lluitar pels drets humans arreu del món. Els nostres comptes són públics i pots veure'ls a la web.</p>
                            <?php }else{ ?>
                              <h3>Transparencia, nuestro compromiso</h3>
                              <p>El 100% de nuestros recursos los destinamos a luchar por los derechos humanos en todo el mundo. Nuestras cuentas son públicas y puedes verlas en nuestra web.</p>
                            <?php } ?>
                        </div>
                </div><!-- /box-es-right -->
                <?php } ?>
                <?php if($node->nid==$socixs_gracias || $node->nid==$socixs_gracies) { print '</div><!-- Box FORM_ES -->'; }?>
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

</div></div></div>

<?php
// ****************** Estadísticas en Piwik, si aplica (el fichero tiene que existir aunque sea vacío) *********
include_once('piwik.php');
?>
