<?php

  require_once( 'app/build.php' );

  $development = true;

  if ( $url->is_page( 'portfolio' )  && in_array( 'MixItUp', $active_plugins ) ) {
    // Set effect
    $effect = 10;

    // Options include 'view-first', 'view-fourth',
    // 'view-fifth', 'view-sixth', 'view-seventh', 'view-tenth'
    $view = 'view-tenth';
  }

?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo $site['lang']; ?>" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $site['lang']; ?>" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $site['lang']; ?>" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $site['lang']; ?>" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $site['lang']; ?>" class=""> <!--<![endif]-->
  <head>

    <!-- SITE INFO -->
    <meta charset="<?php echo $site['charset']; ?>">
    <title><?php $meta->title(); ?></title>

    <!-- SEO & META TAGS -->
    <meta name="mix viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $site['description']; ?>">
    <meta name="author" content="<?php echo $site['author']; ?>">

    <!-- STYLES -->
<?php if ( $url->is_home() && in_array( 'FluxSlider', $active_plugins ) ) : ?>    
    <!-- Style for slider placed first to allow screen.css to override certain styles -->
    <?php $html->css( 'css/flux.css' ); ?>
<?php endif; ?>

    <!-- Main -->
    <?php $html->css( 'css/style.min.css' ); ?>

<?php if ( $url->is_page( 'portfolio' ) && in_array( 'MixItUp', $active_plugins ) ) : ?>
    <!-- STYLES FOR EFFECTS -->
    <?php $html->css( "css/portfolio/effect{$effect}.css" ); ?>
<?php endif; ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php assets_url('/'); ?>img/favicon.jpg">

    <!-- SCRIPTS -->
<?php if ( $development ) : ?>
    <?php $html->js( 'js/jquery-1.9.0.min.js' ); ?>
    <?php $html->js( 'js/jquery.migrate.js' ); ?>
<?php else : ?>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<?php endif; ?>
    
    <?php $html->js( 'js/cufon-yui.js' ); ?>
    <?php $html->js( 'js/caviar-dreams.font.js' ); ?>
    <?php $html->js( 'js/jquery.fancybox.js' ); ?>
    <?php $html->js( 'js/jquery.easing-1.3.pack.js' ); ?>

<?php if ( $url->is_home() && in_array( 'FluxSlider', $active_plugins ) ) : ?>
    <!-- SCRIPTS FOR SLIDER -->
    <?php $html->js( 'js/flux.js' ); ?>
<?php endif; ?>

    <!-- SCRIPTS FOR MENU -->
    <?php $html->js( 'js/responsivemobilemenu.js' ); ?>

<?php if ( $url->is_page( 'portfolio' ) && in_array( 'MixItUp', $active_plugins ) ) : ?>
    <!-- SCRIPT FOR FILTER -->
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    
    <!-- SCRIPT FOR PAGINATION -->
    <?php $html->js( 'js/jquery.mixitup.pagination.min.js' ); ?>
<?php endif; ?>

    <!-- FANCYBOX -->
    <script>
      $(document).ready(function() {
        $('.fancybox a').fancybox({
          overlayColor: '#000',
          overlayOpacity: .6,
          transitionIn: 'elastic',
          transitionOut: 'elastic',
          easingIn: 'easeOutBack',
          easingOut: 'easeOutSine',
          speedIn: 750,
          speedOut: 500,
          titlePosition: 'outside',
          cyclic: false
        });

<?php if ( $url->is_page( 'portfolio' ) && in_array( 'MixItUp', $active_plugins ) ) : ?>        
        // Lazy load items to stop premature loading
        $(".view").fadeIn("slow");
        $(".portfolio-sidebar p").fadeIn("slow");
        
        // MixItUp container
        $("#item-container").mixItUp({
          pagination: {
            limit: 6,
            prevButtonHTML: '&lt;',
            nextButtonHTML: '&gt;'
          },
          selectors: {
            pagersWrapper: '.pagination'
          },
          load: {
            sort: 'default:desc'
          }
        });
        
        // On click of a link in the filter...
        $("#filter a").click(function() {
          
          // Set class of clicked item to "active"
          $(this).parent().addClass("active")
          .siblings("dd").removeClass("active");
          
          // Stop default event
          return false;
        });
<?php endif; ?>
        
      }); // end ready
    </script>

    <style>
      .social-icons h4 {
        transition: 200ms all ease-out 0ms;
      }
<?php if ( $url->is_page( 'portfolio' ) && in_array( 'MixItUp', $active_plugins ) ) : ?>
      ul.pagination {
        margin-left: 1em;
      }

      ul.pagination li span {
        background: none repeat scroll 0 0 hsla(0, 0%, 0%, 0);
        border-radius: 1rem;
        color: hsl(0, 0%, 60%);
        cursor: pointer;
        display: block;
        font-size: 1em;
        font-weight: normal;
        line-height: inherit;
        padding: 0.2rem 0.75rem;
        transition: background-color 300ms ease-out 0s;
      }

      ul.pagination li:hover span,
      ul.pagination li span:focus {
        background: none repeat scroll 0 0 hsl(0, 0%, 90%);
      }

      ul.pagination li.active span {
        background: none repeat scroll 0 0 hsl(108, 41%, 46%);
        color: hsl(0, 0%, 100%);
        cursor: default;
        font-weight: bold;
      }

      ul.pagination li.active span:hover,
      ul.pagination li.active span:focus {
        background: none repeat scroll 0 0 hsl(112, 37%, 41%);
      }

      ul.pagination li.disabled span {
        color: hsl(0, 0%, 75%);
        cursor: default;
      }

      ul.pagination li.disabled:hover span,
      ul.pagination li.disabled span:focus {
        background: none repeat scroll 0 0 hsla(0, 0%, 0%, 0);
      }
<?php endif; ?>
    </style>

  </head>

  <body<?php echo ( $url->is_page( 'about' ) ) ? ' class="about"' : ''; ?>>
    <!-- HEADER -->
    <header>
<?php /*
      <section id="logo">
        <?php $html->img('img/banner-texture.png', 'Banner Texture'); ?>
      </section><!-- #logo -->

      <section id="doczyk">
        <div>
          <?php $html->img( 'img/doczyk.png', 'Doczyk' ); ?>
        </div>
      </section><!-- #doczyk -->
*/ ?>

      <section id="design">
        <div>
          <?php $html->img( 'img/doczyk-design-logo.png', 'Doczyk Design Logo' ); ?>
        </div>
      </section><!-- #design -->
    </header>

    <!-- NAV -->
    <nav id="main-nav">
      <div  class="rmm">
        <ul id="nav">
          <li<?php echo ( $url->is_home() ) ? ' class="active"' : ''; ?>>
            <a href="<?php $url->home_uri(); ?>">home</a>
          </li>
          <li<?php echo ( $url->is_page( 'about' ) ) ? ' class="active"' : ''; ?>>
            <a href="<?php $url->page( 'about' ); ?>">about me</a>
          </li>
          <li<?php echo ( $url->is_page( 'portfolio' ) ) ? ' class="active"' : ''; ?>>
            <a href="<?php $url->page( 'portfolio' ); ?>">portfolio</a>
          </li>
          <li<?php echo ( $url->is_page( 'news' ) ) ? ' class="active"' : ''; ?>>
            <a href="<?php $url->page( 'news' ); ?>">news</a>
          </li>
          <li<?php echo ( $url->is_page( 'contact' ) ) ? ' class="active"' : ''; ?>>
            <a href="<?php $url->page( 'contact' ); ?>">contact me</a>
          </li>
        </ul>
      </div><!-- .rmm -->
      <ul class="social-icons home">
        <li id="facebook">
          <a href="https://www.facebook.com/pages/Doczyk-Design/461539000578813" target="_blank"><h4></h4></a>
        </li>
        <li id="twitter">
          <a href="https://twitter.com/DoczykDesign" target="_blank"><h4></h4></a>
        </li>
        <li id="linkedin">
          <a href="http://www.linkedin.com/profile/view?id=184364088&trk=tab_pro" target="_blank"><h4></h4></a>
        </li>
      </ul><!-- .social-icons -->
    </nav><!-- #main-nav -->
