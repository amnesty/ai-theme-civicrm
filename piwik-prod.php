<?php

include_once("config.php");

// Consultamos donativo
if( in_array($node->nid, $donativos_gracias_list) ){
  module_load_include('inc','webform','includes/webform.submissions');
  $sid = $_GET['sid'];
  $submission = webform_get_submissions(array('sid' => $sid));
  $result = $submission[$sid]->data;
  $importe_donativo = ($result[$donativo_idx][0] == "0" ? $result[$donativo_idx2][0] : $result[$donativo_idx][0]);

  // Consltamos método de pago
  $metodo_pago = ($result[$metodo_pago_idx][0]==""?$result[$metodo_pago_idx2][0]:$result[$metodo_pago_idx][0]);
} // Consultamos cuota anual introducida
else if(in_array($node->nid, $socixs_gracias_list)){
  module_load_include('inc','webform','includes/webform.submissions');
  $sid = $_GET['sid'];
  $submission = webform_get_submissions(array('sid' => $sid));
  $result = $submission[$sid]->data;
  $frec = $result[$cuota_idx-1][0];
  $cuota = $result[$cuota_idx][0];
  $otra = $result[$cuota_idx+1][0];
  $importe_anual = ($cuota > 0 ? $cuota*$frec : $otra*$frec);
}
// Si es donativo todavía no tiene el parámetro m (de método de pago)
if( in_array($node->nid, $donativos_gracias_list) && !isset($_GET['m']) ){ ?>
     <!--parametro metodo pago -->
     <script type="text/javascript">
        var metodo = "<?php echo $metodo_pago; ?>";
        insertParam("m", metodo);

        // Insert GET param and reload
        function insertParam(key, value) {
            key = encodeURI(key); value = encodeURI(value);
            var kvp = document.location.search.substr(1).split('&');
            var i=kvp.length; var x; while(i--) {
                x = kvp[i].split('=');
                if (x[0]==key) {
                    x[1] = value;
                    kvp[i] = x.join('=');
                    break;
                }
            }
            if(i<0) {kvp[kvp.length] = [key,value].join('=');}
            //this will reload the page, it's likely better to store this until finished
            document.location.search = kvp.join('&');
          }
     </script>
<?php
}

// Excluimos a formualrios de telemarketing del tracking
if ( !in_array($node->nid, $telemkg_form_list) &&
   ( in_array($node->nid, $socixs_form_list) || in_array($node->nid, $socixs_gracias_list)
   || in_array($node->nid, $donativos_form_list) || in_array($node->nid, $donativos_gracias_list) )
) {
?>
  <!-- Piwik -->
  <script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
    _paq.push(["setCookieDomain", "*.es.amnesty.org"]);
    _paq.push(["setDomains", ["*.es.amnesty.org"]]);
      <?php if ($node->nid==$socixs_form_A) { ?>
  	  _paq.push(['setCustomDimension', customDimensionId = 1, customDimensionValue = 'original']);
      <?php } else if ($node->nid==$socixs_form_B){ ?>
	  _paq.push(['setCustomDimension', customDimensionId = 1, customDimensionValue = 'versionB']);
      <?php } ?>
    _paq.push(['trackPageView']);
    <?php if( in_array($node->nid ,$donativos_form_list) ){ ?>
       _paq.push(['trackEvent', 'Formulario', 'Donativos']);
    <?php } ?>
    _paq.push(['enableLinkTracking']);

    (function() {
      var u="//estadisticas.es.amnesty.org/piwik/";
      <?php if( in_array($node->nid,$donativos_gracias_list) ) { ?>
          _paq.push(['trackGoal', 2, <?php echo $importe_donativo; ?>]);
      <?php } else if ( in_array($node->nid, $socixs_gracias_list) ) { ?>
    	  _paq.push(['trackGoal', 1, <?php echo $importe_anual; ?>]);
      <?php } ?>
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', 1]);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <noscript>
	   <p>
	      <img src="//estadisticas.es.amnesty.org/piwik/piwik.php?idsite=1" style="border:0;" alt="" />
	  </p>
  </noscript>
  <!-- End Piwik Code -->
<?php }

// Píxeles Adwords
if(isset($_COOKIE['cookieAlert3']) && $_COOKIE['cookieAlert3'] == 1){ // si ha aceptado las cookies

  if( isset($_GET["get_campaign"]) && $_GET["get_campaign"] == 'anunggl_display' || $_SESSION['pk_campaign'] == 'anunggl_display' || $_SESSION['utm_campaign'] == 'anunggl_display') { // display
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
  }
  else if (isset($_GET["get_campaign"]) && $_GET["get_campaign"] == 'anunggl' || $_SESSION['pk_campaign'] == 'anunggl' || $_SESSION['utm_campaign'] == 'anunggl'){ // grants
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
  }
  
}

/***************** Mapas de calor ***************/

/*if( ( $node->nid == $socixs_form || $node->nid == $socixs_form_A ) && !in_array($node->nid, $telemkg_form_list) ) { ?>
	<script type="text/javascript" src="//estadisticas.es.amnesty.org/piwik/plugins/ClickHeat/libs/js/clickheat.js"></script>
	<script type="text/javascript">
		clickHeatSite = 1;
		clickHeatGroup = 'socios';
		clickHeatServer = 'http://estadisticas.es.amnesty.org/piwik/plugins/ClickHeat/libs/click.php';
		initClickHeat();
	</script>
<?php } else if( ( $node->nid == $socixs_form_B ) && !in_array($node->nid, $telemkg_form_list) ) { ?>
	<script type="text/javascript" src="//estadisticas.es.amnesty.org/piwik/plugins/ClickHeat/libs/js/clickheat.js"></script>
	<script type="text/javascript">
        	clickHeatSite = 1;
        	clickHeatGroup = 'sociosB';
        	clickHeatServer = 'http://estadisticas.es.amnesty.org/piwik/plugins/ClickHeat/libs/click.php';
        	initClickHeat();
	</script>
<?php } else if( ( $node->nid == $donativos_form ) && !in_array($node->nid, $telemkg_form_list) ) { ?>
        <script type="text/javascript" src="//estadisticas.es.amnesty.org/piwik/plugins/ClickHeat/libs/js/clickheat.js"></script>
        <script type="text/javascript"><!--
                clickHeatSite = 1;
                clickHeatGroup = 'donativos16';
                clickHeatServer = 'http://estadisticas.es.amnesty.org/piwik/plugins/ClickHeat/libs/click.php';
                initClickHeat();
        </script>
<?php } ?>*/
