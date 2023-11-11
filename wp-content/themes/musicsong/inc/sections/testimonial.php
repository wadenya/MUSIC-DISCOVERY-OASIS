<?php
/**
 * Testimonial section
 *
 * This is the template for the content of testimonial section
 *
 * @package Theme Palace
 * @subpackage Musicsong
 * @since Musicsong 1.0.0
 */
if ( ! function_exists( 'musicsong_add_testimonial_section' ) ) :
    /**
    * Add testimonial section
    *
    *@since Musicsong 1.0.0
    */
    function musicsong_add_testimonial_section() {
    	$options = musicsong_get_theme_options();
        // Check if testimonial is enabled on frontpage
        $testimonial_enable = apply_filters( 'musicsong_section_status', true, 'testimonial_section_enable' );

        if ( true !== $testimonial_enable ) {
            return false;
        }
        // Get testimonial section details
        $section_details = array();
        $section_details = apply_filters( 'musicsong_filter_testimonial_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render testimonial section now.
        musicsong_render_testimonial_section( $section_details );
    }
endif;

if ( ! function_exists( 'musicsong_get_testimonial_section_details' ) ) :
    /**
    * testimonial section details.
    *
    * @since Musicsong 1.0.0
    * @param array $input testimonial section details.
    */
    function musicsong_get_testimonial_section_details( $input ) {
        $options = musicsong_get_theme_options();

        $content = array();
        $page_ids = array();
        $position = array();

        for ( $i = 1; $i <= 3; $i++ ) {
            if ( ! empty( $options['testimonial_content_page_' . $i] ) ) :
                $page_ids[] = $options['testimonial_content_page_' . $i];
            endif;
        }
        
        $args = array(
            'post_type'         => 'page',
            'post__in'          => ( array ) $page_ids,
            'posts_per_page'    => 3,
            'orderby'           => 'post__in',
            );                    

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = musicsong_trim_content( 40 );
                $page_post['image']  	= has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'thumbnail' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// testimonial section content details.
add_filter( 'musicsong_filter_testimonial_section_details', 'musicsong_get_testimonial_section_details' );


if ( ! function_exists( 'musicsong_render_testimonial_section' ) ) :
  /**
   * Start testimonial section
   *
   * @return string testimonial content
   * @since Musicsong 1.0.0
   *
   */
   function musicsong_render_testimonial_section( $content_details = array() ) {
        $options = musicsong_get_theme_options();
        
        if ( empty( $content_details ) ) {
            return;
        } ?>

        <div id="client-testimonial" class="relative page-section">
            <div class="wrapper">
                <?php if ( ! empty( $options['testimonial_title'] ) ) : ?>
                    <div class="section-header">
                        <h2 class="section-title"><?php echo esc_html( $options['testimonial_title'] ); ?></h2>
                    </div><!-- .section-header -->
                <?php endif; ?>

                <div class="client-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 1500, "dots": true, "arrows":false, "autoplay": true, "draggable": true, "fade": false }'>
                    <?php foreach ( $content_details as $content ) : ?>
                        <article>
                            <div class="entry-container">
                                <?php if ( ! empty( $content['excerpt'] ) ) : ?>
                                    <div class="entry-content">
                                        <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                                    </div><!-- .entry-content -->
                                <?php endif; ?>

                                <div class="header-wrapper">
                                    <?php if ( ! empty( $content['image'] ) ) : ?>
                                        <div class="featured-image">
                                            <img src="<?php echo esc_url( $content['image'] ) ?>" alt="<?php echo esc_attr( $content['title'] ); ?>">
                                        </div><!-- .featured-image -->
                                    <?php endif; ?>

                                    <header class="entry-header">
                                        <?php if ( ! empty( $content['title'] ) ) : ?>
                                            <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                        <?php endif; ?>
                                    </header>
                                </div><!-- .header-wrapper -->
                            </div><!-- .entry-container -->
                        </article>
                    <?php endforeach; ?>
                </div><!-- .client-slider -->
            </div><!-- .wrapper -->
        </div><!-- #client-testimonial -->

    <?php }
endif;