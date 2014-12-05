<?php

/**
 * Used to create paths for includes and requires
 * 
 * @var array
 * @since 1.1.0
 */
$path = array(
  // TODO: Find PHP <5.3.2 safe way to implement these paths
  'base'    => str_replace( '\\', '/', dirname( __DIR__ ) ),
  'app'     => str_replace( '\\', '/', __DIR__ ),
  'admin'   => str_replace( '\\', '/', __DIR__ . '/admin' )
);