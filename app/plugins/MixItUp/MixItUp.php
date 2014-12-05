<?php

class MixItUp extends Plugin {
  // TODO: Fix for php <5.3.2
  public $portfolio_items = [];
  public $effect;
  public $view;
  protected $html;

  public function __construct( HTML $html ) {

    $this->html = $html;

  }


  /**
   * Set the current effect
   * 
   * @param integer $effect Number of the effect. (Required)
   * @return void
   */
  public function setEffect( $effect ) {
    $this->effect = $effect;
  }

  /**
   * Return the current effect
   * 
   * @return integer Current effect name
   */
  public function getEffect() {
    return $this->effect;
  }

  /**
   * Output current effect
   * 
   * @return void
   */
  public function effect() {
    echo $this->getEffect();
  }

  /**
   * Set the current view based on the effect number
   * 
   * @return void
   */
  public function setView() {
    
    switch ( $this->getEffect() ) {
      case 1 :
        $this->view = 'first';
        break;
      case 2 :
        $this->view = 'second';
        break;
      case 3 :
        $this->view = 'third';
        break;
      case 4 :
        $this->view = 'fourth';
        break;
      case 5 :
        $this->view = 'fifth';
        break;
      case 6 :
        $this->view = 'sixth';
        break;
      case 7 :
        $this->view = 'seventh';
        break;
      case 8 :
        $this->view = 'eight';
        break;
      case 9 :
        $this->view = 'ninth';
        break;
      default:
        $this->view = 'tenth';
        break;
    }
    return $this->view;
    
  }

  /**
   * Return the current view
   * 
   * @return string Current view name
   */
  public function getView() {
    return $this->setView();
  }

  /**
   * Output current view
   * 
   * @return void
   */
  public function view() {
    echo $this->getView();
  }


  public function portfolioItem( $name, $src, $alt, $category ) {

    echo '<div class="mix view view-' . $this->getView() . ' ' . $category . '">' . PHP_EOL .
            $this->html->get_img( $src, $alt ) . PHP_EOL .
            '<div class="mask">' . PHP_EOL .
              '<h2>' . $name . '</h2>' . PHP_EOL .
              '<p></p>' . PHP_EOL .
              '<a href="' . get_assets_url('/') . $src . '" class="info">View</a>' . PHP_EOL .
            '</div><!-- .mask -->' . PHP_EOL .
          '</div><!-- .view -->' . PHP_EOL;
  }

  public function portfolio() {

    echo '<!-- CONTENT FILTER -->' . PHP_EOL .
        '<dl id="filter" class="sub-nav">' . PHP_EOL .
          '<dt>Filter:</dt>' . PHP_EOL .
          '<dd class="active">' . PHP_EOL .
            '<a href="#all" class="filter" data-filter="all">All</a>' . PHP_EOL .
          '</dd>' . PHP_EOL .
          '<dd>' . PHP_EOL .
            '<a href="#logos" class="filter" data-filter=".logos">Logos</a>' . PHP_EOL .
          '</dd>' . PHP_EOL .
          '<dd>' . PHP_EOL .
            '<a href="#illustrations" class="filter" data-filter=".illustrations">Illustrations</a>' . PHP_EOL .
          '</dd>' . PHP_EOL .
          '<dd>' . PHP_EOL .
            '<a href="#infographics" class="filter" data-filter=".infographics">Infographics</a>' . PHP_EOL .
          '</dd>' . PHP_EOL .
        '</dl>' . PHP_EOL .
        PHP_EOL .
        '<!-- PAGINATION -->' . PHP_EOL .
        '<ul class="pagination"></ul>' . PHP_EOL .
        PHP_EOL .
        '<div id="item-container" class="gallery fancybox">' . PHP_EOL;

    for ( $i = 0; $num_portfolio_items = count( $this->portfolio_items ), $i < $num_portfolio_items; $i++ ) {
      $this->portfolioItem( $this->portfolio_items[$i]['name'], $this->portfolio_items[$i]['src'], $this->portfolio_items[$i]['alt'], $this->portfolio_items[$i]['category'] );
    }

    echo '</div><!-- #item-container -->' . PHP_EOL;

  }
}