<section class="title-only-banner" style="background-image: url('<?php echo '/wp-content/uploads/2024/11/Group-523-4.png'; ?>')">
    <div class="tob-container">
        <div class="title">
            <h2>Blogs</h2>
        </div>
    </div>
</section>

<div class="all-blogs">
    <div class="ab-container">
        <h4 class="subtitle">Our News Updates</h4>
        <h2 class="title">Latest Articles & News from the Blogs</h2>

        <?php
            // Pagination setup
            $posts_per_page = 9; // Number of posts per page
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number

            $args = array(
                'post_type' => 'blogs', // Custom post type
                'posts_per_page' => $posts_per_page, // Limit to 9 posts
                'order' => 'DESC', // Order posts by newest first
                'paged' => $paged // Set the page number for pagination
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                echo '<div class="custom-posts-container">';
                while ( $query->have_posts() ) : $query->the_post();
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
                echo '</div>';

                // Pagination
                echo '<div class="pagination-container">';
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => 'Prev',
                    'next_text' => 'Next',
                    'type' => 'list',
                    'end_size' => 1,
                    'mid_size' => 2
                ));
                echo '</div>';
            else :
                echo '<p>No posts found.</p>';
            endif;

            wp_reset_postdata();
        ?>
    </div>
</div>


<script>
   jQuery(function($) {
    // Function to load more posts via AJAX
        $(document).on('click', '.pagination-container a', function(e) {
            e.preventDefault();

            var link = $(this).attr('href'); // Get the URL of the clicked pagination link
            var page = $(this).attr('href').split('paged=')[1]; // Get the page number

            // Perform the AJAX request with the correct URL
            $.ajax({
                url: link, // Pass the pagination URL
                type: 'GET',
                success: function(response) {
                    // Update the posts container with new posts
                    var newPosts = $(response).find('.custom-posts-container').html();
                    $('.custom-posts-container').html(newPosts);

                    // Update the pagination links
                    var newPagination = $(response).find('.pagination-container').html();
                    $('.pagination-container').html(newPagination);
                }
            });
        });
    });


</script>