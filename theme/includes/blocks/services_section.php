<section class="services-sec">
    <div class="services-sec-container">
        <?php foreach($block['service'] as $service){ ?>
            <div class="service-sec-single <?php if($service['two_col_width']){ echo "two-col"; } ?>" style="background-image: url('<?php echo $service['background_image']; ?>')">
                <div class="title">
                    <h4><?php echo $service['title']; ?></h4>
                </div>
                <div class="subtext">
                    <p><?php echo $service['subtext']; ?></p>
                </div>
                <div class="button">
                    <a href="<?php echo $service['button']['url']; ?>"><?php echo $service['button']['title']; ?></a>
                </div>
                <div class="service-img">
                    <img src="<?php echo $service['image']; ?>" alt="">
                </div>
            </div>
        <?php } ?>
    </div>
</section>