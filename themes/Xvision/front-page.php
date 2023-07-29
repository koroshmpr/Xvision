<?php /* Template Name: Home */
/**
 * Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Macan
 */

get_header();

get_template_part('template-parts/homePage/hero');
//form
get_template_part('template-parts/homePage/form');
//form
get_template_part('template-parts/homePage/products');
// product row
get_template_part('template-parts/homePage/product-row');

get_footer();