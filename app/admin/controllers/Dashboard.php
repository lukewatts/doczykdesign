<?php

class Dashboard extends Controller {
  
  /**
   * Main dashboard page
   * 
   * @param  string $data  Data passed in. First url param
   * @return void   $view  Displays the view
   *
   * @since  1.1.0
   */
  public function index( $name = '' ) {
    global $site;
    
    // To use models
    $admin = $this->model('admin');
    $admin->name = $name;

    // To insert data into the view
    $data = array(
      'site_url' => $site['url'],
      'admin_url' => $site['url'] . 'admin/',
      'name'  => $admin->name
    );

    // To use views
    $this->view( 'index', $data );

  }

}