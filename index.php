<?php get_header(); ?>

	<main id="content" role="main">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <?php if (!is_front_page()) { ?>
	        <h2><?php the_title(); ?></h2>
	    <?php } ?>
	    <?php the_content(); ?>
	    <?php endwhile; endif; ?>
	    
	    <?php if (is_front_page())
	        include 'template-parts/page-teaser.php'; ?>
	        
	</main>
	
	<?php include 'template-parts/testimonial-widget.php'; ?>

<?php get_footer(); ?>