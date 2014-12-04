        <!-- SUBFOOTER -->
    <div class="subfooter">
      <div class="widget-container">
        <div class="widget contact-info">
          <h3>Contact Info</h3>
          <p>
            <strong>Tel: </strong> 00 353 (0) 87 9432 903<br />
            <strong>Email: </strong>doczykdesign@gmail.com
          </p>
        </div><!-- .widget.contact-info -->
        <div class="widget fancybox">
          <h3>Featured Works</h3>
          <a href="http://doczykdesign.dev/assets/img/portfolio/1.jpg"><?php $html->img( 'img/portfolio/1-thumb.jpg', 'CBB Logo', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/2.jpg"><?php $html->img( 'img/portfolio/2-thumb.jpg', 'Stem Cell Illustration', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/3.jpg"><?php $html->img( 'img/portfolio/3-thumb.jpg', 'Grosvenor Interiors Logo', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/4.jpg"><?php $html->img( 'img/portfolio/4-thumb.jpg', 'Human Brain Illustration', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/5.jpg"><?php $html->img( 'img/portfolio/5-thumb.jpg', 'Knee Joint Illustration', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/6.jpg"><?php $html->img( 'img/portfolio/6-thumb.jpg', 'Margallery Logo', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/7.jpg"><?php $html->img( 'img/portfolio/7-thumb.jpg', 'NeuroGel Logo', ['class' => 'thumbs'] ); ?></a>
          <a href="http://doczykdesign.dev/assets/img/portfolio/8.jpg"><?php $html->img( 'img/portfolio/8-thumb.jpg', 'Rat Brain Illustration', ['class' => 'thumbs'] ); ?></a>
        </div><!-- .widget fancybox -->
        <div class="widget">
          <h3>Latest News</h3>
          <strong class="post-title"><a href="http://pubs.acs.org/action/showLargeCover?jcode=acncdm&vol=4&issue=4&" title="Read Article">ACS Chemical Neuroscience Cover</a></strong>
          <em class="post-meta"><span>Posted on</span> April 30th, 2013</em>
          <p class="post-content">Here is the cover of ACS Chemical Neuroscience where I had an opportunity to participate with my image</p>
        </div><!-- .widget -->
        <div class="widget last">
          <h3>Sitemap</h3>
          <ol class="sitemap">
            <li><a href="<?php $url->home_uri(); ?>">Home</a></li>
            <li><a href="<?php $url->page( 'about' ); ?>">About Me</a></li>
            <li><a href="<?php $url->page( 'portfolio' ); ?>">Portfolio</a></li>
            <li><a href="<?php $url->page( 'news' ); ?>">News</a></li>
            <li><a href="<?php $url->page( 'contact' ); ?>">Contact Me</a></li>
          </ol>
        </div><!-- .widget.last -->
      </div><!-- widget.container -->
    </div><!-- .subfooter.container   -->

    <!-- FOOTER -->
    <footer>
      <section>
        <p>
          Copyright <?php echo date('Y'); ?><span class="hidden"> -</span> Doczyk Design
        </p>
      </section>
    </footer>

    <!-- SCRIPTS -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
      (function ($) {

        // Detecting IE
<?php  if ( $url->is_home() ) : ?>
        var oldIE;
        if ($('html').is('.ie6, .ie7, .ie8, .ie9')) {
            oldIE = true;
        }
<?php else : ?>
        // Detecting IE
        if ($('html').is('.ie6, .ie7, .ie8, .ie9')) {
          // Content
        }
        else {
<?php endif; ?>

<?php if ( $url->is_home() ) : ?>
        if (oldIE) {
            // Here's your JS for IE..
        window.f = new flux.slider('#slider', {
          pagination: false,
          autoplay: true,
          delay: 6000,
          controls:true
          });

        } else {
          // ..And here's the full-fat code for everyone else
          window.f = new flux.slider('#slider', {
            pagination: false,
            autoplay: true,
            controls:false,
            delay: 6000
            });
          window.f.next('bars');
<?php endif; ?>

          Cufon.replace('footer', {
            fontFamily: 'Caviar Dreams', hover: true
          });
        }

      }(jQuery));
    </script>
  </body>
</html>