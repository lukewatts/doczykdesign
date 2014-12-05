<?php
// TODO: Fix for php <5.3.2
require_once( $path['app'] . '/libs/Plugin.php' );

/*
 * Retrieves the array of active plugins from the app/config.php global variable $active_plugins
 */
foreach ( $active_plugins as $active_plugin ) {

  if ( !empty( $active_plugin ) ) {
    include_once( $active_plugin . '/' . $active_plugin . '.php' );
  }
  
}
