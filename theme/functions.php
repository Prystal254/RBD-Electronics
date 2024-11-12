<?php 

define('INCLUDES_DIR', get_template_directory() . '/includes/');

include_once INCLUDES_DIR . 'general-wp-setup.php';
include_once INCLUDES_DIR . 'enqueue.php';
include_once INCLUDES_DIR . 'acf-sync.php';
include_once INCLUDES_DIR . 'getBlocks.php';
include_once INCLUDES_DIR . 'style-editor.php';
include_once INCLUDES_DIR . 'required-plugins.php';
// include_once INCLUDES_DIR . 'pagination.php';


// Hook for logged-in users
add_action('wp_ajax_load_more_posts', 'load_more_posts');

// Hook for non-logged-in users
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

// Function to load more posts
function load_more_posts() {
    // Get the page number from the AJAX request
    $paged = isset($_GET['page']) ? $_GET['page'] : 1;

    // The custom query for the blogs
    $args = array(
        'post_type' => 'blogs',
        'posts_per_page' => 9,  // Limit to 9 posts per page
        'paged' => $paged,      // Pagination handling
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="custom-post">
                <div class="post-image">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="post-content">
                    <h2 class="custom-post-title"><?php the_title(); ?></h2>
                    <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a>
                </div>
            </div>
            <?php
        endwhile;

        // Generate the pagination links
        $pagination = paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => 'Prev',
            'next_text' => 'Next',
            'type' => 'list',
            'end_size' => 1,
            'mid_size' => 2
        ));

        // Return the updated posts and pagination
        echo '<div class="pagination-container">' . $pagination . '</div>';
    endif;

    // Reset post data
    wp_reset_postdata();

    // End the AJAX request
    die();
}
