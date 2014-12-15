<?php require_once( 'templates/header.php' ); ?>

    <!-- MAIN CONTENT -->
    <article class="portfolio-container row">

      <?php $html->img( 'img/portfolio-header.png', 'Portfolio Header Image', array( 'class' => 'portfolio-img show-for-small' ) );  ?>

      <!-- GALLERY -->
      <div style="padding-bottom:20px" class="gallery-container columns small-12 large-8">

<?php $plugin->insert( 'MixItUp', 'portfolio' ); ?>

      </div><!-- .gallery-container -->

      <!-- SIDEBAR -->
      <aside class="portfolio-sidebar columns small-12 large-4 justify pad-right">
        <?php $html->img( 'img/portfolio-header.png', 'Portfolio Header Image', array( 'class' => 'portfolio-img hide-for-small' ) );  ?>

        <p<?php echo ( $plugin->isActive( 'MixItUp' ) ) ? ' class="hide"' : ''; ?>>
          If you got here you may want to check my portfolio and see if you'll find something interesting.
          You can choose in my artworks, logos, business cards, scientific illustrations, website layouts, flyers and info graphics.
          Enjoy!
        </p>
      </aside>
      
    </article>

<?php require_once( 'templates/footer.php' ); ?>