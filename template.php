<?php

/**
 * Implements hook_preprocess_hook()
 *
 * Adds custom markup to footer.
 */
function drupal_streamline_theme_preprocess_page(&$variables) {
  // Footer content
  $variables['page']['footer'][] = array('#markup' => '<div class="copyright">&copy; ' . date('Y') . ' CLIENT_NAME </div>');
}

/**
 * Implements hook_js_alter().
 *
 * Disables sticky table headers FTW!
 */
function drupal_streamline_theme_js_alter(&$js) {
  unset($js['misc/tableheader.js']);
}
