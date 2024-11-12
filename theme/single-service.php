<?php 
    global $post;
    get_header();

    $post_title = $post->post_title;
    $featured_image = get_the_post_thumbnail_url($post->ID); 

    $cwbi = get_field('has_content_with_background_image', $post->ID);
    $cont = get_field('content', $post->ID);
    $tib = get_field('text_image', $post->ID);

?>

<div class="sinlge-service-banner" style="background-image: url('<?php echo $featured_image; ?>')">  
    <div class="ss-banner-container">
        <div class="title">
            <h2><?php echo $post_title ?></h2>
        </div>
    </div>
</div>

<section class="text-form-blurb">
    <div class="tfb-container">
        <div class="text-column">
            <?php if($cwbi){ ?>
                <div class="cwbi" style="background-image: url('<?php echo $cwbi['image']; ?>')">
                    <div class="cwbi-wrapper">
                        <p><?php echo $cwbi['subtitle']; ?></p>
                        <h3><?php echo $cwbi['title']; ?></h3>
                        <a href="<?php echo $cwbi['button']['url']; ?>"><?php echo $cwbi['button']['title']; ?></a>
                    </div>
                </div>
            <?php } ?>
            <?php if($cont){ ?>
                <?php foreach($cont as $content){ ?>
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

<?php if($tib){ 
        foreach($tib as $t){
    ?>
    <section class="tib">
        <div class="tib-container">
            <div class="tib-left-col">
                <h2><?php echo $t['heading']; ?></h2>
                <p><?php echo $t['subtext']; ?></p>
            </div>
            <div class="tib-right-col">
                <img src="<?php echo $t['image']; ?>" alt="">
            </div>
        </div>
    </section>
<?php 
        }
    } 
?>

<?php 
    get_footer();
?>