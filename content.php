<div class="container--wide"><!-- Page content -->
    <div class="grid"><!-- Bootstrap Grid -->
   	    <div id="content-area">
         	<div class="content-form clearfix"><!-- Formulario -->
              <?php
              // ********* Sólo mostramos el texto de intro en el formulario de socixs
              if ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $donativos_form_list) ){ ?>
  			      <p class="text-intro">
                <?php if( in_array($node->nid, $navidad_list) && in_array($node->nid, $donativos_form_list) ){ ?>
                        <span>Has llegado hasta aquí porque algo dentro de ti te dice que hay millones de razones para colaborar. <b>Decora tu casa y a la vez colabora</b> con el trabajo que hacemos por el derecho a la verdad, justicia y reparación de todas las personas.</span><br/>
                        <span><b>Haz un donativo y recibirás en tu casa esta bola</b> para que la cuelgues en el árbol, en tu puerta o en el lugar de tu casa que prefieras. Así ayudarás a mantener vivos los deseos que llevan años sin cumplirse.</span>
                <?php } elseif (($node->nid == $antevenio_form_B) || ($node->nid == $antevenio_form_E)){ ?>
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
                <?php if( in_array($node->nid, $navidad_list) && in_array($node->nid, $donativos_form_list) ){ ?>
                  <img src="<?php print $images_path; ?>bola-gracias.png" class="bola-navidad" />
                <?php } ?>
              <?php } ?>
  		        <div class="box-form-es" <?php if( in_array($node->nid, $excluded_header_list) ){ ?>style="width: 100%;" <?php } ?> >
                      <?php print $messages; ?> <!-- Errors -->
                      <?php print render($page['content']); ?>

                      <?php // Boton de únete en páginas de gracias de donativo
                        if( in_array($node->nid, $donativos_gracias_list) ){ ?>
                            <div style="width:500px; margin-left: 40px;">
                              <a class="ai-cta-2col__banner-btn" href="=
                                <?php if ( in_array($node->nid, $navidad_list) ){ print "https://crm.es.amnesty.org/unete-a-amnistia-por-navidad/?origen=justiciapornavidad"; }
                                      else { print "https://crm.es.amnesty.org/unete-a-amnistia/?origen=donativo"; } ?>">
                                  <?php if($cat == 0) { ?>Únete a Amnistía Internacional
                                  <?php } else { ?>Uneix-te a Amnistia Internacional
                                  <?php } ?>
                              </a>
                            </div>
                        <?php } ?>
                        <?php //Botones de compartir en la página de gracias de socixs y navidad
                         if (in_array($node->nid, $socixs_gracias_list) || (in_array($node->nid, $donativos_gracias_list) && in_array($node->nid, $navidad_list)) ){ ?>
                            <div id="share-buttons" class="ai-accion-firma-compartir">
                                <h4 class="ai-accion-firma-compartir__header">Comparte esta campaña entre tus contactos:</h4>
                                <?php if($cat){ ?>
                                  <a class="ai-accion-firma-compartir__facebook" href="javascript:">
                                      Compartir a <span class="ai-accion-firma-compartir__facebook-icon"></span><span class="sr-only">Facebook</span>
                                  </a>
                                  <a class="ai-accion-firma-compartir__twitter" href="javascript:">
                                      Compartir a <span class="ai-accion-firma-compartir__twitter-icon"></span><span class="sr-only">Twitter</span>
                                  </a>
                              <?php }else{ ?>
                                <a class="ai-accion-firma-compartir__facebook" href="javascript:">
                                    Compartir en <span class="ai-accion-firma-compartir__facebook-icon"></span><span class="sr-only">Facebook</span>
                                </a>
                                <a class="ai-accion-firma-compartir__twitter" href="javascript:">
                                    Compartir en <span class="ai-accion-firma-compartir__twitter-icon"></span><span class="sr-only">Twitter</span>
                                </a>
                              <?php } ?>
                            </div>
                      <?php } ?>

                  <!-- ********************************** CAJAS LATERALES ******************** -->
                  <?php if( !in_array($node->nid, $excluded_header_list) && ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $donativos_form_list) ) ) {
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
