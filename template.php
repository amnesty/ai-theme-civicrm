<?php

/**
 * @file
 * template.php
 */



/**
 * Bootstrap theme wrapper function for the primary menu links.
 */
function encoremed_bootstrap_menu_tree__primary(&$variables) {
  return '<ul class="menu nav navbar-nav navbar-right">' . $variables['tree'] . '</ul>';
}
