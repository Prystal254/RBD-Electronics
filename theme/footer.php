<?php 
    $logo = get_field("site_logo","options");
    $tagline = get_field("tagline", "options");
    $socials = get_field("socials","options");
    $ql = get_field("quick_links","options");
    $il = get_field("info_links","options");
    $ci = get_field("contact_info","options");
    $certimg = get_field("certification_images","options");
?>
  
    <footer>
        <div class="footer-container">
            <div class="col1">
                <div class="logo">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo $logo; ?>" alt="">
                    </a>
                </div>
                <div class="tagline">
                    <?php echo $tagline; ?>
                </div>
                <div class="socials-f">
                    <a href="https://www.facebook.com/RBDElectronics?mibextid=ZbWKwL">
                        <svg class="e-font-icon-svg e-fab-facebook-f" width="20" height="20" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                    </a>
                    <a href="https://twitter.com/rbdelectronics?t=aRNnp08wSOlEPoAeadzvfw&s=09">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" class="r-13v1u17 r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp"><g><path d="M14.258 10.152L23.176 0h-2.113l-7.747 8.813L7.133 0H0l9.352 13.328L0 23.973h2.113l8.176-9.309 6.531 9.309h7.133zm-2.895 3.293l-.949-1.328L2.875 1.56h3.246l6.086 8.523.945 1.328 7.91 11.078h-3.246zm0 0"></path></g></svg>
                    </a>
                    <a href="https://www.linkedin.com/company/rbd-electronics/">
                        <svg class="e-font-icon-svg e-fab-linkedin" width="20" height="20" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                    </a>
                    <a href="https://www.instagram.com/rbdelectronics/">
                        <svg class="e-font-icon-svg e-fab-instagram" width="20" height="20" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                    </a>
                </div>
            </div>
            <div class="col2">
                <p>Quick Links</p>
                <hr>
                <ul>
                    <?php foreach($ql as $q){ ?>
                        <li><a href="<?php echo $q['link']['url']; ?>"><?php echo $q['link']['title']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col3">
                <p>Info Links</p>
                <hr>
                <ul>
                    <?php foreach($il as $c){ ?>
                        <li><a href="<?php echo $c['link']['url']; ?>"><?php echo $c['link']['title']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col4">
                <p>Contact Info</p>
                <hr>
                <div class="mail ci">
                    <svg aria-hidden="true" width="25" height="25" class="e-font-icon-svg e-far-envelope-open" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M494.586 164.516c-4.697-3.883-111.723-89.95-135.251-108.657C337.231 38.191 299.437 0 256 0c-43.205 0-80.636 37.717-103.335 55.859-24.463 19.45-131.07 105.195-135.15 108.549A48.004 48.004 0 0 0 0 201.485V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V201.509a48 48 0 0 0-17.414-36.993zM464 458a6 6 0 0 1-6 6H54a6 6 0 0 1-6-6V204.347c0-1.813.816-3.526 2.226-4.665 15.87-12.814 108.793-87.554 132.364-106.293C200.755 78.88 232.398 48 256 48c23.693 0 55.857 31.369 73.41 45.389 23.573 18.741 116.503 93.493 132.366 106.316a5.99 5.99 0 0 1 2.224 4.663V458zm-31.991-187.704c4.249 5.159 3.465 12.795-1.745 16.981-28.975 23.283-59.274 47.597-70.929 56.863C336.636 362.283 299.205 400 256 400c-43.452 0-81.287-38.237-103.335-55.86-11.279-8.967-41.744-33.413-70.927-56.865-5.21-4.187-5.993-11.822-1.745-16.981l15.258-18.528c4.178-5.073 11.657-5.843 16.779-1.726 28.618 23.001 58.566 47.035 70.56 56.571C200.143 320.631 232.307 352 256 352c23.602 0 55.246-30.88 73.41-45.389 11.994-9.535 41.944-33.57 70.563-56.568 5.122-4.116 12.601-3.346 16.778 1.727l15.258 18.526z"></path></svg>
                    <div class="mail-info ci-info">
                        <a href="mailto:info@rbdelectronics.com">info@rbdelectronics.com</a>
                    </div>
                </div>
                <div class="phone ci">
                    <svg aria-hidden="true" width="25" height="25" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                    <div class="phone-info ci-info">
                        <a href="tel:(413) 442-1111">(413) 442-1111</a>
                    </div>
                </div>
                <div class="address ci">
                    <svg aria-hidden="true" width="25" height="25" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                    <div class="address-info ci-info">
                        <a href="https://maps.app.goo.gl/5nsJhcyoDQHyicF89">63 Flansburg Ave. Dalton, MA 01226 US</a>
                    </div>
                </div>
                <div class="imgs">
                    <?php foreach($certimg as $img){ ?>
                        <img src="<?php echo $img['image']; ?>" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer>  
    <div class="footer-cc">
        <p>© Copyrights 2024 RBD Electronics | All Rights Reserved.</p>
    </div>
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
