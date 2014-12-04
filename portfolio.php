<?php require_once( 'templates/header.php' ); ?>

    <!-- MAIN CONTENT -->
    <article class="portfolio-container row">
      
      <img src="http://doczykdesign.dev/assets/img/portfolio-header.png" alt="Portfolio Header Image" class="portfolio-img show-for-small">

      <!-- GALLERY -->
      <div style="padding-bottom:20px" class="gallery-container columns small-12 large-8">

<?php
if ( in_array( 'MixItUp', $active_plugins ) ) {
  require_once( 'templates/MixItUp/portfolio.php' );
}
?>

      </div><!-- .gallery-container -->

      <!-- SIDEBAR -->
      <aside class="portfolio-sidebar columns small-12 large-4 justify pad-right">
        <img src="http://doczykdesign.dev/assets/img/portfolio-header.png" alt="Portfolio Header Image" class="portfolio-img hide-for-small">
        <p<?php echo ( in_array( 'MixItUp', $active_plugins ) ) ? ' class="hide"' : ''; ?>>
          If you got here you may want to check my portfolio and see if you'll find something interesting.
          You can choose in my artworks, logos, business cards, scientific illustrations, website layouts, flyers and info graphics.
          Enjoy!
        </p>
    </aside>
      
    </article>

<?php require_once( 'templates/footer.php' ); ?>