<?php

/**
 * Implements hook_preprocess_hook()
 *
 * Adds custom markup to footer.
 * Adds modernizr.js
 */
function drupal_bootstrap_theme_preprocess_page(&$variables) {
  // Footer content
  $variables['page']['footer'][] = array('#markup' => '<div class="copyright">&copy; ' . date('Y') . ' CLIENT_NAME </div>');

  drupal_add_js($variables['directory'] . '/js/vendor/modernizr-2.6.2.min.js');
}

/**
 * Implements hook_js_alter().
 *
 * Disables sticky table headers FTW!
 */
function drupal_bootstrap_theme_js_alter(&$js) {
  unset($js['misc/tableheader.js']);
}
