<section class="welcome">
    <div class="welcome-container">
        <div class="text-col">
            <div class="subtitle">
                <h4><?php echo $block['subtitle']; ?></h4>
            </div>
            <div class="title">
                <h2><?php echo $block['title']; ?></h2>
            </div>
            <div class="subtext">
                <p><?php echo $block['subtext']; ?></p>
            </div>
            <div class="award-images">
                <?php foreach($block['award_images'] as $img){ ?>
                    <div class="img-wrap">
                        <img src="<?php echo $img['image']; ?>" alt="">
                    </div>
                <?php } ?>
            </div>
            <div class="button">
                <a href="<?php echo $block['button']['url']; ?>"><?php echo $block['button']['title']; ?></a>
            </div>
        </div>
        <div class="image-col">
            <img class="welcome-img" src="<?php echo $block['image']; ?>" alt="">
            <div class="image-content">
                <div class="img-icon">
                    <img src="<?php echo $block['image_icon']; ?>" alt="">
                </div>
                <div class="img-text">
                    <p><?php echo $block['image_title']; ?></p>
                    <span><?php echo $block['image_text']; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>