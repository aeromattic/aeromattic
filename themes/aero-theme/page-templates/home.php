<?php
/**
 * Template Name: Home
 *
 * Used for showing home page in site
 *
 * @package Aero-theme
 */

get_header();

// Home Slide.
get_template_part( 'template-parts/home/home', 'slider' );

get_footer();
