<?php
$class = $block['className'] ?? null;
?>
<section class="testimonials py-5 <?=$class?>">
    <div class="container-xl">
        <h2 class="h3 mb-5">What Our Clients Say</h2>
        <div class="testimonials__slider">
            <?php
            $q = new WP_Query(array(
                'post_type' => 'testimonials',
                'posts_per_page' => 9
            ));
while ($q->have_posts()) {
    $q->the_post();
    ?>
            <div class="testimonials__card">
                <div class="testimonials__inner">
                    <h4>&quot;<?=get_field('title', get_the_ID())?>&quot;
                    </h4>
                    <p><?php
        if (get_field('excerpt', get_the_ID())) {
            echo get_field('excerpt', get_the_ID());
        } else {
            echo wp_trim_words(get_the_content(), 30);
        }
    ?></p>
                    <div><strong><?=get_the_title()?></strong>,<br>
                        <?=get_field('location', get_the_ID())?>
                    </div>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
    (function($) {
        $('.testimonials__slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    })(jQuery);
</script>
<?php
}, 9999);
?>