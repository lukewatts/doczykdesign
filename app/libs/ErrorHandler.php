<?php

class ErrorHandler {
  protected $errors = [];
  

  /**
   * Add error message
   *
   * @param  string $error Error message to add to array. (Required)
   * @param  array  $key    Key to add error to. (Optional)
   * @return void
   *
   * @since 1.0.0
   */
  public function addError( $error, $key = null ) {

    if ( $key ) {      
      $this->errors[$key][] = $error;    
    }
    else {
      $this->error[] = $error;
    }

  }


  /**
   * Check if there are errors
   * 
   * @return boolean If has errors true, otherwise false
   *
   * @since 1.0.0
   */
  public function hasErrors() {
    return count( $this->all() ) ? true : false;
  }


  /**
   * Return all errors or by key
   * 
   * @param  string $key  Field to return errors for. (Optional)
   * @return array        Array of errors
   *
   * @since 1.0.0
   */
  public function all( $key = null ) {
    return isset( $this->errors[$key] ) ? $this->errors[$key] : $this->errors;
  }


  /**
   * Get the first error for the specified field
   * 
   * @param  string $key Name of field to return first error from. (Required)
   * @return string      The first error for the specified field
   *
   * @since 1.0.0
   */
  public function first( $key ) {
    return isset( $this->all()[$key][0] ) ? $this->all()[$key][0] : '' ;
  }

}