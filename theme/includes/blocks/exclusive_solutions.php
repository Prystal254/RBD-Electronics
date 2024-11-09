<section class="exclusive-solutions">
    <div class="exclusive-solutions-container">
        <div class="image-col">
            <img src="<?php echo "/wp-content/uploads/2024/11/div.elementor-element_mask-group.webp"; ?>" alt="" class="green-img">
            <img src="<?php echo $block['image']; ?>" alt="" class="img">
        </div>
        <div class="text-col">
            <div class="subtitle">
                <h4><?php echo $block['subtitle']; ?></h4>
            </div>
            <div class="title">
                <h2><?php echo $block['title']; ?></h2>
            </div>
            <div class="solutions">
                <?php foreach($block['solutions'] as $sol){ ?>
                    <div class="solution">
                        <div class="img-icon">
                            <img src="<?php echo $sol['icon']; ?>" alt="">
                        </div>
                        <div class="solution-text">
                            <p><?php echo $sol['title']; ?></p>
                            <span><?php echo $sol['subtext']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
