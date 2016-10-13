<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">

  <?php print $head; ?>
  <title><?php $title = explode('#',$head_title); print $title[0]; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php
    //Idioma
    $cat = 0;
    $url = $_SERVER['REQUEST_URI'];
    if (preg_match('/\/cat/',$url)){
      $cat = 1;
    }
  ?>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <?php if($cat){ ?>
      <meta property="og:url"           content="https://crm.es.amnesty.org/unete-a-amnistia/cat/" />
      <meta property="og:type"          content="website" />
      <meta name="title" property="og:title"         content="Fes-te soci/a d'Amnistia Internacional i recolza la nostra feina" />
      <meta name="description" property="og:description"   content="Amnistia Internacional és una organizació democràtica i independent que no accepta fons que puguin compromtre la seva feina. Es finança exclusivament gràcies a les aportacions de persones compromeses amb la idea d'aconseguir un món més just. La teva col·laboració, per petita que sigui, és l'única cosa que ens permet seguir defensant els drets humans, així com investigar i denunciar abusos que es duen a terme a tot el món. Fes-te soci/a i recolza la nostra feina. Quants més siguem, més força tindrem." />
      <meta property="og:image"         content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/header.jpg" />

      <script>
        var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/';
        var tituloActual = 'Gràcies';
        var urlActualFB = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_facebook&utm_medium=social_com&utm_source=facebook';
        var urlActualTW = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_twitter&utm_medium=social_com&utm_source=twitter';
        var resumenFB = "Amnistia Internacional és una organizació democràtica i independent que no accepta fons que puguin compromtre la seva feina. Es finança exclusivament gràcies a les aportacions de persones compromeses amb la idea d'aconseguir un món més just. La teva col·laboració, per petita que sigui, és l'única cosa que ens permet seguir defensant els drets humans, així com investigar i denunciar abusos que es duen a terme a tot el món. Fes-te soci/a i recolza la nostra feina. Quants més siguem, més força tindrem."
        var imagenFB = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/header.jpg';
      </script>

  <?php }else{ ?>
      <meta property="og:url"           content="https://crm.es.amnesty.org/unete-a-amnistia/" />
      <meta property="og:type"          content="website" />
      <meta name="title" property="og:title"         content="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo" />
      <meta name="description" property="og:description"   content="Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos." />
      <meta property="og:image"         content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/header.jpg" />

      <script>
        var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia/';
        var tituloActual = 'Gracias';
        var urlActualFB = 'https://crm.es.amnesty.org/unete-a-amnistia/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_facebook&utm_medium=social_com&utm_source=facebook';
        var urlActualTW = 'https://crm.es.amnesty.org/unete-a-amnistia/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_twitter&utm_medium=social_com&utm_source=twitter';
        var resumenFB = 'Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos.';
        var imagenFB = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/header.jpg';
      </script>
  <?php } ?>

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
