<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
 
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!-- Own AI js scripts-->
  <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/respond.min.js"></script>
</head>

<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>

<div id="page">
    <div id="content" class="clearfix">
        <?php if ($messages): ?>
            <div id="messages">
                <div id="console" class="section clearfix">
                    <?php print $messages; ?>
                </div>
            </div>
        <?php endif; ?>

        <div id="content-area"><?php print render($page['content']); ?></div>
    </div>
</div>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

</body>
</html>