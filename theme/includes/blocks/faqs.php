<section class="faqs">
    <div class="faqs-container">
        <?php foreach($block['faqs'] as $faq){ ?>
            <div class="faq">
                <span class="plus">+</span>
                <span class="minus">-</span>
                <p class="question">
                    <?php echo $faq['question'] ?>
                </p>
                <p class="answer">
                    <?php echo $faq['answer'] ?>
                </p>
            </div>
        <?php } ?>
    </div>
</section>

<script>
    $(document).ready(function(){
        $(".faq").click(function(){
            $(".answer").not($(this).children(".answer")).slideUp();
            $(".faq").not($(this)).find(".plus, .question").removeClass("active");
            $(".faq").not($(this)).find(".minus").removeClass("active");

            $(this).children(".answer").slideToggle();

            $(this).find(".plus").toggleClass("active");
            $(this).find(".minus").toggleClass("active");
            $(this).find(".question").toggleClass("active");
        });
    });
</script>