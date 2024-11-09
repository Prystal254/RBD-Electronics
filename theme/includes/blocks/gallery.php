<section class="gallery">
    <div class="gallery-container">
        <div class="gallery-wrap">
            <?php foreach($block['gallery_images'] as $gallery){ ?>
                <div class="single">
                    <a href="<?php echo $gallery['image']; ?>">
                        <img src="<?php echo $gallery['image']; ?>" alt="">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
    $('.gallery-wrap').slick({
        infinite        : true,
        slidesToShow    : 3,
        slidesToScroll  : 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.gallery-wrap').slickLightbox({
        itemSelector        : 'a',
        navigateByKeyboard  : true
    });
</script>