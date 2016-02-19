<?php

$args = array(
    'post_type' => 'testimonials',
    'orderby' => 'rand',
    'posts_per_page' => 1,
    );

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<aside role="complimentary" class="testimonial-widget">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<blockquote>' . get_the_excerpt() . '</blockquote>';
	}
	echo '<a class="btn" href="#">Read More</a>';
	echo '</aside>';
}
/* Restore original Post Data */
wp_reset_postdata();

?>
    
