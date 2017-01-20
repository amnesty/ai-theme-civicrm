<?php include_once("strings.php"); ?>

<div class="container--wide"><!-- Page content -->
  <div class="grid"><!-- Bootstrap Grid -->
   	  <div id="content-area">
         <div class="content-form clearfix"><!-- Formulario -->
              <?php
              // ********* Sólo mostramos el texto de intro en el formulario de socixs
              if ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $donativos_form_list) ) { ?>
  			      <p class="text-intro">
                <?php
                  if( in_array($node->nid, $navidad_list) && in_array($node->nid, $donativos_form_list) ) {
                        echo $texto_intro_donativo_navidad;
                  } elseif( ($node->nid == $antevenio_form_B) || ($node->nid == $antevenio_form_E) ) {
                        echo $texto_intro_antevenio_BE;
                  } elseif( ($node->nid  == $antevenio_form_C) || ($node->nid == $antevenio_form_D) ) {
                        echo $texto_intro_antevenio_CD;
                  } elseif( in_array($node->nid, $donativos_form_list) ) {
                        if( $cat == 0 ) {
                            echo $texto_intro_donativo;
                        } else {
                            echo $texto_intro_donativo_cat;
                        }
                  } elseif( $cat == 0 ){
                        echo $texto_intro_socixs;
                  } else {
                        echo $texto_intro_socixs_cat;
                  }
                ?>
                </p>
                <?php if( in_array($node->nid, $navidad_list) && in_array($node->nid, $donativos_form_list) ) { ?>
                    <img src="<?php print $images_path; ?>bola-gracias.png" class="bola-navidad" />
                <?php } ?>
              <?php } ?>
  		        <div class="box-form-es" <?php if( in_array($node->nid, $excluded_header_list) ){ ?>style="width: 100%;" <?php } ?> >
                      <?php print $messages; ?> <!-- Errors -->
                      <?php print render($page['content']); ?>

                      <?php // Boton de únete en páginas de gracias de donativo
                        if( in_array($node->nid, $donativos_gracias_list) ){ ?>
                            <div style="width:500px; margin-left: 40px;">
                              <a class="ai-cta-2col__banner-btn" href="
                                  <?php if ( in_array($node->nid, $navidad_list) ){
                                          print "https://crm.es.amnesty.org/unete-a-amnistia-por-navidad/?origen=justiciapornavidad"; }
                                        else {
                                          print "https://crm.es.amnesty.org/unete-a-amnistia/?origen=donativo"; }
                                  ?>">
                                  <?php
                                    if($cat == 0) {
                                      echo $boton_unete;
                                    } else {
                                      echo $boton_unete_cat;
                                    }
                                  ?>
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
                      <?php if( !in_array($node->nid, $excluded_header_list) &&
                        ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $donativos_form_list) ) ) { ?>
                        </div><!-- Box FORM_ES -->
                           <div class="box-es-right col-xs-12 col-sm-12 col-md-3 col-lg-3 margin-top-20px-element"> <!-- box-es-right -->
                             <?php if( $node->nid == $area_privada) { ?>
                               <div class="three-column buenas-noticias bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- NUEVA CAJA - "BUENAS NOTICIAS" -->
                                   <img src="<?php print $images_path; ?>icon-good-news.png" alt="imagen cara sonriente" />
                                   <?php
                                      echo $titulo_caja_buenas_noticias;
                                      echo $texto_caja_buenas_noticias;
                                    ?>
                               </div>
                              <?php } ?>
                              <div class="three-column ventajas bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                   <img src="<?php print $images_path; ?>pig.png" alt="pig"/>
                                   <?php
                                   if($cat){
                                     if( in_array($node->nid, $donativos_form_list) ){
                                        echo $titulo_caja_ventajas_donativo_cat;
                                      } else {
                                        echo $titulo_caja_ventajas_cat;
                                      }
                                     echo $texto_caja_ventajas_cat;
                                   } else {
                                     if( in_array($node->nid, $donativos_form_list) ){
                                        echo $titulo_caja_ventajas_donativo;
                                     } else {
                                        echo $titulo_caja_ventajas;
                                     }
                                     echo $texto_caja_ventajas;
                                   }
                                   ?>
                                   </p>
                              </div>
                              <div class="three-column formas-pago bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                   <img src="<?php print $images_path; ?>cartera.png" alt="cartera"/>
                                   <?php
                                    if($cat){
                                      echo $titulo_caja_formas_pago_cat;
                                      echo $texto_caja_formas_pago_cat;
                                    } else {
                                      echo $titulo_caja_formas_pago;
                                      echo $texto_caja_formas_pago;
                                    }
                                   ?>
                              </div>
                              <div class="three-column compromiso bloques-x4 col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <img src="<?php print $images_path; ?>ventana.png" alt="ventana"/>
                                  <?php
                                    if($cat){
                                        echo $titulo_caja_transparencia_cat;
                                        echo $texto_caja_transparencia_cat;
                                    } else {
                                        echo $titulo_caja_transparencia;
                                        echo $texto_caja_transparencia;
                                    }
                                  ?>
                              </div>
                          </div><!-- /box-es-right -->
                    <?php } else { ?>
                      </div><!-- Box FORM_ES -->
                    <?php } ?>
            </div>
	      </div>
    </div>
</div>
