<?php
/*
Template Name: Home Page Template
*/
?>
<div> This is the Home Page Template </div>

<div class="col-md-6">This is the main column. This is the main column.This is the main column.This is the main column.This is the main column.This is the main column.This is the main column.This is the main column.This is the main column.This is the main column.This is the main column.</div>

<div class="col-md-2">
	<?php get_template_part('templates/column2'); ?>
</div>

<div class="col-md-4">
	<?php get_template_part('templates/column3'); ?>
</div>


<!--<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>


<?php endwhile; ?>-->