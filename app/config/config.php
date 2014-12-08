<?php

$debug_mode = true;  // Turn this to true to enable php errors on production servers

/*
 * Used to create fill in hte <title> tag as well as other <meta> tags.
 */
$site = array(
  'url'         => '', // If urls are being incorrectly generated add the full url with trailing slash here ( 'http://example.com/' )
  'title'       => 'Doczyk Design',
  'seotitle'    => 'Graphic Designers Galway Ireland',
  'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions',
  'author'      => 'Maciek Doczyk', // Used in <meta author="..."> tag
  'lang'        => 'en',            // Used on the <html lang="..."> tag
  'charset'     => 'utf-8',         // Used on <meta charset="...">
  'assets'      => 'assets',        // Used in the HTML::css() and HTML::js() methods
  'searchable'  => true             // Turn this to true to allow search engines to crawl and index pages
);

/*
 * TODO: Use for creating meta descriptions on each page through Meta class
 */
$page_meta = array(
  'index' => array(
    'name'        => 'Home',
    'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions'
  ),
  'about' => array(
    'name'        => 'About',
    'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions'
  ),
  'work'  => array(
    'name'        => 'Portfolio',
    'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions'
  ),
  'news' => array(
    'name'        => 'News',
    'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions'
  ),
  'contact' => array(
    'name'        => 'Contact',
    'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions'
  ),
  '404' => array(
    'name'        => '404',
    'description' => 'Doczyk Design, Graphic Design, Illustration and Corporate Branding Solutions'
  )
);

/*
 * To activate a plugin simply add it's name to this array.
 * If a plugin is not within this array it will not be loaded.
 */
$active_plugins = array( 'FluxSlider', 'MixItUp' );