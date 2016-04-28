<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ( have_posts() ): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php
						global $wp_query;
						$total_results = $wp_query->found_posts;
						echo "<h2>" . $total_results . " resultat för <span class='search-result'>'" . get_search_query() . "'</span></h2>";	
						?>
					</div>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="panel panel-search">
						<div class="panel-body">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo get_the_content();?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>No result for '<?php echo get_search_query(); ?>'</h2>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div><!--ROW-->
</div><!--CONTAINER-->
<?php get_footer(); ?>