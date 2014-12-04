<?php

class FluxSlider extends Plugin {

  protected $html;
  public $slides;

  public function __construct( HTML $html ) {

    $this->html = $html;

  }

  /**
   * Creates a single slide using given parameters
   * 
   * @param  string $img  The path to the image (Required)
   * @param  string $alt  The Alt Text (Required)
   * @param  array  $atts Additional html attributes. Examples: ['height' => '400', 'width' => '800', 'class' => 'flexslide'] (Optional)
   * 
   * @return void
   */
  public function slide( $img, $alt, $atts = null ) {

    echo $this->html->get_img( $img, $alt, $atts ) . PHP_EOL;
    
  }

  /**
   * Creates slider by looping through the $slides array and using the information there
   *
   * Slides for different sliders should be set on that page or template part AFTER the instance declaration
   * for that slider. This will allow for seperate sliders to be created per page by simply creating an instance
   * of the Slider class and using $slider = array() after to fill the slider.
   * 
   * @return void
   */
  public function slider() {
?>
        <!-- FLUX SLIDER -->
        <div id="slider">
<?php PHP_EOL;

    for ( $i = 0; $num_slides = count($this->slides), $i < $num_slides; $i++ ) {
      $this->slide( $this->slides[$i]['src'], $this->slides[$i]['alt'] );
    }
    
?>
        </div><!-- #slider -->

<?php
  }

}