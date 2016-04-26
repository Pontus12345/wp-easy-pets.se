<?php 

/**
*@desc A page. See single.php is for a blog post layout.
*/

get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); 
?> 
    <div id="post-<?php the_ID(); ?>"  <?php post_class('postWrapper'); ?>>  
      <div class="post"><?php the_content(); ?></div>
    </div>				

<?php endwhile; else :  
	include( get_stylesheet_directory() . '/404.php');
?>		
<?php endif;
get_footer(); ?>