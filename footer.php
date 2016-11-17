<!-- Footer -->
<?php if( !in_array($node->nid, $excluded_header_list) ){ ?>
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
<?php } ?>
