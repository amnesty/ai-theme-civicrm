<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;600&display=swap" rel="stylesheet">
<style>
.cookie-consent__modal * {
  font-family: 'IBM Plex Sans', sans-serif;
}

.cookie-consent__body,
.cookie-consent__preferences {
  display: flex;
  flex-direction: column;
  justify-content: space-between;

  padding: 0.75em 1.25em;
  flex-grow: 1;
  overflow: auto;
  -webkit-overflow-scrolling: touch;

  font-size: 1.125em;
}

.cookie-consent__title {
  position: relative;
  margin-bottom: 0.5em;

  font-size: 1em;
  font-weight: 600;
  line-height: 1.4;
  text-transform: uppercase;
  color: black;
}

.cookie-consent__title::before {
  position: absolute;
  content: '';
  top: -10px;
  width: 20px;
  height: 3px;
  background-color: #000000;
}

.cookie-consent__button {
  margin: 0;

  position: relative;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  white-space: nowrap;
  text-decoration: none;
  cursor: pointer;

  padding-top: 0.5em;
  padding-bottom: 0.5em;
  padding-left: 0.75em;
  padding-right: 0.75em;

  border: 0;
  border-radius: 0;
  appearance: none;

  color: black;
  font-size: 1em;
  font-weight: 600;
  text-transform: uppercase;

  transition: .25s;
}

.cookie-consent__button:hover,
.cookie-consent__button:focus {
  box-shadow: 0 0.9px 1.5px rgba(0, 0, 0, 0.17),
  0 3.1px 5.5px rgba(0, 0, 0, 0.22);
}

.cookie-consent__button:disabled {
  background-color: #ebebeb;
  color: gray;
  cursor: not-allowed;
}

.cookie-consent__button:disabled:hover {
  box-shadow: none;
}

.cookie-consent__button--accept {
  background-color: #FFFF00;
}

.cookie-consent__button--config {
  background-color: rgba(0, 0, 0, 0.05);
}

.cookie-consent__button--close {
  padding: 0.5em;

  display: flex;
  flex-shrink: 0;

  width: 2em;
  height: 2em;

  background-color: white;
  box-shadow: 0 0.3px 0.4px rgba(0, 0, 0, 0.025),
  0 0.9px 1.5px rgba(0, 0, 0, 0.05),
  0 3.5px 6px rgba(0, 0, 0, 0.1);

  border-radius: 50%;
  transition: .2s;
}

.cookie-consent__button--close svg {
  display: block;
  background-color: transparent;
  color: black;
  width: 1em;
  height: 1em;
}

.cookie-consent__button--close:hover {
  box-shadow: 0 0.9px 1.5px rgba(0, 0, 0, 0.03),
  0 3.1px 5.5px rgba(0, 0, 0, 0.08),
  0 14px 25px rgba(0, 0, 0, 0.12);
}

.cookie-consent__actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.cookie-consent__actions > button {
  flex: 1;
  margin: 0.25em;
}

.cookie-consent__box {
  position: relative;
  display: flex;
  align-items: center;
  flex-wrap: wrap;

  height: 95%;
  border: 1px solid;
  padding: 1em 1.4em;
  margin-bottom: 10px;

  color: black;
}

.cookie-consent__box-select {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.cookie-consent__box-select > button {
  flex: 1;
  margin: 0.25em;
}

.cookie-consent__box-title {
  width: 100%;
  margin-bottom: 0;
  font-weight: 600;
  font-size: 1.25em;
  color: black;
}

.cookie-consent__box p {
  width: 100%;
  font-size: 1em;
  margin-top: 1em;
  color: black;
}

.cookie-consent__box p:last-child {
  margin-bottom: 0;
}

.cookie-consent__checkbox,
.cookie-consent__radio {
  position: relative;
  display: inline-block;
}

.cookie-consent__radio-container {
  display: flex;
  align-items: center;
  margin: 14px 14px 14px 0;
}

.cookie-consent__radio-text {
  margin-left: 6px;
}

input[type="checkbox"].cookie-consent__checkbox-input {
  position: relative;
  margin: 0;
  padding: 0;
  opacity: 0;
  height: 1.5em;
  width: 1.5em;
  display: block;
  z-index: 1;

  cursor: pointer;
}

input[type="radio"].cookie-consent__radio-input {
  position: relative;
  margin: 0;
  padding: 0;
  opacity: 0;
  height: 1.5em;
  width: 1.5em;
  display: block;
  z-index: 1;

  cursor: pointer;
}

label.cookie-consent__checkbox-label,
label.cookie-consent__radio-label {
  position: absolute;
  top: 0;
  clip: rect(1px, 1px, 1px, 1px);
  clip-path: inset(50%);
}

.cookie-consent__checkbox-control,
.cookie-consent__radio-control {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
  transition: transform 0.2s;
  color: black;
}

.cookie-consent__checkbox-control::before,
.cookie-consent__checkbox-control::after,
.cookie-consent__radio-control::before,
.cookie-consent__radio-control::after {
  content: '';
  position: absolute;
}

.cookie-consent__checkbox-control::before,
.cookie-consent__radio-control::before {
  background-color: currentColor;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  opacity: 0;
  border-radius: 50%;
  transition: transform .2s;
  will-change: transform;
}

.cookie-consent__checkbox-control::after,
.cookie-consent__radio-control::after {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: hsl(0, 0%, 100%);
  box-shadow: inset 0 0 0 1px black;
}

.cookie-consent__radio-control::after {
  border-radius: 50%;
}

.cookie-consent__checkbox-input:checked ~ .cookie-consent__checkbox-control::after {
  background-color: currentColor;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpolyline points='2.5 8 6.5 12 13.5 3' fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 1em;
}

.cookie-consent__radio-input:checked ~ .cookie-consent__radio-control::after {
  background-color: currentColor;
  background-image: url("data:image/svg+xml;charset=utf8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAxNiAxNic+PGcgY2xhc3M9J25jLWljb24td3JhcHBlcicgZmlsbD0nI2ZmZmZmZic+PGNpcmNsZSBjeD0nOCcgY3k9JzgnIHI9JzgnIGZpbGw9JyNmZmZmZmYnPjwvY2lyY2xlPjwvZz48L3N2Zz4=");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 50%;
}

.cookie-consent__checkbox-input:disabled {
  cursor: not-allowed;
}

.cookie-consent__checkbox-input:active ~ .cookie-consent__checkbox-control,
.cookie-consent__radio-input:active ~ .cookie-consent__radio-control {
  transform: translate(-50%, -50%) scale(0.9);
}

.cookie-consent__checkbox-input:checked:active ~ .cookie-consent__checkbox-control,
.cookie-consent__radio-input:checked:active ~ .cookie-consent__radio-control {
  transform: translate(-50%, -50%) scale(1);
}

.cookie-consent__checkbox-input:focus ~ .cookie-consent__checkbox-control::before,
.cookie-consent__radio-input:focus ~ .cookie-consent__radio-control::before {
  width: 160%;
  height: 160%;

  opacity: 0.2;
  transform: translate(-50%, -50%) scale(1);
}

.cookie-consent__modal {
  position: fixed;
  z-index: 1100;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  opacity: 0;
  visibility: hidden;

  padding: 1.25em;

  display: flex;
  justify-content: center;
  align-items: center;
  align-items: flex-end;

  background-color: rgba(0, 0, 0, 0.9);
}

.cookie-consent__modal:not(.cookie-consent__modal--is-visible) {
  pointer-events: none;
  background-color: transparent;
}

.cookie-consent__modal--is-visible {
  opacity: 1;
  visibility: visible;
}

.cookie-consent__modal-content {
  width: 100%;
  height: 100%;
  max-width: 80rem;

  display: flex;
  flex-direction: column;

  background-color: white;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  max-height: 100%;

  box-shadow: 0 0.9px 1.5px rgba(0, 0, 0, 0.03),
  0 3.1px 5.5px rgba(0, 0, 0, 0.08),
  0 14px 25px rgba(0, 0, 0, 0.12);
}

.cookie-consent__modal-content--preferences {
  display: none;
  opacity: 0;
  visibility: hidden;
}

.cookie-consent__modal-content--show {
  display: block;
  opacity: 1;
  visibility: visible;
}
.cookie-consent__modal-content--hidden {
  display: none;
}

.cookie-consent__modal-header {
  padding: 0.75em 1.25em 0.25em;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-shrink: 0;
}

.cookie-consent__description {
  margin-bottom: 2.25em;
}

.cookie-consent__description > p {
  margin-bottom: 1.25em;
  color: black;
  font-size: 1em;
}

.cookie-consent__description a,
.cookie-consent__description a:link,
.cookie-consent__description a:active {
  text-decoration: underline;
  color: black;
}

.cookie-consent__description > *:first-child {
  margin-top: 0;
}

.cookie-consent__description > *:last-child {
  margin-bottom: 0;
}

.cookie-consent__modal-iframe,
.cookie-consent__modal-iframe iframe {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.cookie-consent__modal-iframe {
  max-width: 80rem;
}

.cookie-consent__modal-iframe iframe {
  background-color: white;
}

.cookie-consent__modal-iframe .cookie-consent__modal-header {
  margin-left: auto;
  margin-bottom: 1em;
}

.cookie-consent__modal {
  width: 100vw;
  height: 100vh;
  padding-bottom: 5em;
}

.cookie-consent__modal-header {
  padding: 1.75em 1.25em 0.25em;
}

@media screen and (min-width: 768px) {
  .cookie-consent__modal-content {
    height: auto;
    padding: 0.75em 0;
  }

  .cookie-consent__box-title {
    width: auto;
    margin-top: 0;
    margin-left: 10px;
    display: inline;
  }

  .cookie-consent__box-title:first-child {
    margin-left: 0;
  }

  .cookie-consent__radio-container {
    margin: 0 14px;
  }
}

@media (prefers-reduced-motion: no-preference) {
  .cookie-consent__modal--animate-translate-down {
    transition: opacity 0.2s, visibility 0s 0.2s;
  }

  .cookie-consent__modal--animate-translate-down .cookie-consent__modal-content {
    will-change: transform;
    transition: transform 0.2s ease-out;
  }

  .cookie-consent__modal--animate-translate-down.cookie-consent__modal--is-visible {
    transition: opacity 0.2s, visibility 0s;
  }

  .cookie-consent__modal--animate-translate-down.cookie-consent__modal--is-visible .cookie-consent__modal-content {
    transform: scale(1);
  }
}
</style>

<aside class="cookie-consent__modal cookie-consent__modal--animate-translate-down js-cookie-consent__modal" id="cookie-consent__modal" data-omcookie-panel="1">

  <!-- Intro -->
  <div class="cookie-consent__modal-content cookie-consent__modal-content--intro js-cookie-consent__intro" role="alertdialog">
    <header class="cookie-consent__modal-header">
      <h1 class="cookie-consent__title">Esta web utiliza cookies</h1>
    </header>
    <section class="cookie-consent__body" aria-label="Configuración inicial de cookies">
      <div class="cookie-consent__description">
        <p>Utilizamos cookies propias y de terceros para analizar el tráfico web, personalizar el contenido, ofrecer funciones de redes sociales y mostrar publicidad personalizada basada en los hábitos de navegación.</p>
        <p>Para más información puedes consultar nuestra política de cookies <a href="https://www.es.amnesty.org/politica-de-cookies/politica-de-cookies-modal/" target="_blank" aria-controls="cookie-consent__modal-cookies">AQUÍ</a>.</p>
        <p>Puedes aceptar todas las cookies, modificar su selección o rechazar su uso en "Configuración de Cookies"</p>
      </div>
      <div class="cookie-consent__actions">
        <button class="cookie-consent__button cookie-consent__button--config js-cookie-consent__preferences-btn">Configuración de Cookies</button>
        <button data-omcookie-panel-save="all"  class="cookie-consent__button cookie-consent__button--accept js-cookie-consent__modal-close">Aceptar</button>
      </div>
    </section>
  </div>

  <!-- Preferences -->
  <div class="cookie-consent__modal-content cookie-consent__modal-content--preferences js-cookie-consent__preferences" role="alertdialog">
    <header class="cookie-consent__modal-header">
      <h2 class="cookie-consent__title">Esta web utiliza cookies</h2>
      <button class="cookie-consent__button cookie-consent__button--close js-cookie-consent__preferences-back">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 5.66038L13.6604 12L20 18.3396L18.3396 20L12 13.6604L5.66038 20L4 18.3396L10.3396 12L4 5.66038L5.66038 4L12 10.3396L18.3396 4L20 5.66038Z" style="fill: black;" /></svg>
      </button>
    </header>
    <section class="cookie-consent__preferences" aria-label="Configuración de cookies">
      <div class="cookie-consent__description">
        <p>Al aceptar, instalaremos cookies en tu dispositivo para mejorar el servicio de esta página web. Puedes modificar aquí tu configuración y escoger el tipo de autorización que das.</p>
        <p>Puedes consultar <a href="https://www.es.amnesty.org/politica-de-cookies/politica-de-cookies-modal/" aria-controls="cookie-consent__modal-cookies">aquí</a> la información sobre cómo usamos las cookies.</p>
        <button data-omcookie-panel-save="all" class="cookie-consent__button cookie-consent__button--accept js-cookie-consent__modal-close">Aceptar todas</button>
      </div>
      <form id="omCookieForm">
        <!-- Cookie required -->
        <div class="cookie-consent__box" data-omcookie-panel-grp="1" data-omcookie-group="group-4">
          <h3 class="cookie-consent__box-title">Cookies necesarias</h3>
          <input type="radio" checked="checked" data-essential="1" name="group-4" id="group-4-yes" value="group-4.1" class="cookie-consent__radio-input is-hidden">
          <p>Algunas cookies son necesarias para el uso de la web de Amnistía Internacional. Puedes restringirlas o bloquearlas de forma general configurando tu  navegador, pero algunas áreas del sitio no funcionarán. No almacenan ninguna información de identificación personal.</p>
        </div>

        <!-- Cookie for stats -->
        <div class="cookie-consent__box" data-omcookie-panel-grp="1" data-omcookie-group="group-1">
          <h3 class="cookie-consent__box-title">Cookies para estadísticas</h3>
          <div class="cookie-consent__radio-container">
            <div class="cookie-consent__radio">
              <input type="radio" name="group-1" id="group-1-yes" value="group-1.1" class="cookie-consent__radio-input">
              <label for="group-1-yes" class="cookie-consent__radio-label"></label>
              <div class="cookie-consent__radio-control" aria-hidden="true"></div>
            </div>
            <span class="cookie-consent__radio-text">Sí</span>
          </div>
          <div class="cookie-consent__radio-container">
            <div class="cookie-consent__radio">
              <input type="radio" name="group-1" id="group-1-no" value="group-1.0" class="cookie-consent__radio-input">
              <label for="group-1-no" class="cookie-consent__radio-label"></label>
              <div class="cookie-consent__radio-control" aria-hidden="true"></div>
            </div>
            <span class="cookie-consent__radio-text">No</span>
          </div>
          <p>Nos permiten entender cómo estás navegando por la página web y nos ayudarán a mejorar tu experiencia al visitarla.</p>
        </div>

        <!-- Cookie for ads -->
        <div class="cookie-consent__box" data-omcookie-panel-grp="1" data-omcookie-group="group-2">
          <h3 class="cookie-consent__box-title">Cookies de mercadotecnia</h3>
          <div class="cookie-consent__radio-container">
            <div class="cookie-consent__radio">
              <input type="radio" name="group-2" id="group-2-yes" value="group-2.1" class="cookie-consent__radio-input">
              <label for="group-2-yes" class="cookie-consent__radio-label"></label>
              <div class="cookie-consent__radio-control" aria-hidden="true"></div>
            </div>
            <span class="cookie-consent__radio-text">Sí</span>
          </div>
          <div class="cookie-consent__radio-container">
            <div class="cookie-consent__radio">
              <input type="radio" name="group-2" id="group-2-no" value="group-2.0" class="cookie-consent__radio-input">
              <label for="group-2-no" class="cookie-consent__radio-label"></label>
              <div class="cookie-consent__radio-control" aria-hidden="true"></div>
            </div>
            <span class="cookie-consent__radio-text">No</span>
          </div>
          <p>Sirven para mejorar la relevancia de los anuncios que pueden aparecer en otros sitios webs por los que navegas.</p>
        </div>
      </form>

      <!-- Accept all / Reject all -->
      <div class="cookie-consent__box-select">
        <button data-omcookie-panel-save="min" class="cookie-consent__button cookie-consent__button--config js-cookie-consent__modal-close">Rechazar todas</button>
        <button data-omcookie-panel-save="save" class="cookie-consent__button cookie-consent__button--accept js-cookie-consent__modal-close" disabled="disabled">Guardar</button>
      </div>
    </section>
  </div>

</aside>

<aside class="cookie-consent__modal cookie-consent__modal--animate-translate-down js-cookie-consent__modal" id="cookie-consent__modal-cookies">
  <div class="cookie-consent__modal-iframe">
    <header class="cookie-consent__modal-header">
      <button class="cookie-consent__button cookie-consent__button--close js-cookie-consent__modal-close">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 5.66038L13.6604 12L20 18.3396L18.3396 20L12 13.6604L5.66038 20L4 18.3396L10.3396 12L4 5.66038L5.66038 4L12 10.3396L18.3396 4L20 5.66038Z" style="fill: black;" /></svg>
      </button>
    </header>
    <iframe  frameborder="0"></iframe>
  </div>
</aside>

<script id="om-cookie-consent" type="application/json">{"group-1":{"gtm":"cookie_analitica"},"group-2":{"gtm":"cookie_comportamental"},"group-4":{"gtm":""}}</script>
<script>
try {
  var omCookieGroups = JSON.parse(document.getElementById('om-cookie-consent').innerHTML);
  var omGtmEvents = [];
}
catch(err) {
  console.log('Cookie groups not found.')
}

(function() {
  // ** ONLOAD FUNCTION ** //
  document.addEventListener('DOMContentLoaded', function(){
    var panelButtons = document.querySelectorAll('[data-omcookie-panel-save]');
    var openButtons = document.querySelectorAll('[data-omcookie-panel-show]');
    var deleteButtons = document.querySelectorAll('[data-omcookie-panel-delete]');

    var groups = document.querySelectorAll('[data-omcookie-panel-grp]');
    var radios = document.querySelectorAll('[data-omcookie-panel-grp] input[type=radio]');
    var form = document.getElementById('omCookieForm');
    var i;
    var omCookiePanel = document.querySelectorAll('[data-omcookie-panel]')[0];
    if(omCookiePanel === undefined) return;
    var openCookiePanel = true;

    //Migrate previous system to new one
    var obsoleteCookie = omCookieUtility.getCookie('cookieAlert3');
    if (obsoleteCookie){
      if (obsoleteCookie == "1") {
        omCookieUtility.setCookie('omCookieConsent', 'group-4.1,group-1.1,group-2.1,dismiss', 364);
      }
      if (obsoleteCookie == "2") {
        omCookieUtility.setCookie('omCookieConsent', 'group-4.1,group-1.0,group-2.0,dismiss', 364);
      }
      omCookieUtility.deleteCookie('cookieAlert3');
    }

    //Enable stuff by Cookie
    var cookieConsentData = omCookieUtility.getCookie('omCookieConsent');
    if(cookieConsentData !== null && cookieConsentData.length > 0){
      //dont open the panel if we have the cookie
      openCookiePanel = false;
      var cookieConsentGrps = cookieConsentData.split(',');
      var cookieConsentActiveGrps = '';
      var cookieConsentInactiveGrps = '';


      for(i = 0; i < cookieConsentGrps.length; i++){
        if(cookieConsentGrps[i] !== 'dismiss'){
          var grpSettings = cookieConsentGrps[i].split('.');
          if(parseInt(grpSettings[1]) === 1){
            omCookieEnableCookieGrp(grpSettings[0]);
            cookieConsentActiveGrps += grpSettings[0] + '.1,';
          } else if(parseInt(grpSettings[1]) === 0){
            cookieConsentInactiveGrps += grpSettings[0] + '.0,';
          }
        }
      }
      for(i = 0; i < groups.length; i++){
        var radio = document.getElementById(groups[i].dataset['omcookieGroup']+'-yes');
        if(radio && cookieConsentActiveGrps.indexOf(radio.value)  !== -1){
          radio.checked = true;
        }

        var radio = document.getElementById(groups[i].dataset['omcookieGroup']+'-no');
        if(radio && cookieConsentInactiveGrps.indexOf(radio.value)  !== -1){
          radio.checked = true;
        }
        //check if we have a new group
        if(cookieConsentData.indexOf(groups[i].dataset['omcookieGroup']) === -1){
          openCookiePanel = true;
        }
      }
      //push stored events(sored by omCookieEnableCookieGrp) to gtm. We push this last so we are sure that gtm is loaded
      pushGtmEvents(omGtmEvents);
      omTriggerPanelEvent(['cookieconsentscriptsloaded']);
    }
    if(openCookiePanel === true){
      document.dispatchEvent(new CustomEvent("trackPageWithoutCookieConsent"));
      //timeout, so the user can see the page before he get the nice cookie panel
      setTimeout(function () {
        omCookiePanel.classList.toggle('cookie-consent__modal--is-visible');
      },1000);
    } else {
      document.dispatchEvent(new CustomEvent("trackPage"));
    }

    //check for button click
    for (i = 0; i < panelButtons.length; i++) {
      panelButtons[i].addEventListener('click', omCookieSaveAction, false);
    }
    for (i = 0; i < deleteButtons.length; i++) {
      deleteButtons[i].addEventListener('click', function(){omCookieUtility.deleteCookie('omCookieConsent')}, false);
    }

    for (i = 0; i < openButtons.length; i++) {
      openButtons[i].addEventListener('click', function () {
        omCookiePanel.classList.toggle('cookie-consent__modal--is-visible');
      }, false);
    }
    // enable save button
    for (i = 0; i < radios.length; i++) {
      radios[i].addEventListener('click', function () {
        var enableSaveButton = true;
        for (var i = 0; i < groups.length; i++) {

          var radio = form.elements[groups[i].dataset['omcookieGroup']];
          if (radio && radio.value == ""){
            enableSaveButton = false;
            break
          }
        }
        if (enableSaveButton) {
          document.querySelector('[data-omcookie-panel-save="save"]').disabled = false;
        }
      }, false);
    }

    //modal window
    var modalLinks = document.querySelectorAll('[aria-controls="cookie-consent__modal-cookies"]');

    for (i = 0; i < modalLinks.length; i++) {
      modalLinks[i].addEventListener('click', function(e){
        var iframe = document.querySelector("#"+ e.target.getAttribute('aria-controls') +" iframe");
        iframe.src = e.target.href;
      }, false);
    }



  });
  // ** ONLOAD FUNCTION ** //

  // ** UTILITY FUNCTION ** //
  function Util () {};
  // ** UTILITY FUNCTION ** //

  // ** CLASS MANIPULATIONS FUNCTIONS ** //

  Util.hasClass = function(el, className) {
    if (el.classList) return el.classList.contains(className);
    else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
  };

  Util.addClass = function(el, className) {
    var classList = className.split(' ');
    if (el.classList) el.classList.add(classList[0]);
    else if (!Util.hasClass(el, classList[0])) el.className += " " + classList[0];
    if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
  };

  Util.removeClass = function(el, className) {
    var classList = className.split(' ');
    if (el.classList) el.classList.remove(classList[0]);
    else if(Util.hasClass(el, classList[0])) {
      var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
      el.className=el.className.replace(reg, ' ');
    }
    if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
  };

  Util.toggleClass = function(el, className, bool) {
    if(bool) Util.addClass(el, className);
    else Util.removeClass(el, className);
  };

  Util.setAttributes = function(el, attrs) {
    for(var key in attrs) {
      el.setAttribute(key, attrs[key]);
    }
  };

  // ** CLASS MANIPULATIONS FUNCTIONS ** //

  // ** MODAL BEHAVIOUR ** //
  var Modal = function(element) {
    this.element = element;
    this.triggers = document.querySelectorAll('[aria-controls="'+this.element.getAttribute('id')+'"]');
    this.firstFocusable = null;
    this.lastFocusable = null;
    this.moveFocusEl = null; // focus will be moved to this element when modal is open
    this.modalFocus = this.element.getAttribute('data-modal-first-focus') ? this.element.querySelector(this.element.getAttribute('data-modal-first-focus')) : null;
    this.selectedTrigger = null;
    this.showClass = "cookie-consent__modal--is-visible";
    this.initModal();
  };

  Modal.prototype.initModal = function() {
    var self = this;
    //open modal when clicking on trigger buttons
    if ( this.triggers ) {
      for(var i = 0; i < this.triggers.length; i++) {
        this.triggers[i].addEventListener('click', function(event) {
          event.preventDefault();
          if(Util.hasClass(self.element, self.showClass)) {
            self.closeModal();
            return;
          }
          self.selectedTrigger = event.target;
          self.showModal();
          self.initModalEvents();
        });
      }
    }

    // listen to the openModal event -> open modal without a trigger button
    this.element.addEventListener('openModal', function(event){
      if(event.detail) self.selectedTrigger = event.detail;
      self.showModal();
      self.initModalEvents();
    });

    // listen to the closeModal event -> close modal without a trigger button
    this.element.addEventListener('closeModal', function(event){
      if(event.detail) self.selectedTrigger = event.detail;
      self.closeModal();
    });

    // if modal is open by default -> initialise modal events
    if(Util.hasClass(this.element, this.showClass)) this.initModalEvents();
  };

  Modal.prototype.showModal = function() {
    var self = this;
    Util.addClass(this.element, this.showClass);
    this.getFocusableElements();
    this.moveFocusEl.focus();
    // wait for the end of transitions before moving focus
    this.element.addEventListener("transitionend", function cb(event) {
      self.moveFocusEl.focus();
      self.element.removeEventListener("transitionend", cb);
    });
    this.emitModalEvents('modalIsOpen');
  };

  Modal.prototype.closeModal = function() {
    if(!Util.hasClass(this.element, this.showClass)) return;
    Util.removeClass(this.element, this.showClass);
    this.firstFocusable = null;
    this.lastFocusable = null;
    this.moveFocusEl = null;
    if(this.selectedTrigger) this.selectedTrigger.focus();
    //remove listeners
    this.cancelModalEvents();
    this.emitModalEvents('modalIsClose');
  };

  Modal.prototype.initModalEvents = function() {
    //add event listeners
    this.element.addEventListener('keydown', this);
    this.element.addEventListener('click', this);
  };

  Modal.prototype.cancelModalEvents = function() {
    //remove event listeners
    this.element.removeEventListener('keydown', this);
    this.element.removeEventListener('click', this);
  };

  Modal.prototype.handleEvent = function (event) {
    switch(event.type) {
      case 'click': {
        this.initClick(event);
      }
      case 'keydown': {
        this.initKeyDown(event);
      }
    }
  };

  Modal.prototype.initKeyDown = function(event) {
    if( event.keyCode && event.keyCode == 9 || event.key && event.key == 'Tab' ) {
      //trap focus inside modal
      this.trapFocus(event);
    } else if( (event.keyCode && event.keyCode == 13 || event.key && event.key == 'Enter') && event.target.closest('.js-cookie-consent__modal-close')) {
      event.preventDefault();
      this.closeModal(); // close modal when pressing Enter on close button
    }
  };

  Modal.prototype.initClick = function(event) {
    //close modal when clicking on close button or modal bg layer
    if( !event.target.closest('.js-cookie-consent__modal-close') ) return;
    event.preventDefault();
    this.closeModal();
  };

  Modal.prototype.trapFocus = function(event) {
    if( this.firstFocusable == document.activeElement && event.shiftKey) {
      //on Shift+Tab -> focus last focusable element when focus moves out of modal
      event.preventDefault();
      this.lastFocusable.focus();
    }
    if( this.lastFocusable == document.activeElement && !event.shiftKey) {
      //on Tab -> focus first focusable element when focus moves out of modal
      event.preventDefault();
      this.firstFocusable.focus();
    }
  }

  Modal.prototype.getFocusableElements = function() {
    //get all focusable elements inside the modal
    var allFocusable = this.element.querySelectorAll(focusableElString);
    this.getFirstVisible(allFocusable);
    this.getLastVisible(allFocusable);
    this.getFirstFocusable();
  };

  Modal.prototype.getFirstVisible = function(elements) {
    //get first visible focusable element inside the modal
    for(var i = 0; i < elements.length; i++) {
      if( isVisible(elements[i]) ) {
        this.firstFocusable = elements[i];
        break;
      }
    }
  };

  Modal.prototype.getLastVisible = function(elements) {
    //get last visible focusable element inside the modal
    for(var i = elements.length - 1; i >= 0; i--) {
      if( isVisible(elements[i]) ) {
        this.lastFocusable = elements[i];
        break;
      }
    }
  };

  Modal.prototype.getFirstFocusable = function() {
    if(!this.modalFocus || !Element.prototype.matches) {
      this.moveFocusEl = this.firstFocusable;
      return;
    }
    var containerIsFocusable = this.modalFocus.matches(focusableElString);
    if(containerIsFocusable) {
      this.moveFocusEl = this.modalFocus;
    } else {
      this.moveFocusEl = false;
      var elements = this.modalFocus.querySelectorAll(focusableElString);
      for(var i = 0; i < elements.length; i++) {
        if( isVisible(elements[i]) ) {
          this.moveFocusEl = elements[i];
          break;
        }
      }
      if(!this.moveFocusEl) this.moveFocusEl = this.firstFocusable;
    }
  };

  Modal.prototype.emitModalEvents = function(eventName) {
    var event = new CustomEvent(eventName, {detail: this.selectedTrigger});
    this.element.dispatchEvent(event);
  };

  function isVisible(element) {
    return element.offsetWidth || element.offsetHeight || element.getClientRects().length;
  };

  //initialize the Modal objects
  var modals = document.getElementsByClassName('js-cookie-consent__modal');
  // generic focusable elements string selector
  var focusableElString = '[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex]:not([tabindex="-1"]), [contenteditable], audio[controls], video[controls], summary';
  if( modals.length > 0 ) {
    var modalArrays = [];
    for( var i = 0; i < modals.length; i++) {
      (function(i){modalArrays.push(new Modal(modals[i]));})(i);
    }
  }
  // ** MODAL BEHAVIOUR ** //

  // ** MODAL LINKS BEHAVIOUR ** //
  var cookiesIntro = document.querySelector('.js-cookie-consent__intro');
  var cookiesPreferences = document.querySelector('.js-cookie-consent__preferences');
  var cookiesPreferencesBtn = document.querySelector('.js-cookie-consent__preferences-btn');
  var cookiesPreferencesBack = document.querySelector('.js-cookie-consent__preferences-back');

  cookiesPreferencesBtn.addEventListener('click', function () {
    cookiesIntro.classList.add('cookie-consent__modal-content--hidden')
    cookiesPreferences.classList.add('cookie-consent__modal-content--show')

    cookiesIntro.classList.remove('cookie-consent__modal-content--show')
    cookiesPreferences.classList.remove('cookie-consent__modal-content--hidden')
  });

  cookiesPreferencesBack.addEventListener('click', function () {
    cookiesPreferences.classList.add('cookie-consent__modal-content--hidden')
    cookiesIntro.classList.add('cookie-consent__modal-content--show')

    cookiesPreferences.classList.remove('cookie-consent__modal-content--show')
    cookiesIntro.classList.remove('cookie-consent__modal-content--hidden')
  });
  // ** MODAL LINKS BEHAVIOUR ** //

  // ** COOKIES BEHAVIOUR ** //

  //activates the groups
  var omCookieSaveAction = function() {
    action = this.getAttribute('data-omcookie-panel-save');
    var form = document.getElementById('omCookieForm');
    var groups = document.querySelectorAll('[data-omcookie-panel-grp]');
    var i;

    cookie = '';

    //save the group id (group-x) and the made choice (.0 for group denied and .1 for group accepted)
    switch (action) {
      case 'all':
      for (i = 0; i < groups.length; i++) {
        var radio = form.elements[groups[i].dataset['omcookieGroup']];
        if (radio){
          omCookieEnableCookieGrp(groups[i].dataset['omcookieGroup']);
          cookie += groups[i].dataset['omcookieGroup'] + ".1,";
        }
      }
      break;
      case 'save':
      for (i = 0; i < groups.length; i++) {
        var radio = form.elements[groups[i].dataset['omcookieGroup']];
        if (radio){
          if (radio.value == groups[i].dataset['omcookieGroup'] + ".1" ){
            omCookieEnableCookieGrp(groups[i].dataset['omcookieGroup']);
          }
          cookie += radio.value +",";
        }
      }
      break;
      case 'min':
      for (i = 0; i < groups.length; i++) {
        var radio = form.elements[groups[i].dataset['omcookieGroup']];

        if (radio && !radio.dataset) {

          cookie += groups[i].dataset['omcookieGroup'] + ".0,";
        }
        if (radio && radio.dataset) { //essentials
          omCookieEnableCookieGrp(groups[i].dataset['omcookieGroup']);
          cookie += groups[i].dataset['omcookieGroup'] + ".1,";
        }
      }
      break;
    }
    //replace dismiss to the end of the cookie
    cookie = cookie.replace('dismiss','');
    cookie += 'dismiss';
    //cookie = cookie.slice(0, -1);
    omCookieUtility.setCookie('omCookieConsent',cookie,364);
    //push stored events to gtm. We push this last so we are sure that gtm is loaded
    pushGtmEvents(omGtmEvents);
    omTriggerPanelEvent(['cookieconsentsave','cookieconsentscriptsloaded']);

    document.dispatchEvent(new CustomEvent("trackPage"));

    setTimeout(function () {
      document.querySelectorAll('[data-omcookie-panel]')[0].classList.toggle('cookie-consent__modal--is-visible');
    },350)

  };

  var omTriggerPanelEvent = function(events){
    events.forEach(function (event) {
      var eventObj = new CustomEvent(event, {bubbles: true});
      document.querySelectorAll('[data-omcookie-panel]')[0].dispatchEvent(eventObj);
    })
  };

  var pushGtmEvents = function (events) {
    window.dataLayer = window.dataLayer || [];
    events.forEach(function (event) {
      window.dataLayer.push({
        'event': event,
      });
    });
  };
  var omCookieEnableCookieGrp = function (groupKey){
    if(omCookieGroups[groupKey] !== undefined){
      for (var key in omCookieGroups[groupKey]) {
        // skip loop if the property is from prototype
        if (!omCookieGroups[groupKey].hasOwnProperty(key)) continue;
        var obj = omCookieGroups[groupKey][key];
        //save gtm event for pushing
        if(key === 'gtm'){
          if(omCookieGroups[groupKey][key]){
            omGtmEvents.push(omCookieGroups[groupKey][key]);
          }
          continue;
        }
        //set the cookie html
        for (var prop in obj) {
          // skip loop if the property is from prototype
          if (!obj.hasOwnProperty(prop)) continue;

          if(Array.isArray(obj[prop])){
            var content = '';
            //get the html content
            obj[prop].forEach(function (htmlContent) {
              content += htmlContent
            });
            var range = document.createRange();
            if(prop === 'header'){
              // add the html to header
              range.selectNode(document.getElementsByTagName('head')[0]);
              var documentFragHead = range.createContextualFragment(content);
              document.getElementsByTagName('head')[0].appendChild(documentFragHead);
            }else{
              //add the html to body
              range.selectNode(document.getElementsByTagName('body')[0]);
              var documentFragBody = range.createContextualFragment(content);
              document.getElementsByTagName('body')[0].appendChild(documentFragBody);
            }
          }
        }
      }
      //remove the group so we don't set it again
      delete omCookieGroups[groupKey];
    }
  };
  var omCookieUtility = {
    getCookie: function(name) {
      var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
      return v ? v[2] : null;
    },
    setCookie: function(name, value, days) {
      var d = new Date;
      d.setTime(d.getTime() + 24*60*60*1000*days);
      document.cookie = name + "=" + value + ";path=/;domain=.es.amnesty.org;expires=" + d.toGMTString() + ";SameSite=Lax";
    },
    deleteCookie: function(name){ omCookieUtility.setCookie(name, '', -1); }
  };

  (function () {

    if ( typeof window.CustomEvent === "function" ) return false;

    function CustomEvent ( event, params ) {
      params = params || { bubbles: false, cancelable: false, detail: null };
      var evt = document.createEvent( 'CustomEvent' );
      evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
      return evt;
    }

    window.CustomEvent = CustomEvent;
  })();
  // ** COOKIES BEHAVIOUR ** //

}());

</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K8W9J7D');</script>
<!-- End Google Tag Manager -->
