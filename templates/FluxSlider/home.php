<?php
/*
 * To create a new slider for another page simply:
 *   1. copy and rename this file
 *   2. change the $slider->slides array. 
 *   3. Then include/require 'FluxSlider/{page}.php' in
 *      whichever page you want the slider to appear
 */
$slider = new FluxSlider( new HTML );

$slider->slides = array(
  array(
    'src' => 'img/portfolio/16.jpg',
    'alt' => 'Singoderm (EPIMEND) Logo'
  ),
  array(
    'src' => 'img/portfolio/15.jpg',
    'alt' => 'Biomaterials Research Charitable Trust Logo'
  ),
  array(
    'src' => 'img/portfolio/14.jpg',
    'alt' => 'Healthy Spine Illustration'
  ),
  array(
    'src' => 'img/portfolio/13.jpg',
    'alt' => 'Disc Pain Logo'
  ),
  array(
    'src' => 'img/portfolio/11.jpg',
    'alt' => 'Achilles Heel Illustration'
  ),
  array(
    'src' => 'img/portfolio/10.jpg',
    'alt' => 'Via Travel Logo'
  ),
  array(
    'src' => 'img/portfolio/9.jpg',
    'alt' => 'Skin Section Illustration'
  ),
  array(
    'src' => 'img/portfolio/8.jpg',
    'alt' => 'Rat Brain Illustration'
  ),
  array(
    'src' => 'img/portfolio/7.jpg',
    'alt' => 'Neurogel Logo'
  ),
  array(
    'src' => 'img/portfolio/6.jpg',
    'alt' => 'Margallery Logo'
  ),
  array(
    'src' => 'img/portfolio/5.jpg',
    'alt' => 'Knee Joint Illustration'
  ),
  array(
    'src' => 'img/portfolio/4.jpg',
    'alt' => 'Human Brain Illustration'
  ),
  array(
    'src' => 'img/portfolio/3.jpg',
    'alt' => 'Grosvenor Interiors Logo'
  ),
  array(
    'src' => 'img/portfolio/2.jpg',
    'alt' => 'Stem Cell Illustration'
  ),
  array(
    'src' => 'img/portfolio/1.jpg',
    'alt' => 'CBB Logo'
  ),
);

// Display the slider
$slider->slider();