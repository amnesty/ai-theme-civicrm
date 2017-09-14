<!-- Header -->
<?php if( $excluded_header_list != null || !in_array($node->nid, $excluded_header_list) ){ ?>

<?php if( !in_array('administrator', $user->roles) ){ ?>
<nav class="navbar navbar-fixed-top">
<header class="header" data-header="" role="banner">
    <div class="header__container" data-header-container="">
        <div class="header__slogan-container">
        <?php if($cat){ ?>
            <div class="header__slogan"> Actuem pels drets humans arreu del món. </div>
        <?php }else{ ?>
              <div class="header__slogan"> Actuamos por los derechos humanos en todo el mundo </div>
        <?php } ?>
        </div>
        <?php if($cat){ ?>
          <h1 class="logo" data-logo=""><a class="logo__link" href="https://www.amnistiacatalunya.org">Amnistia Internacional Catalunya</a></h1>
        <?php }else{ ?>
          <h1 class="logo" data-logo=""><a class="logo__link" href="https://www.es.amnesty.org">Amnistía Internacional España</a></h1>
        <?php } ?>
    </div>
</header>
</nav>
<?php } ?>

<!-- Image after header-->
<div class="image-header image-header--has-credits-sm image-header--actua">
    <div id="pixel"></div>
    <?php if ( ( $node->nid==$socixs_form || $node->nid==$socixs_form_cat || $node->nid==$socixs_gracias || $node->nid==$socixs_gracies) && $mobile ) { // MOBILE  ?>
      <div style="background-image: url('<?php print $images_path; ?>headerB.jpg?anchor=topcenter');" class="responsive--bg responsive--bg-mobile lazyloaded"
          data-bgset="<?php print $images_path; ?>headerB.jpg?anchor=topcenter">
      </div>
      <noscript>
          <img src="<?php print $images_path; ?>headerB.jpg?anchor=topcenter" class=responsive__img>
      </noscript>
    <?php } elseif ( in_array($node->nid, $antevenio_list) ) { // ANTEVENIO FORMS ?>
      <div style="background-image: url('<?php print $images_path.$img_header; ?>?anchor=topcenter');" class="responsive--bg <?php print $extra_class; ?> lazyloaded"
          data-bgset="<?php print $images_path.$img_header; ?>?anchor=topcenter">
      </div>
      <noscript>
          <img src="<?php print $images_path.$img_header; ?>?anchor=topcenter" class=responsive__img>
      </noscript>
    <?php } else { // Resto de formularios ?>
      <div style="background-image: url('<?php print $images_path.$img_header; ?>?anchor=topcenter');" class="responsive--bg <?php print $extra_class; ?> lazyloaded"
          data-bgset="<?php print $images_path.$img_header; ?>?anchor=topcenter">
      </div>
      <noscript>
          <img src="<?php print $images_path.$img_header; ?>?anchor=topcenter" class=responsive__img>
      </noscript>
    <?php } ?>
    <div class="image-header__content--medium">
        <div class="image-headline--full">
            <h2 class="image-headline__actua-title">
                <span class="heading--tape--dark"><?php  $title = explode('#',$node->title); echo $title[0];  ?></span>
            </h2>
        </div>
    </div>
</div><!-- Image after header -->

<?php } ?>
