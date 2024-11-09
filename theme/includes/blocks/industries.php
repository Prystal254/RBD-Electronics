<section class="industries">
    <div class="industries-container">
        <div class="subtitle">
            <h4><?php echo $block['subtitle']; ?></h4>
        </div>
        <div class="title">
            <h2><?php echo $block['title']; ?></h2>
        </div>
        <div class="subtext">
            <p><?php echo $block['subtext']; ?></p>
        </div>
        <div class="industry-slider">
            <div class="industry-slider-wrapper">
                <?php foreach($block['industry'] as $industry){ ?>
                    <div class="industry-single">
                        <div class="i-logo">
                            <img src="<?php echo $industry['logo']; ?>" alt="">
                        </div>
                        <div class="i-title">
                            <h3><?php echo $industry['title']; ?></h3>
                        </div>
                        <div class="i-subtext">
                            <p><?php echo $industry['subtext']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<script>
    $('.industry-slider-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        autoplaySpeed: 2000,
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