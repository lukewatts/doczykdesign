<?php

class Controller {

  /**
   * Dynamically require in model if exists
   * 
   * @param  string $model Name of the Model to require
   * @return object        Returns new instance of the specified model        
   *
   * @since  1.1.0
   */
  protected function model( $model ) {
    global $path;

    $path_to_model = $path['admin'] . '/models/' . $model . '.php';

    try {
      if ( file_exists( $path_to_model ) ) {
        
        require_once( $path_to_model );

        return new $model();

      }
      else {

        throw new Exception( '<strong>ERROR RETRIEVING FILE:</strong> No such file <strong>' . ucfirst( $model ) . '.php</strong> in directory <strong>' . $path['admin'] . '/models/</strong>' );

      }
    }
    catch ( Exception $e ) {

      echo $e->getMessage();

    }
    
  }


  /**
   * Import a view and handle arrays passed in for use in the view
   * Can set to extract keys to variables and / or prefix extracted
   * variable name with 'data_' if there happens to be a conflict in a view
   * 
   * @param  string  $view    Name of the view 'viewname' or 'ViewDirectory/viewname'
   * @param  array   $data    Data to be passed to the view. Assoc arrays recommended!!!
   * @param  boolean $extract Extract variable name from any assoc array passed in
   * @param  boolean $prefix  Whether or not to prefix extracted variables with 'data_'
   * @return output           Displays the view
   *
   * @since 1.1.0
   */
  protected function view( $view, $data = null, $extract = true, $prefix = false ) {

    global $path;

    $path_to_view = $path['admin'] . '/views/' . $view . '.php';

    try {
      if ( file_exists( $path_to_view ) ) {

        if ( is_array( $data ) && $extract ) {
          
          // Check if $data is an associative array as best we can 
          $is_assoc_array = ( (bool)count( array_filter( array_keys( $data ), 'is_string') ) ) ? true : false;

          // If it is extract variable names from it for use in the view
          if ( $is_assoc_array ) {

            if ( $prefix ) {

              extract( $data, EXTR_PREFIX_ALL, 'data' );

            }
            else {
                        
              extract( $data );

            }

          }

        }
        
        require_once( $path_to_view );

      }
      else {

        throw new Exception( '<strong>ERROR RETRIEVING FILE:</strong> No such file <strong>' . $view . '.php</strong> in directory <strong>' . $path['admin'] . '/view/</strong>' );

      }
    }
    catch ( Exception $e ) {

      echo $e->getMessage();

    }

  }


}