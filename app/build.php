<?php
/**
 * Framework for quickly turning static html sites into dynamic 'pseudo CMS' websites 
 *
 * @author  Luke Watts <luke@luke-watts.com>
 * @author  Affinity4 <info@affinity4.ie>
 * @link    http://affinity4.ie/
 * @version 2.0
 */

/**
 * @since 1.2.0
 */
define( 'PHP_VER', phpversion() );

// Setup paths for use through application
require_once( 'paths.php' );

// URL helpers
require_once( 'urls.php' );

// Set configuration values
require_once( 'config/config.php' );

// Set $site['url'] and allow override
$site['url'] = ( $site['url'] == '' ) ? get_base_url(true) : $site['url'];

// If debug mode is true turn on errors and warnings
if ( $debug_mode == true ) ini_set('display_errors', 1);

/**
 * @since 1.2.0
 */
if ( PHP_VER < '5.3.2' ) {
  // TODO: Use spl_autoloader which was added in php 5.1.2
  require_once( $path['app'] . '/libs/FileHandler.php' );
  require_once( $path['app'] . '/libs/HTTP.php' );
  require_once( $path['app'] . '/libs/HTML.php' );
  require_once( $path['app'] . '/libs/Helpers.php' );
  require_once( $path['app'] . '/libs/Meta.php' );
  require_once( $path['app'] . '/libs/ErrorHandler.php' );
  require_once( $path['app'] . '/libs/Validator.php' );
}
else {
  require_once( $path['base'] . '/vendor' . '/autoload.php' );
}

$url = new HTTP();
$html = new HTML();
$helper = new Helper();
$meta = new Meta( $url );

if ( $url->is_page( 'contact' ) ) {

  require_once( 'config/mail.php' );

  switch ( $mail_settings['mailer'] ) {
    case 'PHPMailer':
      array_push( $active_plugins, 'PHPMailer' );
      break;
    case 'SwiftMailer':
      array_push( $activate_plugins, 'SwiftMailer' );
      break;
    default:
      return false;
      break;
  }

}

// Include Custom Plugins
include_once( 'plugins/init.php' );