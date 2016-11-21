<?php if( in_array($node->nid, $navidad_list) ) { ?>
    <meta property="og:url" content="https://crm.es.amnesty.org/unete-a-amnistia-por-navidad/" />
    <meta property="og:type" content="website" />
    <meta name="title" property="og:title" content="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo" />
    <meta name="description" property="og:description" content="Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos." />
    <meta property="og:image" content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/header-navidad.jpg" />
<?php } else if( in_array($node->nid,$socixs_form_list) && $cat) { ?>
    <meta property="og:url" content="https://crm.es.amnesty.org/unete-a-amnistia/cat" />
    <meta property="og:type" content="website" />
    <meta name="title" property="og:title" content="Hazte socio/a de Amnistía Internacional y apoya nuestro trabajo" />
    <meta name="description" property="og:description" content="Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos." />
    <meta property="og:image" content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>" />
<?php } else if( in_array($node->nid,$socixs_form_list) && !$cat ) { ?>
    <meta property="og:url" content="https://crm.es.amnesty.org/unete-a-amnistia/" />
    <meta property="og:type" content="website" />
    <meta name="title" property="og:title" content="Fes-te soci/a d'Amnistia Internacional i recolza la nostra feina" />
    <meta name="description" property="og:description" content="Amnistia Internacional és una organizació democràtica i independent que no accepta fons que puguin compromtre la seva feina. Es finança exclusivament gràcies a les aportacions de persones compromeses amb la idea d'aconseguir un món més just. La teva col·laboració, per petita que sigui, és l'única cosa que ens permet seguir defensant els drets humans, així com investigar i denunciar abusos que es duen a terme a tot el món. Fes-te soci/a i recolza la nostra feina. Quants més siguem, més força tindrem." />
    <meta property="og:image" content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>" />
<?php } else if( in_array($node->nid,$donativos_form_list) && $cat ) { ?>
    <meta property="og:url" content="https://crm.es.amnesty.org/haz-un-donativo/cat" />
    <meta property="og:type" content="website" />
    <meta name="title" property="og:title" content="Fes un donatiu a Amnistia Internacional i recolza la nostra feina" />
    <meta name="description" property="og:description" content="Amnistia Internacional és una organizació democràtica i independent que no accepta fons que puguin compromtre la seva feina. Es finança exclusivament gràcies a les aportacions de persones compromeses amb la idea d'aconseguir un món més just. La teva col·laboració, per petita que sigui, és l'única cosa que ens permet seguir defensant els drets humans, així com investigar i denunciar abusos que es duen a terme a tot el món. Fes-te soci/a i recolza la nostra feina. Quants més siguem, més força tindrem." />
    <meta property="og:image" content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>" />
<?php } else if( in_array($node->nid,$donativos_form_list) && !$cat ) { ?>
    <meta property="og:url" content="https://crm.es.amnesty.org/haz-un-donativo" />
    <meta property="og:type" content="website" />
    <meta name="title" property="og:title" content="Haz un donativo a Amnistía Internacional y apoya nuestro trabajo" />
    <meta name="description" property="og:description" content="Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos." />
    <meta property="og:image" content="https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>" />
<?php } ?>

<!-- Botones de redes sociales -->

<?php if( in_array($node->nid, $navidad_list) ) { ?>
  <script>
    var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia-por-navidad';
    var tituloActual = 'Haz-te socio/a de Amnistía Internacional y apoya nuestro trabajo.';
    var urlActualFB = 'https://www.es.amnesty.org/justiciapornavidad/?utm_source=facebook&utm_campaign=comp&utm_medium=social_com&utm_term=Killings_disappearances&utm_content=Web_petition-justiciapornavidad-facebook';
    var urlActualTW = 'https://www.es.amnesty.org/justiciapornavidad/?utm_source=twitter&utm_campaign=comp&utm_medium=social_com&utm_term=Killings_disappearances&utm_content=Web_petition-justiciapornavidad-twitter';
    var resumen = 'Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos.';
    var imagen = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>';
    var compartirViaTW = 'amnistiaespana';
  </script>
<?php } else if( in_array($node->nid,$socixs_gracias_list) && $cat ){ ?>
    <script>
      var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/';
      var tituloActual = 'Fes-te soci/a d\'Amnistia Internacional i recolza la nostra feina.';
      var urlActualFB = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_facebook&utm_medium=social_com&utm_source=facebook';
      var urlActualTW = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_twitter&utm_medium=social_com&utm_source=twitter';
      var resumen = "Amnistia Internacional és una organizació democràtica i independent que no accepta fons que puguin compromtre la seva feina. Es finança exclusivament gràcies a les aportacions de persones compromeses amb la idea d'aconseguir un món més just. La teva col·laboració, per petita que sigui, és l'única cosa que ens permet seguir defensant els drets humans, així com investigar i denunciar abusos que es duen a terme a tot el món. Fes-te soci/a i recolza la nostra feina. Quants més siguem, més força tindrem."
      var imagen = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>';
      var compartirViaTW = 'AmnistiaCAT';
    </script>
<?php } else if( in_array($node->nid,$socixs_gracias_list) && !$cat ) { ?>
    <script>
      var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia/';
      var tituloActual = 'Haz-te socio/a de Amnistía Internacional y apoya nuestro trabajo.';
      var urlActualFB = 'https://crm.es.amnesty.org/unete-a-amnistia/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_facebook&utm_medium=social_com&utm_source=facebook';
      var urlActualTW = 'https://crm.es.amnesty.org/unete-a-amnistia/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_socios_twitter&utm_medium=social_com&utm_source=twitter';
      var resumen = 'Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos.';
      var imagen = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>';
      var compartirViaTW = 'amnistiaespana';
    </script>
<?php } else if( in_array($node->nid,$donativos_gracias_list) && $cat ) { ?>
  <script>
    var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/';
    var tituloActual = 'Fes un donatiu a Amnistia Internacional i recolza la nostra feina.';
    var urlActualFB = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_donativo_facebook&utm_medium=social_com&utm_source=facebook';
    var urlActualTW = 'https://crm.es.amnesty.org/unete-a-amnistia/cat/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_donativo_twitter&utm_medium=social_com&utm_source=twitter';
    var resumen = "Amnistia Internacional és una organizació democràtica i independent que no accepta fons que puguin compromtre la seva feina. Es finança exclusivament gràcies a les aportacions de persones compromeses amb la idea d'aconseguir un món més just. La teva col·laboració, per petita que sigui, és l'única cosa que ens permet seguir defensant els drets humans, així com investigar i denunciar abusos que es duen a terme a tot el món. Fes-te soci/a i recolza la nostra feina. Quants més siguem, més força tindrem."
    var imagen = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>';
    var compartirViaTW = 'AmnistiaCAT';
  </script>
<?php } else if( in_array($node->nid,$donativos_gracias_list) && !$cat ) { ?>
  <script>
    var urlActual = 'https://crm.es.amnesty.org/unete-a-amnistia/';
    var tituloActual = 'Haz un donativo a Amnistía Internacional y apoya nuestro trabajo.';
    var urlActualFB = 'https://crm.es.amnesty.org/unete-a-amnistia/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_donativo_facebook&utm_medium=social_com&utm_source=facebook';
    var urlActualTW = 'https://crm.es.amnesty.org/unete-a-amnistia/?utm_campaign=comp&utm_term=Amnesty&utm_content=form_donativo_twitter&utm_medium=social_com&utm_source=twitter';
    var resumen = 'Amnistía Internacional es una organización democrática e independiente que no acepta fondos que puedan comprometer su trabajo. Se financia exclusivamente gracias a las aportaciones de personas comprometidas con la idea de conseguir un mundo más justo. Tu colaboración, por pequeña que sea, es lo único que nos permite seguir defendiendo los derechos humanos, así como investigando y denunciando abusos que se cometen en todo el mundo. Hazte socio/a y apoya nuestro trabajo. Cuantos más seamos, más fuerza tendremos.';
    var imagen = 'https://crm.es.amnesty.org/sites/all/themes/ai-theme-civicrm/ai-formulario/images/<?php print $img_header; ?>';
    var compartirViaTW = 'amnistiaespana';
  </script>
<?php } ?>
