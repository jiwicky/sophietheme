<?php
/*
Template Name: Delete
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<?php
// Get 300 custom post types pages, set the number higher if is not slow.

$mycustomposts = get_posts( array( 'post_type' => 'movies', 'numberposts' => 300));
    echo '<pre>';
    print_r($mycustomposts);
    echo '</pre>';
   foreach( $mycustomposts as $mypost ) {
     // Delete's each post.
    wp_delete_post( $mypost->ID, true);
    // Set to False if you want to send them to Trash.
   }
   echo '<h1 style=:"color:red;"> DELETED! DELETED! DELETED! DELETED! </h1>';

   ?>