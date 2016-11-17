<div id="page-wrapper" onload="errors()"><div id="page"><div id="content" class="clearfix">

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

// AB Testing
$splitter_url = 'sites/all/themes/ai-theme-civicrm/splitter/ab.php';
if (file_exists($splitter_url)) {
  include_once( $splitter_url );
}

// Origen
if (!isset($_GET["origen"]) ){
    $_GET["origen"] = "web";
}

// Device
$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)));
/*if ( $node->nid==$socixs_form && $mobile ) {
  header('Location: http://localhost:8080/civicrm/mobile');
}*/

// Patch para cagada de email
if( $node->nid == $socixs_form && preg_match('/20161116_CDonaldTrump/',$url) ){
  header('Location: https://crm.es.amnesty.org/haz-un-donativo?pk_campaign=mailint&pk_kwd=20161116_CDonaldTrump');
}
?>

<?php
  // Estilos y scripts
  include_once('styles_scripts.php');

  // Header
  include_once('header.php');
?>

<div class="container--wide"><!-- Page content -->
    <div class="grid"><!-- Bootstrap Grid -->
   	 <div id="content-area">
         	<div class="content-form clearfix"><!-- Formulario -->
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
              <?php } elseif( in_array($node->nid, $donativos_form_list) ) { ?>
                          <?php if($cat == 0) { ?>
                            <span> Has llegado hasta aquí porque algo dentro de ti te dice que hay millones de razones para colaborar. La fundamental es que quieres cambiar el mundo, y no sabes cuanto nos alegra, porque sabemos que podemos contar contigo para lograrlo. <b>Gracias por creer en un mundo más justo.<b/></span>
                          <?php } else { ?>
                            <span> Has arribat fins aquí perquè alguna cosa dins teu diu que hi ha milions de raons per a col·laborar. La fonamental és que vols canviar el món, i no saps com ens n'alegrem, perquè sabem que podem comptar amb tu per aconseguir-ho. <b>Gràcies per creure en un món més just.<b/></span>
                          <?php } ?>
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
		        <div class="box-form-es" <?php if( in_array($node->nid, $excluded_header_list) ){ ?>style="width: 100%;" <?php } ?> >
                    <?php print $messages; ?> <!-- Errors -->
                    <?php print render($page['content']); ?>

                    <?php // ****************  Sólo mostramos los botones de compartir en la página de gracias ******************
                        if($node->nid == $donativos_gracias || $node->nid == $donativos_gracias_cat ){ ?>
                          <div style="width:500px; margin-left: 40px;">
                            <a class="ai-cta-2col__banner-btn" href="https://crm.es.amnesty.org/unete-a-amnistia/?origen=donativo">
                                <?php if($cat == 0) { ?>Únete a Amnistía Internacional
                                <?php } else { ?>Uneix-te a Amnistia Internacional
                                <?php } ?>
                            </a>
                          <div>
                        <?php } else if (in_array($node->nid, $socixs_gracias_list)){ ?>
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
                <?php if( !in_array($node->nid, $excluded_header_list) && in_array($node->nid, $socixs_form_list) ) {
                  print '</div><!-- Box FORM_ES -->'; ?>
                   <div class="box-es-right col-xs-12 col-sm-12 col-md-3 col-lg-3 margin-top-20px-element"> <!-- box-es-right -->
                     <?php if( $node->nid == $area_privada) { ?>
                       <div class="three-column buenas-noticias bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- NUEVA CAJA - "BUENAS NOTICIAS" -->
                           <img src="<?php print $images_path; ?>icon-good-news.png" alt="imagen cara sonriente"/>
                           <h3>¡Buenas Noticias!</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a class="link-caja-buenas-noticias" target="_blank" href="https://www.es.amnesty.org/en-que-estamos/para-celebrar" title="buenas noticias: en qué estamos - para celebrar">CONOCE MÁS</a>.</p>
                       </div>
                      <?php } ?>
                      <div class="three-column ventajas bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                           <img src="<?php print $images_path; ?>pig.png" alt="pig"/>
                           <?php if($cat){ ?>
                             <?php if( in_array($node->nid, $donativos_form_list) ){ ?>
                                <h3>Coneixes els avantatges fiscals de fer un donatiu?</h3>
                             <?php } else { ?>
                                <h3>Coneixes els avantatges fiscals de ser soci/a?</h3>
                              <?php } ?>
                             <p>Totes les teves aportacions desgraven un 75% els primers 150€. A partir d'aquesta xifra, el 30%. Si els últims 3 anys has mantingut o augmentat l'aportació a l'organització, la desgravació puja fins un 35% per a premiar la teva fidelitat. Aquestes deduccions no s'apliquen al País Basc ni a Navarra.
                           <?php }else{ ?>
                             <?php if( in_array($node->nid, $donativos_form_list) ){ ?>
                                <h3>¿Conoces las ventajas fiscales de hacer una donación?</h3>
                             <?php } else { ?>
                                <h3>¿Conoces las ventajas fiscales de ser socio/a?</h3>
                              <?php } ?>
                             <p>Todas tus aportaciones desgravan un 75% los primeros 150€. A partir de esa cifra, el 30%. Si en los últimos tres años se han mantenido o aumentado las aportaciones a la organización, la desgravación sube a un 35% para premiar tu fidelidad. Estas deducciones no aplican en País Vasco y Navarra.
                           <?php } ?>
                           </p>
                       </div>
                       <div class="three-column formas-pago bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                           <img src="<?php print $images_path; ?>cartera.png" alt="cartera"/>
                           <?php if($cat){ ?>
                             <h3>Altres mètodes de pagament</h3>
                             <p>Si tens algún problema en realitzar la teva donació o vols informació sobre altres mètodes de pagament o sobre quotes reduïdes, truca'ns al <b>913101277</b> (extensions <b>30</b> i <b>37</b>) o escriu-nos a <a href="mailto:socios@es.amnesty.org" title="socios@es.amnesty.org">socios@es.amnesty.org</a></p>
                           <?php }else{ ?>
                             <h3>Otras formas de pago</h3>
                             <p>Si tienes algún problema al realizar tu donación o quieres información sobre otras formas de pago o sobre cuotas reducidas, llámanos a <b>913101277</b> (extensiones <b>30</b> y <b>37</b>) o escribe a <a href="mailto:socios@es.amnesty.org" title="socios@es.amnesty.org">socios@es.amnesty.org</a></p>
                           <?php } ?>
                       </div>
                       <div class="three-column compromiso bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                           <img src="<?php print $images_path; ?>ventana.png" alt="ventana"/>
                           <?php if($cat){ ?>
                             <h3>Transparència, el nostre compromís</h3>
                             <p>El 100% dels nostres recursos els destinem a lluitar pels drets humans arreu del món. Els nostres comptes són públics i pots veure'ls a la nostra web.</p>
                           <?php }else{ ?>
                             <h3>Transparencia, nuestro compromiso</h3>
                             <p>El 100% de nuestros recursos los destinamos a luchar por los derechos humanos en todo el mundo. Nuestras cuentas son públicas y puedes verlas en nuestra web.</p>
                           <?php } ?>
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
      <?php include_once('footer.php'); ?>
    </div>
  </div>
</div>

<!-- Estadísticas en Piwik (si aplica, sino debe estar vacío) -->
<?php include_once('piwik.php'); ?>
