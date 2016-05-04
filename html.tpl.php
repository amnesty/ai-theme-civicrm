<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
   <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://crm.es.amnesty.com/unete-a-amnistia" />
  <meta property="og:type"          content="website" />
  <meta name="title" property="og:title"         content="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo" />
  <meta name="description" property="og:description"   content="Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos." />

  <script>
    var urlActual = 'https://crm.es.amnesty.com/unete-a-amnistia/';
    var tituloActual = 'Gracias'; 
    var tituloActualTW = 'Gracias';
    var urlActualFB = 'https://crm.es.amnesty.com/unete-a-amnistia/?utm_source=facebook&utm_campaign=comp&utm_medium=social_com&utm_term=Amnesty&utm_content=socios';
    var urlActualTW = 'https://crm.es.amnesty.com/unete-a-amnistia/?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=Amnesty&utm_content=socios';
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
