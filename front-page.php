<?php /* Template Name: 1-HOME */
get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/home.css">
<!--  BANNERS -->
<?php while ( have_posts() ) : the_post(); //INÍCIO DO LOOP ?>    
<?php the_content(); ?>
<?php endwhile; //FINAL DO LOOP ?>
<div class="clearfix"></div>
<!-- chamadas -->
<?php get_template_part ('inc/home/chamadas') ?>
<div class="clearfix"></div>
<!-- especialidades -->
<?php get_template_part ('inc/home/especialidades') ?>
<div class="clearfix"></div>
<!-- /.conteudos -->
<?php get_footer(); ?>