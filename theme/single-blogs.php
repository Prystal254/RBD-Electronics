<?php 
        get_header();
        $post_title = $post->post_title;
        $featured_image = get_the_post_thumbnail_url($post->ID); 
        $content = get_the_content($post->ID);
?>


<section class="title-only-banner" style="background-image: url('<?php echo '/wp-content/uploads/2024/11/Group-523-4.png'; ?>')">
    <div class="tob-container">
        <div class="title">
            <h2><?php echo $post_title; ?></h2>
        </div>
    </div>
</section>


<section class="single-blog">
    <div class="sb-container">
        <div class="image-col">
            <img src="<?php echo $featured_image; ?>" alt="">
        </div>
        <div class="content-col">
            <div class="content-wrap">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>


<?php
    get_footer();
?>