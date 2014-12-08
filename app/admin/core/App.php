<?php

class App {

  protected $controller = 'dashboard';
  protected $method = 'index';
  protected $parmas = array();


  /**
   * Handles routing
   */
  public function __construct() {

    global $path;

    $url = $this->parseUrl();

    if ( file_exists( $path['app'] . '/admin/controllers/' . $url[0] . '.php' ) ) {

      $this->controller = $url[0];
      unset( $url[0] );
    }

    // Dynamically require in the controller file or require the default...
    require_once( $path['app'] . '/admin/controllers/' . ucfirst( $this->controller ) . '.php' );

    // Create a new object of the required controller class...
    $this->controller = new $this->controller;

    // If the second query string argument is passed...
    if ( isset( $url[1] ) ) {

      // Check if a method exists from the second query string argument...
      if ( method_exists( $this->controller, $url[1] ) ) {


        $this->method = $url[1]; // Set the method property
        unset( $url[1] ); // Unset so all params will be in there own array

      }

    }
    // Rebase the App::$params array.. 
    $this->params = $url ? array_values( $url ) : array();

    // And FINALLY, after all checking is done we actually call the App::method
    // specified in App::controller with any App:params
    call_user_func_array( array( $this->controller, $this->method ), $this->params );
    
  }


  /**
   * Parse Url into array for use in the routing system
   * 
   * @return array Array from query string arguments seperated by '/'
   */
  public function parseUrl() {

    // If a query string 'url' is passed (remember the htaccess file is rewriting urls to have ?url=)...
    if ( isset( $_GET['url'] ) ) {

      // Break the query string apart and filter for use in the contructor...
      return $url = explode( '/', filter_var( rtrim( $_GET['url'], '/' ), FILTER_SANITIZE_URL ) );

    }

  }
}