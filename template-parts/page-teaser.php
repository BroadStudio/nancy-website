<?php

    function display_page_teaser($field_slug) {
        global $post;
        
        $post_object = get_field($field_slug);
    
        if( $post_object ): 
	        $post = $post_object;
	        setup_postdata( $post ); 
	        $image = get_field('image'); ?>
            <div class="page-teaser">
                <?php if( !empty($image) ): ?>
	                <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt=" " />
                <?php endif; ?>
    	        <h2><?php the_title(); ?></h2></a>
    	        <p><?php the_field('teaser_description'); ?></p>
            </div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif;
    }

display_page_teaser('first_page_teaser');
display_page_teaser('second_page_teaser');
display_page_teaser('third_page_teaser');


?>