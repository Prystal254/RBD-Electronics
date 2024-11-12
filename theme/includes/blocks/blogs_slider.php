<div class="blog-slider">
    <div class="bs-container">
        <h4>Our News Updates</h4>
        <h2>Latest Articles & News from the Blogs</h2>
        <div class="bs-wrapper">
            <?php foreach($block['blog_slides'] as $slide){ 
                    // Assuming $slide is an object that contains post data
                    $post_object = $slide['slide'];  // Use $slide directly
                    $post_title = $post_object->post_title;
                    $featured_image = get_the_post_thumbnail_url($post_object->ID); 
                    $post_url = get_permalink($post_object->ID);
                    $post_excerpt = get_the_excerpt($post_object->ID); // Added to retrieve the excerpt
                ?>
                <div class="bs-single-slider">
                    <a href="<?php echo $post_url; ?>">
                        <div class="bs-ss-wrapper">
                            <div class="image-container">
                                <img src="<?php echo $featured_image; ?>" alt="">
                            </div>
                            <div class="title">
                                <p><?php echo $post_title; ?></p>
                            </div>
                            <div class="subtext">
                                <span><?php echo $post_excerpt; ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="button">
            <a href="<?php echo $block['button']['url']; ?>"><?php echo $block['button']['title']; ?></a>
        </div>
    </div>
</div>

<script>
    $('.bs-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        dots: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>