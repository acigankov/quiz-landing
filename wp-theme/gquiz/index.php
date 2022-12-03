<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gquiz
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php include_once "inc/_section-gallery.php" ?>
        <?php include_once "inc/_section-theming.php" ?>
        <?php include_once "inc/_section-when.php" ?>
        <?php include_once "inc/_section-testimonials.php" ?>
        <?php include_once "inc/_section-structure.php" ?>
        <?php include_once "inc/_section-pricing.php" ?>
        <?php include_once "inc/_section-callback.php" ?>
        <?php include_once "inc/_section-mechanic.php" ?>
        <?php include_once "inc/_section-example.php" ?>
        <?php include_once "inc/_section-team.php" ?>
	</main><!-- #main -->

<?php

get_footer();
