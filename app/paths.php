<?php

/**
 * Used to create paths for includes and requires
 * 
 * @var array
 * @since 1.1.0
 */
$path = array(
  'base'    => str_replace( '\\', '/', dirname( __DIR__ ) ),
  'app'     => str_replace( '\\', '/', __DIR__ ),
  'admin'   => str_replace( '\\', '/', __DIR__ . '/admin' )
);