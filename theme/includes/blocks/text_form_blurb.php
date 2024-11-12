<section class="text-form-blurb">
    <div class="tfb-container">
        <div class="text-column">
            <?php if($block['has_content_with_background_image']){ ?>
                <div class="cwbi" style="background-image: url('<?php echo $block['content_with_background_image']['image']; ?>')">
                    <div class="cwbi-wrapper">
                        <p><?php echo $block['content_with_background_image']['subtitle']; ?></p>
                        <h3><?php echo $block['content_with_background_image']['title']; ?></h3>
                        <a href="<?php echo $block['content_with_background_image']['button']['url']; ?>"><?php echo $block['content_with_background_image']['button']['title']; ?></a>
                    </div>
                </div>
            <?php } ?>
            <?php if($block['content']){ ?>
                <?php foreach($block['content'] as $content){ ?>
                    <?php if($content['image']){ ?>
                        <div class="img">
                            <img src="<?php echo $content['image']; ?>" alt="">
                        </div>
                    <?php } ?>
                    <?php if($content['subtitle']){ ?>
                        <h4><?php echo $content['subtitle']; ?></h4>
                    <?php } ?>
                    <?php if($content['title']){ ?>
                        <h2><?php echo $content['title']; ?></h2>
                    <?php } ?>
                    <?php if($content['content_text']){ ?>
                        <?php echo $content['content_text']; ?>
                    <?php } ?>
                    <?php if($content['button']){ ?>
                        <a href="<?php echo $content['button']['url']; ?>"><?php echo $content['button']['title']; ?></a>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            <?php if($block['has_image_groups']){ ?>
                <div class="image-groups">
                    <?php foreach($block['image_groups'] as $ig){ ?>
                        <img src="<?php echo $ig['image']; ?>" alt="">
                    <?php } ?>
                </div>
            <?php } ?>
            <?php if($block['has_contact_info']){ ?>
                <div class="contact-info">
                    <h4>Need Help?</h4>
                    <h2>Get In Touch With Us</h2>
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
                </div>
            <?php }
            ?>
        </div>
        <div class="form">
            <h2>Get In Touch</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fullName">Full Name*</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Full Name*" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address*</label>
                    <input type="email" id="email" name="email" placeholder="Email Address*" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone No*</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone No*" required>
                </div>
                
                <div class="form-group">
                    <label for="lookingFor">What are you looking for?</label>
                    <select id="lookingFor" name="lookingFor">
                        <option value="option1">What are you looking for?</option>
                        <option value="option1">IT Asset Disposition</option>
                        <option value="option2">Data Destruction</option>
                        <option value="option3">Electronic Waste Recycling</option>
                        <option value="option3">Sell Your IT Equipment</option>
                        <option value="option3">Buy IT Equipments</option>
                        <option value="option3">Others</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="inventory">Inventory</label>
                    <textarea id="inventory" name="inventory" rows="7" placeholder="Inventory: Kindly provide your list or upload the inventory along with photos here. Please note that unlike platforms such as Craigslist, Marketplace, or eBay, we do not facilitate the purchase of individual hard drives or memory. For most used gear transactions, there is a minimum value requirement, typically ranging from $250 to $500. If you have any inquiries, feel free to reach out to us."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="estimatedValue">Estimated Value of Inventory</label>
                    <select id="estimatedValue" name="estimatedValue">
                        <option value="estimated-value-of-inventory">Estimated Value of Inventory</option>
                        <option value="$1 - $250">$1 - $250</option>
                        <option value="$250 - $1,000">$250 - $1,000</option>
                        <option value="$1,000 - $5,000">$1,000 - $5,000</option>
                        <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                        <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                        <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="howHear">How did you hear about us?</label>
                    <select id="howHear" name="howHear">
                        <option value="" selected="selected">How did you hear about us</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Google">Google</option>
                        <option value="Bing">Bing</option>
                        <option value="Yahoo">Yahoo</option>
                        <option value="Referral">Referral</option>
                        <option value="Newsletter">Newsletter</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Write your message here...</label>
                    <textarea id="message" name="message" rows="3" placeholder="Write your message here"></textarea>
                </div>
                
                <div class="form-group file-input">
                    <label for="file">Choose File</label>
                    <input type="file" id="file" name="file">
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</section>