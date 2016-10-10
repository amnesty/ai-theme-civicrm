<div id="page-wrapper" onload="errors()"><div id="page"><div id="content" class="clearfix">

<?php
//Idioma
$cat = 0;
$url = $_SERVER['REQUEST_URI'];
if (preg_match('/\/cat/',$url)){
  $cat = 1;
}

// Globals
include_once('config.php');

// AB Testing
$splitter_url = 'sites/all/themes/ai-theme-civicrm/splitter/ab.php';
if (file_exists($splitter_url)) {
  include_once( $splitter_url );
}

// Origen
if (!isset($_GET["origen"]) ){
    $_GET["origen"] = "web";
}
// ****************************************************** CSS y JS *******************************************************************
?>
  <!-- WEB -->
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php print $theme_path; ?>/css/ai.css">
  <!-- Cargamos los CSS que necesitamos para el contenido genérico -->
  <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/style-form.css">
  <!-- Añadimos la hoja CSS para el formulario de Socixs en concreto -->
  <?php if ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $socixs_gracias_list) ){ ?>
    <link rel="stylesheet" type="text/css" href="<?php print $form_path; ?>/css/socixs-form.css">
    <script type="text/javascript" src="<?php print $form_path; ?>/js/socixs-form.js"></script>
  <?php } ?>

<!-- ************************************************** CONTENIDO *****************************************************************-->

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
    <div id="pixel"></div>
    <?php if ( $node->nid==$socixs_form_B || $node->nid==$socixs_gracias_B ) { ?>
      <div style="background-image: url('<?php print $form_path; ?>/images/headerB.jpg?anchor=topcenter');" class="responsive--bg responsive--bg-b lazyloaded"
          data-bgset="<?php print $form_path; ?>/images/headerB.jpg?anchor=topcenter">
      </div>
      <noscript>
          <img src="<?php print $form_path; ?>/images/headerB.jpg?anchor=topcenter" class=responsive__img>
      </noscript>
    <?php } elseif ( in_array($node->nid, $antevenio_list) ) { ?>
      <div style="background-image: url('<?php print $form_path; ?>/images/<?php print $img_antevenio; ?>?anchor=topcenter');" class="responsive--bg <?php print $extra_class; ?> lazyloaded"
          data-bgset="<?php print $form_path; ?>/images/<?php print $img_antevenio; ?>?anchor=topcenter">
      </div>
      <noscript>
          <img src="<?php print $form_path; ?>/images/<?php print $img_antevenio; ?>?anchor=topcenter" class=responsive__img>
      </noscript>
    <?php } else { //Formularios Socixs ?>
      <div style="background-image: url('<?php print $form_path; ?>/images/header.jpg?anchor=topcenter');" class="responsive--bg lazyloaded"
          data-bgset="<?php print $form_path; ?>/images/header.jpg?anchor=topcenter">
      </div>
      <noscript>
          <img src="<?php print $form_path; ?>/images/header.jpg?anchor=topcenter" class=responsive__img>
      </noscript>
    <?php } ?>
    <div class="image-header__content--medium">
        <div class="image-headline--full">
            <h2 class="image-headline__actua-title">
                <span class="heading--tape--dark"><?php  $title = explode('#',$node->title); echo $title[0];  ?></span>
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
            // ********* Sólo mostramos el texto de intro en el formulario de socixs
            if (in_array($node->nid, $socixs_form_list)){ ?>
			      <p class="text-intro">
              <?php if (($node->nid == $antevenio_form_B) || ($node->nid == $antevenio_form_E)){ ?>
                       <span>Miles de personas huyen del infierno de las bombas y buscan un hogar seguro. Personas ancianas, mujeres embarazadas y bebés; niños y niñas separados de sus familias. En Amnistía Internacional levantamos nuestra voz en defensa de todas las personas refugiadas para garantizarles un lugar seguro donde vivir, y devolver a cada niño y niña la infancia que se merece.</span><br>
                       <span>Renunciamos a cualquier subvención porque nuestra independencia está por encima de todo y, gracias a personas como tú, podemos denunciar sin presiones cualquier violación de los derechos humanos.</span><br>
                       <span><b>Gracias por creer en un mundo más justo.</b></span>
              <?php } elseif (($node->nid  == $antevenio_form_C) || ($node->nid == $antevenio_form_D)){ ?>
                       <span>En Amnistía Internacional luchamos para conseguir igualdad y protección para todas las mujeres y niñas.</span><br>
                       <span>Renunciamos a cualquier subvención porque nuestra independencia está por encima de todo y, gracias a personas como tú, podemos denunciar sin presiones violación de los derechos humanos.</span><br>
                       <span><b>Gracias por creer en un mundo más justo.</b></span>
              <?php } elseif($cat == 0){ ?>
                       <span>Tu ayuda hace posible que podamos renunciar a subvenciones de gobiernos y partidos políticos, porque nuestra independencia está por encima de todo. </span>
                       <span>Es gracias a personas como tú que nos apoyáis económicamente por lo que podemos denunciar sin presiones cualquier violación de los derechos humanos. </span>
                       <span><b>Gracias por creer en un mundo más justo.</b></span>
              <?php }else{ ?>
                       <span>La teva ajuda fa possible que puguem renunciar a subvencions de governs i partits polítics, perquè la nostra independència està per sobre de tot. </span>
                       <span>És gràcies a persones com tu que ens doneu suport econòmic que podem denunciar sense pressions de cap mena qualsevol violació dels drets humans. </span>
                       <span><b>Gràcies per creure en un món més just.</b></span>
              <?php } ?>
              </p>
            <?php } ?>
		        <div class="box-form-es">
                    <?php print $messages; ?> <!-- Errors -->
                    <?php print render($page['content']); ?>

                    <?php // ****************  Sólo mostramos los botones de compartir en la página de gracias ******************
                        if (in_array($node->nid, $socixs_gracias_list)){ ?>
                        <div id="share-buttons" class="ai-accion-firma-compartir">
                            <!--h4 class="ai-accion-firma-compartir__header">¿Nos ayudas a conseguir más apoyo?</h4-->
                            <?php if($cat){ ?>
                              <a class="ai-accion-firma-compartir__facebook" href="javascript:" data-ai-share-title="Fes-te soci/a d'Amnistia Internacional i recolza la nostra feina">
                                  Compartir a <span class="ai-accion-firma-compartir__facebook-icon"></span><span class="sr-only">Facebook</span>
                              </a>
                              <a class="ai-accion-firma-compartir__twitter" href="javascript:" data-ai-share-summary-html="Fes-te soci/a d'Amnistia Internacional i recolza la nostra feina" data-ai-share-via="amnistiaCAT">
                                  Compartir a <span class="ai-accion-firma-compartir__twitter-icon"></span>
                              </a>
                          <?php }else{ ?>
                            <a class="ai-accion-firma-compartir__facebook" href="javascript:" data-ai-share-title="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo">
                                Compartir en <span class="ai-accion-firma-compartir__facebook-icon"></span><span class="sr-only">Facebook</span>
                            </a>
                            <a class="ai-accion-firma-compartir__twitter" href="javascript:" data-ai-share-summary-html="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo" data-ai-share-via="amnistiaespana">
                                Compartir en <span class="ai-accion-firma-compartir__twitter-icon"></span>
                            </a>
                          <?php } ?>
                        </div>
                    <?php } ?>
                <?php if(in_array($node->nid, $socixs_form_list)) {
                    print '</div><!-- Box FORM_ES -->'; ?>
                    <div class="box-es-right col-xs-12 col-sm-12 col-md-3 col-lg-3 margin-top-20px-element"> <!-- box-es-right -->
                        <div class="row margin-0-auto">
                          <?php if( $node->nid == $area_privada) { ?>
                           <div class="three-column buenas-noticias bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- NUEVA CAJA - "BUENAS NOTICIAS" -->
                                <img src="<?php print $images_path; ?>icon-good-news.png" alt="imagen cara sonriente"/>
                                <h3>¡Buenas Noticias!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a class="link-caja-buenas-noticias" target="_blank" href="https://www.es.amnesty.org/en-que-estamos/para-celebrar" title="buenas noticias: en qué estamos - para celebrar">CONOCE MÁS</a>.</p>
                            </div>
                            <?php } ?>
                            <div class="three-column ventajas bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="<?php print $images_path; ?>pig.png" alt="imagen hucha"/>
                                <h3>¿Conoces las ventajas fiscales de ser socio/a?</h3>
                                <p>Todas tus aportaciones desgravan un 50% los primeros 150€. A partir de esa cifra, el 27,5%. En el País Vasco y Navarra, la deducción es del 20% y 25% respectivamente.</p>
                            </div>

                            <div class="three-column formas-pago bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="<?php print $images_path; ?>cartera.png" alt="imagen cartera"/>
                                <h3>Otras formas de pago</h3>
                                <p>Si tienes algún problema al realizar tu donación o quieres información sobre otras formas de pago o sobre cuotas reducidas, llámanos a <b>913101277</b> (extensiones <b>30</b> y <b>37</b>) o escribe a <a href="mailto:socios@es.amnesty.org" title="socios@es.amnesty.org">socios@es.amnesty.org</a></p>
                            </div>

                            <div class="three-column compromiso bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <img src="<?php print $images_path; ?>ventana.png" alt="imagen ventana"/>
                                <h3>Transparencia, nuestro compromiso</h3>
                                <p>El 100% de nuestros recursos los destinamos a luchar por los derechos humanos en todo el mundo. Nuestras cuentas son públicas y puedes verlas en nuestra web.</p>
                            </div>
                        </div>
                    </div><!-- /box-es-right -->
                <?php }
                    else {
                ?>
                      </div><!-- Box FORM_ES -->
                <?php } ?>
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
                  <?php if($cat){ ?>
                    <li class="social-list__item"><a href="http://www.facebook.com/amnistia.internacional.catalunya" class="social-list__link--facebook" data-ga="event,Social,click,facebook">Haznos Me Gusta en Facebook</a></li>
                    <li class="social-list__item"><a href="http://twitter.com/amnistiaCAT" class="social-list__link--twitter" data-ga="event,Social,click,amnestytwitter">Síguenos en Twitter</a></li>
                    <li class="social-list__item"><a href="http://www.youtube.com/amnistiaespana" class="social-list__link--youtube" data-ga="event,Social,click,youtube">Suscríbete a nuestro canal de YouTube</a></li>
                    <li class="social-list__item"><a href="http://instagram.com/amnistiacat/" class="social-list__link--instagram" data-ga="event,Social,click,instagram">Síguenos en Instagram</a></li>
                  <?php }else{ ?>
                    <li class="social-list__item"><a href="http://www.facebook.com/amnistia.internacional.espana" class="social-list__link--facebook" data-ga="event,Social,click,facebook">Haznos Me Gusta en Facebook</a></li>
                    <li class="social-list__item"><a href="http://twitter.com/amnistiaespana" class="social-list__link--twitter" data-ga="event,Social,click,amnestytwitter">Síguenos en Twitter</a></li>
                    <li class="social-list__item"><a href="http://www.youtube.com/amnistiaespana" class="social-list__link--youtube" data-ga="event,Social,click,youtube">Suscríbete a nuestro canal de YouTube</a></li>
                    <li class="social-list__item"><a href="http://instagram.com/amnistiaespana/" class="social-list__link--instagram" data-ga="event,Social,click,instagram">Síguenos en Instagram</a></li>
                  <?php } ?>
                </ul>
            </div>
            <div class="footer__col--left">
                <p class="footer-legal">
                  <?php if($cat){ ?>
                    <a href="https://www.es.amnesty.org/contacto/" class="footer-legal__link">Contacte</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="https://www.es.amnesty.org/politica-de-privacidad/" class="footer-legal__link">Política de privacitat</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="https://www.es.amnesty.org/mapa-del-sitio/" class="footer-legal__link">Mapa del lloc</a>
                  <?php }else{ ?>
                    <a href="https://www.es.amnesty.org/contacto/" class="footer-legal__link">Contacto</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="https://www.es.amnesty.org/politica-de-privacidad/" class="footer-legal__link">Política de privacidad</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="https://www.es.amnesty.org/mapa-del-sitio/" class="footer-legal__link">Mapa del sitio</a>
                  <?php } ?>
                </p>
                <p class="footer-copyright">©<?php echo date("Y"); ?> Amnistía Internacional España</p>
            </div>
        </div>
    </div>
</footer>

</div></div></div>

<?php
  // ************** Estadísticas en Piwik (si aplica, sino debe estar vacío) *********
  include_once('piwik.php');
?>
