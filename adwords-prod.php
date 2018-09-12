<?php

// Píxeles Adwords para páginas de gracias

if( in_array($node->nid, $socixs_gracias_list) ){
  if(isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1){ // si ha aceptado las cookies
    if( isset($_GET["pk_campaign"]) && $_GET["pk_campaign"] == 'anunggl_visual' || $_SESSION['pk_campaign'] == 'anunggl_visual' || $_SESSION['utm_campaign'] == 'anunggl_visual') { // display
?>
      <!-- Google Code for pixel_socios Conversion Page -->
      <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 966452768;
      var google_conversion_language = "en";
      var google_conversion_format = "3";
      var google_conversion_color = "ffffff";
      var google_conversion_label = "2_6jCLezgGwQoMzrzAM";
      var google_conversion_value = 9.00;
      var google_conversion_currency = "EUR";
      var google_remarketing_only = false;
      /* ]]> */
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
      <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/966452768/?value=9.00&amp;currency_code=EUR&amp;label=2_6jCLezgGwQoMzrzAM&amp;guid=ON&amp;script=0"/>
      </div>
      </noscript>
      <!-- End Adwords Code -->
<?php  }
    else if (isset($_GET["pk_campaign"]) && $_GET["pk_campaign"] == 'anunggl' || $_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl'){ // grants
?>
      <!-- Google Code for pixel_socios_grant Conversion Page -->
      <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 973137582;
      var google_conversion_language = "en";
      var google_conversion_format = "3";
      var google_conversion_color = "ffffff";
      var google_conversion_label = "xArOCN2-xXAQrs2D0AM";
      var google_remarketing_only = false;
      /* ]]> */
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
      <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/973137582/?label=xArOCN2-xXAQrs2D0AM&amp;guid=ON&amp;script=0"/>
      </div>
      </noscript>
      <!-- End Adwords Code -->
<?php  }
  }
}

// Píxeles de AdWords para página de asociación

if( in_array($node->nid, $socixs_form_list) ){
  if(isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1){ // si ha aceptado las cookies
    if (isset($_GET["pk_campaign"]) && $_GET["pk_campaign"] == 'anunggl' || $_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl'){ // grants
?>
      <!-- Event snippet for S_Conversión_Socios conversion page
      In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
      <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
            'send_to': 'AW-973137582/fzb2CI7CmIgBEK7Ng9AD',
            'transaction_id': '',
            'event_callback': callback
          });
          return false;
        }
      </script>
<?php
    }
  }
}

// Píxeles de AdWords para página de donacion

if( in_array($node->nid, $donativos_form_list) ){
  if(isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1){ // si ha aceptado las cookies
    if (isset($_GET["pk_campaign"]) && $_GET["pk_campaign"] == 'anunggl' || $_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl'){ // grants
?>
      <!-- Event snippet for pixel_conversion_donativo conversion page
      In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
      <script>
        function gtag_report_conversion(url) {
          var callback = function () {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          };
          gtag('event', 'conversion', {
            'send_to': 'AW-973137582/hvfuCOrw64YBEK7Ng9AD',
            'event_callback': callback
          });
          return false;
        }
      </script>
<?php
    }
  }
}
?>
