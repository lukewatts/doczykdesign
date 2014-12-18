<?php
/**
 * Framework for quickly turning static html sites into dynamic 'pseudo CMS' websites 
 *
 * @author  Luke Watts <luke@luke-watts.com>
 * @author  Affinity4 <info@affinity4.ie>
 * @link    http://affinity4.ie/
 * @version 2.2.0
 */

/**
 * @since 1.2.0
 */
if ( !defined( 'PHP_VERSION' ) ) {
  define('PHP_VERSION', phpversion());
}

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
if ( PHP_VERSION < '5.3.2' ) {

  /**
   * @since 2.2.0
   */
  require_once( 'autoload.php' );

}
else {

  require_once( $path['base'] . '/vendor' . '/autoload.php' );

}

$env = new Environment( $environment );
$url = new HTTP();
$html = new HTML();
$helper = new Helper();
$meta = new Meta( $url );
$plugin = new Plugin();

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