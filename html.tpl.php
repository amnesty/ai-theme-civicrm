<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <script language="javascript" type="text/javascript">
    function popitup(url) {
        newwindow=window.open(url,'name','height=200,width=150');
        if (window.focus) {newwindow.focus()}
        return false;
    }
  </script>
  <script>
                    var urlActual = 'http://www.es.amnesty.org/gracias-2015';
                    var tituloActual = 'Mira todo lo que se consiguió en 2015'; 
                    var tituloActualTW = 'Mira todo lo que se consiguió en 2015';
                    var urlActualFB = 'http://www.es.amnesty.org/gracias-2015?utm_source=facebook&utm_campaign=comp&utm_medium=social_com&utm_term=Amnesty&utm_content=gracias-2015';
                    var urlActualTW = 'https://www.es.amnesty.org/gracias-2015?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=Amnesty&utm_content=gracias-2015';
                    var urlActualFBFirma = 'http://www.es.amnesty.org/gracias-2015?utm_source=facebook&utm_campaign=comp&utm_medium=social_com&utm_term=Amnesty&utm_content=gracias-2015';
                    var urlActualTWFirma = 'https://www.es.amnesty.org/gracias-2015?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=Amnesty&utm_content=gracias-2015';
  </script>

  <div id="fb-root"></div>
  <!-- Faacebook -->
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
