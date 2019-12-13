<?php //https://codex.buddypress.org/themes/theme-compatibility-1-7/template-hierarchy/

get_header(); 


while( have_posts() ){
    the_post();

    the_content();
}


get_footer();