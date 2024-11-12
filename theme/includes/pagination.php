<?php
    // This is Agent Post type Pagination
function load_paginated_agents() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;

    // Arguments for WP_Query
    $args = [
        'post_type' => 'blogs',
        'posts_per_page' => 9, // Number of posts per page
        'paged' => $paged,
    ];

    // Get the posts based on the updated query
    $deal_posts = get_posts($args);

    // Now, let's create a new query to get the total number of posts after applying the search filter
    $total_query_args = [
        'post_type' => 'blogs',
        'posts_per_page' => -1, // Get all posts matching the search query
    ];
    $total_posts_query = new WP_Query($total_query_args);
    $total_posts = $total_posts_query->found_posts; // Get the total posts found

    $output = '';
    $count = ($paged - 1) * 7 + 1; // Adjust count based on the page

    foreach ($deal_posts as $deal) {
        $post_id = $deal->ID;
        $featured_image = get_the_post_thumbnail($post_id, 'full', ['class' => 'featured-image']);
        $post_title = $deal->post_title;
        $post_link = get_permalink($post_id);

        // Construct the output HTML for each agent
        var_dump($deal);
        // $output .= '
            
        // ';
        $count++;
    }

    // Calculate total pages based on the filtered results
    $total_pages = ceil($total_posts / 7); // Assuming 7 posts per page

    // Generate pagination
    $pagination_output = '<div class="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) {
        $pagination_output .= '<a href="#" class="page-number ' . ($i === $paged ? 'active' : '') . '" data-page="' . $i . '" id="page-' . $i . '">' . $i . '</a>';
    }
    $pagination_output .= '</div>';

    // Return both the agents and pagination as JSON
    echo json_encode([
        'html' => $output,
        'pagination' => $pagination_output,
    ]);

    wp_die();
}

add_action('wp_ajax_load_paginated_agents', 'load_paginated_agents');
add_action('wp_ajax_nopriv_load_paginated_agents', 'load_paginated_agents');
?>