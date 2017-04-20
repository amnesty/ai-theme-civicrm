<?php
// Píxeles Adwords para páginas de gracias
if( in_array(socixs_gracias_list) ){
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
<?php  }
  }
}
?>
