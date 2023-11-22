<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_title();
        the_content();
        next_post_link();
        previous_post_link();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

// get_search_form();
// get_sidebar();
// get_footer();
?>
