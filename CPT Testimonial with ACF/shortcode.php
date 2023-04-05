//Testimonials
add_shortcode( 'testimonials', 'shortcode_testimonials');
function shortcode_testimonials( $atts ) {

    $args = array(
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'post_per_page' => -1,
        'order' => 'ASC'
    );
    $loop = new WP_Query($args);
    if ( $loop -> have_posts() ) {
        while ( $loop -> have_posts() ) {
            $loop->the_post();

            $name = get_field('author_name');
            $occ = get_field('author_occupation');
            $business = get_field('author_business');
            $logo = get_field('author_logo');
            $testimonial = get_field('author_testimonial');
            echo '<p>'.$name. ' + ' .$occ. ' + ' .$business. ' + img->id=' .$logo. ' + ' .$testimonial.'</p>';
            
            echo '<hr/>';
        }
    }
    wp_reset_query();
    
}
