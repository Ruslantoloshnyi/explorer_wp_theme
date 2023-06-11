<?php
/**
 * Template Name: front_page
 * Template post type: page*/
?>

<?php get_header(); ?>

<?php

if (is_front_page()) {

    get_template_part('./template-parts/front-page-templates/front-content');
    get_template_part('./template-parts/front-page-templates/front-stories');
   
}

   


?>

<?php get_footer(); ?>