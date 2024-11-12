<?php
    $logo = get_field("logo","option");
    $email = get_field("email","option");
    $phone = get_field("phone_number","option");
    $address = get_field("address","option");
    $navigation = get_field("navigation","option");
    $button = get_field("button","option");
    
?>

<header>
    <div class="header-container">
        <div class="header-top-wrapper">
            <div class="header-top">
                <div class="logo-container">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo $logo; ?>" alt="">
                    </a>
                </div>
                <div class="contact-info">
                    <div class="mail ci">
                        <svg aria-hidden="true" width="30" height="30" class="e-font-icon-svg e-far-envelope-open" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M494.586 164.516c-4.697-3.883-111.723-89.95-135.251-108.657C337.231 38.191 299.437 0 256 0c-43.205 0-80.636 37.717-103.335 55.859-24.463 19.45-131.07 105.195-135.15 108.549A48.004 48.004 0 0 0 0 201.485V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V201.509a48 48 0 0 0-17.414-36.993zM464 458a6 6 0 0 1-6 6H54a6 6 0 0 1-6-6V204.347c0-1.813.816-3.526 2.226-4.665 15.87-12.814 108.793-87.554 132.364-106.293C200.755 78.88 232.398 48 256 48c23.693 0 55.857 31.369 73.41 45.389 23.573 18.741 116.503 93.493 132.366 106.316a5.99 5.99 0 0 1 2.224 4.663V458zm-31.991-187.704c4.249 5.159 3.465 12.795-1.745 16.981-28.975 23.283-59.274 47.597-70.929 56.863C336.636 362.283 299.205 400 256 400c-43.452 0-81.287-38.237-103.335-55.86-11.279-8.967-41.744-33.413-70.927-56.865-5.21-4.187-5.993-11.822-1.745-16.981l15.258-18.528c4.178-5.073 11.657-5.843 16.779-1.726 28.618 23.001 58.566 47.035 70.56 56.571C200.143 320.631 232.307 352 256 352c23.602 0 55.246-30.88 73.41-45.389 11.994-9.535 41.944-33.57 70.563-56.568 5.122-4.116 12.601-3.346 16.778 1.727l15.258 18.526z"></path></svg>
                        <div class="mail-info ci-info">
                            <p>Email</p>
                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </div>
                    </div>
                    <div class="phone ci">
                        <svg aria-hidden="true" width="30" height="30" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                        <div class="phone-info ci-info">
                            <p>Phone No</p>
                            <a href="tel:(413) 442-1111">(413) 442-1111</a>
                        </div>
                    </div>
                    <div class="address ci">
                        <svg aria-hidden="true" width="30" height="30" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                        <div class="address-info ci-info">
                            <p>Address</p>
                            <a href="https://www.google.com/maps/dir//63+Flansburg+Ave+Dalton,+MA+01226+USA/@42.4746344,-73.1728605,12z/data=!4m5!4m4!1m0!1m2!1m1!1s0x89e74bf05bc7f639:0x926cf4439d5eabc3"><?php echo $address; ?></a>
                        </div>
                    </div>
                </div>
                <div class="toggle-menu">
                    <div class="button">
                        <a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
                    </div>
                    <div class="toggle-icon">
                        <span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-wrapper">
            <div class="header-bottom">
                <div class="menu">
                    <?php foreach($navigation as $nav){ ?>
                            <div class="single-link">
                                <a class="single" href="<?php echo $nav['single_navigation']['url']; ?>"><?php echo $nav['single_navigation']['title']; ?><?php if($nav['has_dropdown']) { ?> <span>▼</span> <?php } ?></a>
                                    <div class="sub-menu">
                                        <?php if($nav['has_dropdown']){ 
                                            foreach($nav['dropdown_links'] as $sublink){
                                        ?>
                                        <a  href="<?php echo $sublink['dropdown_link']['url']; ?>"><?php echo $sublink['dropdown_link']['title']; ?></a>
                                        <?php 
                                                }
                                        } ?>
                                    </div>
                            </div>
                    <?php } ?>
                </div>
                <div class="button">
                    <a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="side-menu">
    <div class="side-menu-wrapper">
        <span id="cross">x</span>
        <div class="mobile-menu">
            <?php foreach($navigation as $nav){ ?>
                    <div class="sl">
                        <a class="s" href="<?php echo $nav['single_navigation']['url']; ?>"><?php echo $nav['single_navigation']['title']; ?><?php if($nav['has_dropdown']) { ?> <span>▼</span> <?php } ?></a>
                            <div class="sm">
                                <?php if($nav['has_dropdown']){ 
                                foreach($nav['dropdown_links'] as $sublink){
                            ?>
                        <a  href="<?php echo $sublink['dropdown_link']['url']; ?>"><?php echo $sublink['dropdown_link']['title']; ?></a>
                            <?php 
                                    }
                            } ?>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".menu .single-link").hover(function(){
            $(this).children(".sub-menu").toggleClass("active");
        });
        $(".toggle-icon").click(function(){
            $(".side-menu").addClass("active");
        });
        $("#cross").click(function(){
            $(".side-menu").removeClass("active");
        });
        $(".mobile-menu .sl .s span").click(function(event) {
            event.preventDefault(); // Prevent the <a> link from opening
            $(".sm").slideToggle();
            $(".sm").toggleClass("active");
            console.log("zz")
        });


    })
</script>
